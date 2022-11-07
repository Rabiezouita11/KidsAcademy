<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Carbon;
use Brian2694\Toastr\Facades\Toastr;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

public function index()
{

return view('admin.home.index');


}
public function profile()
{

return view('admin.profile.index');


}
public function Modifierprofile(Request $request)
{

    $this->validate($request, [

        'name' => 'string|max:255',
        'email' => 'email|nullable|max:255',
        'image' => 'mimes:png,jpg',
        ]);

     $id=$request['id'];
     $admin=\App\Models\Admin::find($id);
     $admin->name=$request['name'];
     $admin->email=$request['email'];
  
if($request->hasFile('image')){
            $admin->image=$request->image->store('Admin');
        }
     $admin->update();

     return redirect()->route('profilee')->with('vert','تم تعديل الحساب');
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


   public function eleve1()
            {

              $eleve1 = DB::table('users')->where('classe', '=', 'السنة الأولى إبتدائي')->paginate(2); 
              return view('admin.eleve.index1',compact('eleve1'));
            }
            public function eleve2()
            {

 
              $eleve2 = DB::table('users')->where('classe', '=', 'السنة الثانية إبتدائي')->paginate(4); 
             
              return view('admin.eleve.index2',compact('eleve2'));
            }
            public function eleve3()
            {

        
              $eleve3 = DB::table('users')->where('classe', '=', 'السنة ثالثة إبتدائي')->paginate(4); 
            
              return view('admin.eleve.index3',compact('eleve3'));
            }
            public function eleve4()
            {

             
              $eleve4 = DB::table('users')->where('classe', '=', 'السنة رابعة إبتدائي')->paginate(4); 

              return view('admin.eleve.index4',compact('eleve4'));
            }
            public function eleve5()
            {

              
              $eleve5 = DB::table('users')->where('classe', '=', 'السنة خامسة إبتدائي')->paginate(4); 
             
              return view('admin.eleve.index5',compact('eleve5'));
            }
            public function eleve6()
            {


              $eleve6 = DB::table('users')->where('classe', '=', 'السنة سادسة إبتدائي')->paginate(4); 
              return view('admin.eleve.index6',compact('eleve6'));
            }

            public function supprimereleve1($id){
    
    
              $user=\App\Models\User::find($id);
              $user->delete();
             
              return  redirect()->route('eleve1')->with('success','eleve a été supprimer avec succées!');
              }
              public function supprimereleve2($id){
    
    
                $user=\App\Models\User::find($id);
                $user->delete();
               
                return  redirect()->route('eleve2')->with('success','eleve a été supprimer avec succées!');
                }
                public function supprimereleve3($id){
    
    
                  $user=\App\Models\User::find($id);
                  $user->delete();
                 
                  return  redirect()->route('eleve3')->with('success','eleve a été supprimer avec succées!');
                  }
                  public function supprimereleve4($id){
    
    
                    $user=\App\Models\User::find($id);
                    $user->delete();
                   
                    return  redirect()->route('eleve4')->with('success','eleve a été supprimer avec succées!');
                    }
                    public function supprimereleve5($id){
    
    
                      $user=\App\Models\User::find($id);
                      $user->delete();
                     
                      return  redirect()->route('eleve5')->with('success','eleve a été supprimer avec succées!');
                      }
                      public function supprimereleve6($id){
    
    
                        $user=\App\Models\User::find($id);
                        $user->delete();
                       
                        return  redirect()->route('eleve6')->with('success','eleve a été supprimer avec succées!');
                        }



                        public function afficheuser(Request $request)
                        {
                             $id=$request['id'];
                             $users=\App\Models\User::find($id);
               
                             return view('admin.eleve.affichepluseleve',compact('users'));
                        }



                        public function redirectback()
                        {
return redirect()->back() ;

                        }

                        public function affiche_rondivo()
                        {
                          $rondivo=\App\Models\Rondivo::all();
                      
                       return view ('admin.rondivo.index',compact('rondivo'));


                        }
                        public function affiche_ajouter_rondivo()
                        {
          
    $m1 = DB::table('users')->where('classe', '=', 'السنة الأولى إبتدائي')->get(); 
    $m2 = DB::table('users')->where('classe', '=', 'السنة الثانية إبتدائي')->get(); 
    $m3 = DB::table('users')->where('classe', '=', 'السنة ثالثة إبتدائي')->get();
    $m4 = DB::table('users')->where('classe', '=', 'السنة رابعة إبتدائي')->get(); 
    $m5 = DB::table('users')->where('classe', '=', 'السنة خامسة إبتدائي')->get(); 
    $m6= DB::table('users')->where('classe', '=', 'السنة سادسة إبتدائي')->get(); 
return view ('admin.rondivo.ajouter',compact('m1','m2','m3','m4','m5','m6'));


                        }

                        public function supprimerrondivo($id){
    
    
                          $user=\App\Models\Rondivo::find($id);
                          $user->delete();
                         
                          return  redirect()->route('affiche_rondivo')->with('success','eleve a été supprimer avec succées!');
                          }


                          public function AjoutRondivo(Request $request)
	 	{
            $this->validate($request, [
              'message' => 'required',
              'time_debut' => 'required',
              'time_fin' => 'required|after:time_debut',
                ]);
                
            $rondivo = new \App\Models\Rondivo();
              $rondivo->nom_prof = $request['nom_prof'];
              $rondivo->nom_parent=$request['nom_parent'];
              $rondivo->image=$request->image->store('Rondivo');
              $rondivo->date=$request['date'];
              $rondivo->time_debut=$request['time_debut'];
              $rondivo->time_fin=$request['time_fin'];
              
              $rondivo->objet=$request['objet'];       
              $rondivo->message=$request['message']; 
              $rondivo->vue=$request['vue'];        
	 	         	$rondivo->save();
              return redirect()->route('affiche_rondivo')->with('success','le produit a bien été ajouté');
	 	}


     public function aflatonn()
     {


      return view('admin.club aflaton.index');
     }

     public function updateAflaton1(Request $request)
     {
 
           $id=$request['id'];
          $Aflaton=\App\Models\Club::find($id);
          $Aflaton->reponse=$request['reponse'];
          $Aflaton->update();
          Toastr::info('تم قبول','info');
          return redirect()->route('aflatonn');
 
        }
        public function updateAflaton2(Request $request)
        {
    
              $id=$request['id'];
             $Aflaton=\App\Models\Club::find($id);
             $Aflaton->reponse=$request['reponse'];
             $Aflaton->update();
             Toastr::warning('تم رفض','warning');
             return redirect()->route('aflatonn');
    
           }


           public function image()
           {
            $image=\App\Models\Image::all();
 
return view ('admin.club aflaton.image.index',compact('image'));


           }
           public function Ajoutimage()
           {
            $mytime = Carbon\Carbon::now();
            $date = Carbon\Carbon::parse($mytime);
            $date->addHours(1);
 
return view ('admin.club aflaton.image.ajouter',compact('date'));


           }

           public function btnAjoutimage(Request $request)
           {
                  $this->validate($request, [
                    'nom' => 'required',
                    'image' => 'mimes:png,jpg',
                      ]);
                      
                  $image = new \App\Models\Image();
                    $image->nom = $request['nom'];
                    $image->date=$request['date'];
                    $image->image=$request->image->store('Club');
                    $image->save();
                    Toastr::success('تم اضافته بنجاح','success');
                    return redirect()->route('image');
           }
           public function supprimerimage($id){
    
    
            $image=\App\Models\Image::find($id);
            $image->delete();
            Toastr::error('تم حذفه بنجاح!','error');
            return  redirect()->route('image');
            }


            public function affichecahierlaison()
            {
              $message=\App\Models\Message::all();

return view('admin.cahier de laison.index');

            }
         /*    $id=$request['id'];
            $message=\App\Models\Message::find($id); */
            public function pageRepondre()
            {
          
                 $m1 = DB::table('users')->where('classe', '=', 'السنة الأولى إبتدائي')->get(); 
                 $m2 = DB::table('users')->where('classe', '=', 'السنة الثانية إبتدائي')->get(); 
                 $m3 = DB::table('users')->where('classe', '=', 'السنة ثالثة إبتدائي')->get();
                 $m4 = DB::table('users')->where('classe', '=', 'السنة رابعة إبتدائي')->get(); 
                 $m5 = DB::table('users')->where('classe', '=', 'السنة خامسة إبتدائي')->get(); 
                 $m6= DB::table('users')->where('classe', '=', 'السنة سادسة إبتدائي')->get(); 
                 return view('admin.cahier de laison.repondre',compact('m1','m2','m3','m4','m5','m6'));
            }


            public function AfficheEditmessage(Request $request)
            {
                 $id=$request['id'];
                 $message=\App\Models\Message::find($id);
   
                 return view('admin.cahier de laison.repondreid',compact('message'));
            }
            public function btnAjoutMessage(Request $request)
            {
              
                       
                   $message = new \App\Models\Message();
                     $message->parent_id = $request['nom_parent'];
                     $message->enseignant_id=$request['enseignant_id'];
                     $message->message=$request['message'];
                     $message->image=$request['image'];
                     $message->etat=$request['etat'];
                     $message->save();
                     Toastr::success('تم اضافته بنجاح','success');
                     return redirect()->route('affichecahierlaison');
            }

            public function showcontact()
            {


return view ('admin.contact.index') ;


            }
            public function supprimerecontact($id){
    
    
              $user=\App\Models\Contact::find($id);
              $user->delete();
              Toastr::success('تم اضافته بنجاح','success');
              return  redirect()->route('showcontact');
              }
              public function showdoosiereleve()
              {
  
  
  return view ('admin.dossier eleve.index') ;
  
  
              }
              public function ajouterdossier()
              {
                $m1 = DB::table('users')->where('classe', '=', 'السنة الأولى إبتدائي')->get(); 
                $m2 = DB::table('users')->where('classe', '=', 'السنة الثانية إبتدائي')->get(); 
                $m3 = DB::table('users')->where('classe', '=', 'السنة ثالثة إبتدائي')->get();
                $m4 = DB::table('users')->where('classe', '=', 'السنة رابعة إبتدائي')->get(); 
                $m5 = DB::table('users')->where('classe', '=', 'السنة خامسة إبتدائي')->get(); 
                $m6= DB::table('users')->where('classe', '=', 'السنة سادسة إبتدائي')->get(); 
  
  return view ('admin.dossier eleve.ajouter',compact('m1','m2','m3','m4','m5','m6')) ;
  
  
              }

          /*     sana 1 et 2  */
              public function btnAjoutsana12(Request $request)
              {
             
/* 
                if (\App\Models\Langaearabe::where('parent_id', '=', Input::get('parent_id'))->where('semstre', '=', Input::get('semstre'))->exists()) {
                
                  return view ('bb');
               }
               else   */


                     $m = new \App\Models\Langaearabe();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->semstre=$request['semstre'];
                       $m->m1=$request['m1'];
                       $m->تواصل_شفوي=$request['تواصل_شفوي'];
                       $m->قراءة=$request['قراءة'];
                       $m->الخط=$request['الخط'];
                       $m->انتاج_كتابي=$request['انتاج_كتابي'];
                       $m->معدل_المجال=$request['arabe'];
                       $m->save();


                       $m = new \App\Models\Al3ouloum();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->semstre=$request['semstre'];
                       $m->رياضيات=$request['رياضيات'];
                       $m->m1=$request['m1'];
                       $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
                       $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
                       $m->معدل_المجال=$request['teck'];
                       $m->save();

                       $m = new \App\Models\Tanschaa();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->m1=$request['m1'];
                       $m->semstre=$request['semstre'];
                       $m->تربية_اسلامية=$request['تربية_اسلامية'];
                       $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
                       $m->تربية_موسيقية=$request['تربية_موسيقية'];
                       $m->تربية_بدنية=$request['تربية_بدنية'];
                       $m->معدل_المجال=$request['tans'];
                       $m->save();
                       Toastr::success('تم اضافته بنجاح','success');
                       return redirect()->route('showdoosiereleve');
              }
              
              public function semstre2(Request $request)
              {
                
                         
                     $m = new \App\Models\Langaearabe();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->semstre=$request['semstre'];
                       $m->m2=$request['m2'];
                       $m->تواصل_شفوي=$request['تواصل_شفوي'];
                       $m->قراءة=$request['قراءة'];
                       $m->الخط=$request['الخط'];
                       $m->انتاج_كتابي=$request['انتاج_كتابي'];
                       $m->معدل_المجال=$request['arabe'];
                       $m->save();


                       $m = new \App\Models\Al3ouloum();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->semstre=$request['semstre'];
                       $m->رياضيات=$request['رياضيات'];
                       $m->m2=$request['m2'];
                       $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
                       $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
                       $m->معدل_المجال=$request['teck'];
                       $m->save();

                       $m = new \App\Models\Tanschaa();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->m2=$request['m2'];
                       $m->semstre=$request['semstre'];
                       $m->تربية_اسلامية=$request['تربية_اسلامية'];
                       $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
                       $m->تربية_موسيقية=$request['تربية_موسيقية'];
                       $m->تربية_بدنية=$request['تربية_بدنية'];
                       $m->معدل_المجال=$request['tans'];
                       $m->save();
                       Toastr::success('تم اضافته بنجاح','success');
                       return redirect()->route('showdoosiereleve');
              }
              public function semstre3(Request $request)
              {
                
                         
                     $m = new \App\Models\Langaearabe();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->semstre=$request['semstre'];
                       $m->m3=$request['m3'];
                       $m->تواصل_شفوي=$request['تواصل_شفوي'];
                       $m->قراءة=$request['قراءة'];
                       $m->الخط=$request['الخط'];
                       $m->انتاج_كتابي=$request['انتاج_كتابي'];
                       $m->معدل_المجال=$request['arabe'];
                       $m->save();


                       $m = new \App\Models\Al3ouloum();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->semstre=$request['semstre'];
                       $m->رياضيات=$request['رياضيات'];
                       $m->m3=$request['m3'];
                       $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
                       $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
                       $m->معدل_المجال=$request['teck'];
                       $m->save();

                       $m = new \App\Models\Tanschaa();
                       $m->parent_id = $request['parent_id'];
                       $m->enseignant_id=$request['enseignant_id'];
                       $m->m3=$request['m3'];
                       $m->semstre=$request['semstre'];
                       $m->تربية_اسلامية=$request['تربية_اسلامية'];
                       $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
                       $m->تربية_موسيقية=$request['تربية_موسيقية'];
                       $m->تربية_بدنية=$request['تربية_بدنية'];
                       $m->معدل_المجال=$request['tans'];
                       $m->save();
                       Toastr::success('تم اضافته بنجاح','success');
                       return redirect()->route('showdoosiereleve');
              }
               /*   end sana 1 et 2  */

                        /*   sana 3 et 4 */

                        public function s1(Request $request)
                        {
                          
                                   
                               $m = new \App\Models\Langaearabe();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->m1=$request['m1'];
                                 $m->تواصل_شفوي=$request['تواصل_شفوي'];
                                 $m->قراءة=$request['قراءة'];
                                 $m->قواعد_للغة=$request['قواعد_للغة'];
                                 $m->انتاج_كتابي=$request['انتاج_كتابي'];
                                 $m->معدل_المجال=$request['arabe'];
                                 $m->save();
          
          
                                 $m = new \App\Models\Al3ouloum();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->رياضيات=$request['رياضيات'];
                                 $m->m1=$request['m1'];
                                 $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
                                 $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
                                 $m->معدل_المجال=$request['teck'];
                                 $m->save();
          
                                 $m = new \App\Models\Tanschaa();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->m1=$request['m1'];
                                 $m->semstre=$request['semstre'];
                                 $m->تربية_اسلامية=$request['تربية_اسلامية'];
                                 $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
                                 $m->تربية_موسيقية=$request['تربية_موسيقية'];
                                 $m->تربية_بدنية=$request['تربية_بدنية'];
                                 $m->معدل_المجال=$request['tans'];
                                 $m->save();
                                 
                                 $m = new \App\Models\Francais();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->m1=$request['m1'];
                                 $m->expr_orale=$request['expr_orale'];
                                 $m->lecture=$request['lecture'];
                                 $m->prod_écrite=$request['prod_écrite'];
                                 $m->معدل_المجال=$request['fr'];
                                 $m->save();
                                 Toastr::success('تم اضافته بنجاح','success');
                                 return redirect()->route('showdoosiereleve');
                        }
                        
                        public function s2(Request $request)
                        {
                          
                                   
                               $m = new \App\Models\Langaearabe();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->m2=$request['m2'];
                                 $m->تواصل_شفوي=$request['تواصل_شفوي'];
                                 $m->قراءة=$request['قراءة'];
                                 $m->قواعد_للغة=$request['قواعد_للغة'];
                                 $m->انتاج_كتابي=$request['انتاج_كتابي'];
                                 $m->معدل_المجال=$request['arabe'];
                                 $m->save();
          
          
                                 $m = new \App\Models\Al3ouloum();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->رياضيات=$request['رياضيات'];
                                 $m->m2=$request['m2'];
                                 $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
                                 $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
                                 $m->معدل_المجال=$request['teck'];
                                 $m->save();
          
                                 $m = new \App\Models\Tanschaa();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->m2=$request['m2'];
                                 $m->semstre=$request['semstre'];
                                 $m->تربية_اسلامية=$request['تربية_اسلامية'];
                                 $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
                                 $m->تربية_موسيقية=$request['تربية_موسيقية'];
                                 $m->تربية_بدنية=$request['تربية_بدنية'];
                                 $m->معدل_المجال=$request['tans'];
                                 $m->save();
                                 
                                 $m = new \App\Models\Francais();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->m2=$request['m2'];
                                 $m->expr_orale=$request['expr_orale'];
                                 $m->lecture=$request['lecture'];
                                 $m->prod_écrite=$request['prod_écrite'];
                                 $m->معدل_المجال=$request['fr'];
                                 $m->save();
                                 Toastr::success('تم اضافته بنجاح','success');
                                 return redirect()->route('showdoosiereleve');
                        }
                        



                        public function s3(Request $request)
                        {
                          
                                   
                               $m = new \App\Models\Langaearabe();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->m3=$request['m3'];
                                 $m->تواصل_شفوي=$request['تواصل_شفوي'];
                                 $m->قراءة=$request['قراءة'];
                                 $m->قواعد_للغة=$request['قواعد_للغة'];
                                 $m->انتاج_كتابي=$request['انتاج_كتابي'];
                                 $m->معدل_المجال=$request['arabe'];
                                 $m->save();
          
          
                                 $m = new \App\Models\Al3ouloum();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->رياضيات=$request['رياضيات'];
                                 $m->m3=$request['m3'];
                                 $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
                                 $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
                                 $m->معدل_المجال=$request['teck'];
                                 $m->save();
          
                                 $m = new \App\Models\Tanschaa();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->m3=$request['m3'];
                                 $m->semstre=$request['semstre'];
                                 $m->تربية_اسلامية=$request['تربية_اسلامية'];
                                 $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
                                 $m->تربية_موسيقية=$request['تربية_موسيقية'];
                                 $m->تربية_بدنية=$request['تربية_بدنية'];
                                 $m->معدل_المجال=$request['tans'];
                                 $m->save();
                                 
                                 $m = new \App\Models\Francais();
                                 $m->parent_id = $request['parent_id'];
                                 $m->enseignant_id=$request['enseignant_id'];
                                 $m->semstre=$request['semstre'];
                                 $m->m3=$request['m3'];
                                 $m->expr_orale=$request['expr_orale'];
                                 $m->lecture=$request['lecture'];
                                 $m->prod_écrite=$request['prod_écrite'];
                                 $m->معدل_المجال=$request['fr'];
                                 $m->save();
                                 Toastr::success('تم اضافته بنجاح','success');
                                 return redirect()->route('showdoosiereleve');
                        }
                        
  /*   end sana 3 et 4  */


                     /*    sana 5 et 6
 */


public function sana1(Request $request)
{
  
           
       $m = new \App\Models\Langaearabe();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->m1=$request['m1'];
         $m->تواصل_شفوي=$request['تواصل_شفوي'];
         $m->قراءة=$request['قراءة'];
         $m->قواعد_للغة=$request['قواعد_للغة'];
         $m->انتاج_كتابي=$request['انتاج_كتابي'];
         $m->معدل_المجال=$request['arabe'];
         $m->save();


         $m = new \App\Models\Al3ouloum();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->رياضيات=$request['رياضيات'];
         $m->m1=$request['m1'];
         $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
         $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
         $m->معدل_المجال=$request['teck'];
         $m->save();

         $m = new \App\Models\Tanschaa();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->m1=$request['m1'];
         $m->semstre=$request['semstre'];
         $m->تربية_اسلامية=$request['تربية_اسلامية'];
         $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
         $m->تربية_موسيقية=$request['تربية_موسيقية'];
         $m->تربية_بدنية=$request['تربية_بدنية'];
         $m->تربية_مدنية=$request['تربية_مدنية'];
         $m->تاريخ=$request['تاريخ'];
         $m->جغرافيا=$request['جغرافيا'];
         $m->معدل_المجال=$request['tans'];
         $m->save();
         
         $m = new \App\Models\Francais();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->m1=$request['m1'];
         $m->expr_orale=$request['expr_orale'];
         $m->lecture=$request['lecture'];
         $m->prod_écrite=$request['prod_écrite'];
         $m->الانقليزية=$request['الانقليزية'];
         $m->معدل_المجال=$request['fr'];
         $m->save();
         Toastr::success('تم اضافته بنجاح','success');
         return redirect()->route('showdoosiereleve');
}


public function sana2(Request $request)
{
  
           
       $m = new \App\Models\Langaearabe();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->m2=$request['m2'];
         $m->تواصل_شفوي=$request['تواصل_شفوي'];
         $m->قراءة=$request['قراءة'];
         $m->قواعد_للغة=$request['قواعد_للغة'];
         $m->انتاج_كتابي=$request['انتاج_كتابي'];
         $m->معدل_المجال=$request['arabe'];
         $m->save();


         $m = new \App\Models\Al3ouloum();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->رياضيات=$request['رياضيات'];
         $m->m2=$request['m2'];
         $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
         $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
         $m->معدل_المجال=$request['teck'];
         $m->save();

         $m = new \App\Models\Tanschaa();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->m2=$request['m2'];
         $m->semstre=$request['semstre'];
         $m->تربية_اسلامية=$request['تربية_اسلامية'];
         $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
         $m->تربية_موسيقية=$request['تربية_موسيقية'];
         $m->تربية_بدنية=$request['تربية_بدنية'];
         $m->تربية_مدنية=$request['تربية_مدنية'];
         $m->تاريخ=$request['تاريخ'];
         $m->جغرافيا=$request['جغرافيا'];
         $m->معدل_المجال=$request['tans'];
         $m->save();
         
         $m = new \App\Models\Francais();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->m2=$request['m2'];
         $m->expr_orale=$request['expr_orale'];
         $m->lecture=$request['lecture'];
         $m->prod_écrite=$request['prod_écrite'];
         $m->الانقليزية=$request['الانقليزية'];
         $m->معدل_المجال=$request['fr'];
         $m->save();
         Toastr::success('تم اضافته بنجاح','success');
         return redirect()->route('showdoosiereleve');
}





public function sana3(Request $request)
{
  
           
       $m = new \App\Models\Langaearabe();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->m3=$request['m3'];
         $m->تواصل_شفوي=$request['تواصل_شفوي'];
         $m->قراءة=$request['قراءة'];
         $m->قواعد_للغة=$request['قواعد_للغة'];
         $m->انتاج_كتابي=$request['انتاج_كتابي'];
         $m->معدل_المجال=$request['arabe'];
         $m->save();


         $m = new \App\Models\Al3ouloum();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->رياضيات=$request['رياضيات'];
         $m->m3=$request['m3'];
         $m->الايقاظ_العلمي=$request['الايقاظ_العلمي'];
         $m->تربية_تكنولوجية=$request['تربية_تكنولوجية'];
         $m->معدل_المجال=$request['teck'];
         $m->save();

         $m = new \App\Models\Tanschaa();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->m3=$request['m3'];
         $m->semstre=$request['semstre'];
         $m->تربية_اسلامية=$request['تربية_اسلامية'];
         $m->تربية_تشكيلية=$request['تربية_تشكيلية'];
         $m->تربية_موسيقية=$request['تربية_موسيقية'];
         $m->تربية_بدنية=$request['تربية_بدنية'];
         $m->تربية_مدنية=$request['تربية_مدنية'];
         $m->تاريخ=$request['تاريخ'];
         $m->جغرافيا=$request['جغرافيا'];
         $m->معدل_المجال=$request['tans'];
         $m->save();
         
         $m = new \App\Models\Francais();
         $m->parent_id = $request['parent_id'];
         $m->enseignant_id=$request['enseignant_id'];
         $m->semstre=$request['semstre'];
         $m->m3=$request['m3'];
         $m->expr_orale=$request['expr_orale'];
         $m->lecture=$request['lecture'];
         $m->prod_écrite=$request['prod_écrite'];
         $m->الانقليزية=$request['الانقليزية'];
         $m->معدل_المجال=$request['fr'];
         $m->save();
         Toastr::success('تم اضافته بنجاح','success');
         return redirect()->route('showdoosiereleve');
}



public function feedback()
{

return view ('admin.feedback.index');

}








































}
