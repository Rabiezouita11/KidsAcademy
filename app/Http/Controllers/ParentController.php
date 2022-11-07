<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
class ParentController extends Controller
{
    public function Home()
    {
return view('Parent.home.index');
    }
public function contact()
{

return view ('Parent.contact.index');

}
public function AjoutContact(Request $request)
{
    $this->validate($request, [

        'nom' => 'string|nullable|max:255',
        'email' => 'email|nullable|max:255',
        'message' => 'string|nullable|max:255',

        ]);

   $contacts = new \App\Models\Contact();
     $contacts->nom=$request['nom'];
     $contacts->email=$request['email'];
     $contacts->message=$request['message'];
     $contacts->save();
     return redirect()->route('contact')->with('azer','le message a été bien envoyé');
}


public function profile()
{

return view('Parent.profile.index');

}



public function Affichemodifier(Request $request)
{
     $id=$request['id'];
     $users=\App\Models\User::find($id);
     $aa=\App\Models\ClasseSelected::all();
     return view('Parent.profile.modifierprofile',compact('users','aa'));
}

public function Modifierprofile(Request $request)
{

    $this->validate($request, [

        'nom' => 'string|nullable|max:255',
        'email' => 'email|nullable|max:255',
        'telephone_principale' => 'integer|digits:8',
        'telephone_secondaire' => 'integer|digits:8',
        ]);

     $id=$request['id'];
     $users=\App\Models\User::find($id);
     $users->name=$request['name'];
     $users->email=$request['email'];


     $users->classe=$request['classe'];
     $users->date_de_naissance=$request['date_de_naissance'];
     $users->lieu_de_naissance=$request['lieu_de_naissance'];
     $users->telephone_principale=$request['telephone_principale'];
     $users->telephone_secondaire=$request['telephone_secondaire'];
  
     
  
if($request->hasFile('image')){
            $users->image=$request->image->store('kidds');
        }
     $users->update();

     return redirect()->route('profile')->with('vert','le compte a bien été modifier');
}    
public function changemdp()
  {

return view ('Parent.profile.changermotdepasse');

  }

  public function update_password(Request $request){
    $request->validate([
    'old_password'=>'required',
    'new_password'=>'required',
    'confirm_password'=>'required|same:new_password'
    ]);

    $current_user=auth()->user();

    if(Hash::check($request->old_password,$current_user->password)){

        $current_user->update([
            'password'=>bcrypt($request->new_password)
        ]);

        return redirect()->back()->with('success','Mot de passe bien modifié.');

    }else{
        return redirect()->back()->with('error','Ancien mot de passe incorrect.');
    }
}



public function aflaton()
{
    $aflaton =\App\Models\Club::all();

    return view('Parent.club aflaton.index',compact('aflaton'));
}
public function AjoutAflaton(Request $request)
{
    $this->validate($request, [

        's1' => 'string|max:255',
        's2' => 'string|max:255',
        's3' => 'string|max:255',
        's4' => 'string|max:255',
        's5' => 'string|max:255',
        ]);

   $aflaton = new \App\Models\Club();
     $aflaton->s1=$request['s1'];
     $aflaton->s2=$request['s2'];
     $aflaton->s3=$request['s3'];
     $aflaton->s4=$request['s4'];
     $aflaton->s5=$request['s5'];
     $aflaton->nom_parent=$request['nom_parent'];
     $aflaton->reponse=$request['reponse'];
     
     $aflaton->save();
     Toastr::success('تم إرسال ردك','Success');
     return redirect()->route('aflaton')->with('azer','تم إرسال ردك');
}

public function indexaflatone()
{

    $image =\App\Models\Image::all();

return view('Parent.club aflaton.index2',compact('image'));

}

public function like(): JsonResponse
{
    $post = \App\Models\Image::find(request()->id);

    if ($post->isLikedByLoggedInUser()) {
        $res = \App\Models\Like::where([
            'user_id' => auth()->user()->id,
            'image_id' => request()->id
        ])->delete();

        if ($res) {
            return response()->json([
                'count' => \App\Models\Image::find(request()->id)->likes->count()
            ]);
        }

    } else {
        $like = new \App\Models\Like();

        $like->user_id = auth()->user()->id;
        $like->image_id = request()->id;

        $like->save();

        return response()->json([
            'count' => \App\Models\Image::find(request()->id)->likes->count()
        ]);
    }


}

public function scouts()
{


return view('Parent.Scouts tunisiens.index');

}


public function affichemessage()
{


return view('Parent.cahier de laison.index');

}
public function btnAjoutMessage(Request $request)
{
  
           
       $message = new \App\Models\Message();
         $message->parent_id = $request['parent_id'];
         $message->enseignant_id=$request['enseignant_id'];
         $message->message=$request['message'];
         $message->etat=$request['etat'];
         $message->save();
         Toastr::success('تم اضافته بنجاح','success');
         return redirect()->route('affichemessage');
}


public function affichedossiereleve()
{


return view('Parent.dossier eleve.index');

}


























































































}
