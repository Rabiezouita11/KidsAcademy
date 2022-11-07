<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Tooltip Message
    |--------------------------------------------------------------------------
    |
    | Text that appears in the tooltip when the cursor hover the bubble, before
    | the popup opens.
    |
    */

    'tooltip' => 'إعطاء ردود الفعل',

    /*
    |--------------------------------------------------------------------------
    | Popup Title
    |--------------------------------------------------------------------------
    |
    | This is the text that will appear below the logo in the feedback popup
    |
    */

    'title' => 'مساعدتنا في تحسين موقعنا على الانترنت',

    /*
    |--------------------------------------------------------------------------
    | Success Message
    |--------------------------------------------------------------------------
    |
    | This message will be displayed if the feedback message is correctly sent.
    |
    */

    'success' => 'شكرا لك على ملاحظاتك!',

    /*
    |--------------------------------------------------------------------------
    | Placeholder
    |--------------------------------------------------------------------------
    |
    | This text will appear as the placeholder of the textarea in which the
    | the user will type his feedback.
    |
    */

    'placeholder' => 'اكتب ملاحظاتك هنا ...',

    /*
    |--------------------------------------------------------------------------
    | Button Label
    |--------------------------------------------------------------------------
    |
    | Text of the confirmation button to send the feedback.
    |
    */

    'button' => 'ارسل رأيك',

    /*
    |--------------------------------------------------------------------------
    | Feedback Texts
    |--------------------------------------------------------------------------
    |
    | Must match the feedbacks array from the config file
    |
    */
    'feedbacks' => [
        'like' => [
            'title' => 'يعجبني شيء ما',
            'label' => 'ما الذي أعجبك ؟',
        ],
        'dislike' => [
            'title' => 'أنا لا أحب شيئا',
            'label' => 'ما الذي لم يعجبك؟',
        ],
        'suggestion' => [
            'title' => 'لدي اقتراح',
            'label' => 'ما هو اقتراحك ؟',
        ],
        // 'bug' => [
        //     'title' => 'I found a bug',
        //     'label' => 'Please explain what happened',
        // ],
    ],
];
