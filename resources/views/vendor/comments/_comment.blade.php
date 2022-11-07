@inject('markdown', 'Parsedown')
@php
    // TODO: There should be a better place for this.
    $markdown->setSafeMode(true);
@endphp

<div id="comment-{{ $comment->getKey() }}" class="media">
    <img class="mr-3" src="{{($comment->commenter->image) }}"  width="90px" height="90px" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar">
    <div class="media-body">
        <h5 class="mt-0 mb-1">{{ $comment->commenter->name ?? $comment->guest_name }} <small class="text-muted">- {{ $comment->created_at->diffForHumans() }}</small></h5>
        <div style="white-space: pre-wrap;">{!! $markdown->line($comment->comment) !!}</div>

        <div>
            @can('reply-to-comment', $comment)
                <button data-toggle="modal" data-target="#reply-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link text-uppercase">الرد</button>
            @endcan
            @can('edit-comment', $comment)
                <button data-toggle="modal" data-target="#comment-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link text-uppercase">تعديل</button>
            @endcan
            @can('delete-comment', $comment)
                <a href="{{ route('comments.destroy', $comment->getKey()) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();" class="btn btn-sm btn-link text-danger text-uppercase">حذف</a>
                <form id="comment-delete-form-{{ $comment->getKey() }}" action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            @endcan
        </div>

        @can('edit-comment', $comment)
            <div class="modal fade" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                            @method('PUT')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">تعديل التعليق</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">قم بتحديث رسالتك هنا:</label>
                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                               
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">إلغاء</button>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">تحديث</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        @can('reply-to-comment', $comment)
            <div class="modal fade" id="reply-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">الرد للتعليق</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">أدخل رسالتك هنا:</label>
                                    <textarea required class="form-control" name="message" rows="3"></textarea>
                                   
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">إلغاء</button>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">الرد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        <br />{{-- Margin bottom --}}

        <?php
            if (!isset($indentationLevel)) {
                $indentationLevel = 1;
            } else {
                $indentationLevel++;
            }
        ?>

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->getKey()) && $indentationLevel <= $maxIndentationLevel)
            {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
            @foreach($grouped_comments[$comment->getKey()] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>
</div>

{{-- Recursion for children --}}
@if($grouped_comments->has($comment->getKey()) && $indentationLevel > $maxIndentationLevel)
    {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
    @foreach($grouped_comments[$comment->getKey()] as $child)
        @include('comments::_comment', [
            'comment' => $child,
            'grouped_comments' => $grouped_comments
        ])
    @endforeach
@endif