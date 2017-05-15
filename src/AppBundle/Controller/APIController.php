<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\Constructeur;
use AppBundle\Entity\FicheTech;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Voiture;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class APIController extends Controller
{

    /**
     * @Method({"POST"})
     * @Route("/MYTICKETS", name="MYTICKETS")
     */
    public function MYTICKETS(Request $request)
    {
            $post = $request->getContent();

            $post = json_decode($post);
            $id = $post->id;

        $tickets2 = $this->getDoctrine()->getRepository("AppBundle:Annonce")->findAll();
        $tickets = $this->getDoctrine()->getRepository("AppBundle:Annonce")->GetALLOFONE($id);
        $res=[];
        foreach ($tickets as $tick){
            $vts =$this->getDoctrine()->getRepository("AppBundle:Annonce")->find($tick["id"])->getVoiture();
            $img = $vts->getPhoto();
            array_push($tick,$vts->getId());
            array_push($tick,$vts->getUtilisateur()->getId());
            array_push($tick,$img);
            array_push($res,$tick);
        }

        return new JsonResponse($res,200,array('Access-Control-Allow-Origin' => '*'));
    }

    /**
     * @Method({"GET"})
     * @Route("/AllTickets.json", name="APIALLTICKETS")
     */
    public function indexAction(Request $request)
    {
        $tickets2 = $this->getDoctrine()->getRepository("AppBundle:Annonce")->findAll();
        $tickets = $this->getDoctrine()->getRepository("AppBundle:Annonce")->GetALL();
        $res=[];
        foreach ($tickets as $tick){
            $vts =$this->getDoctrine()->getRepository("AppBundle:Annonce")->find($tick["id"])->getVoiture();
            $img = $vts->getPhoto();
            array_push($tick,$vts->getId());
            array_push($tick,$vts->getUtilisateur()->getId());
            array_push($tick,$img);
            array_push($res,$tick);
        }

        return new JsonResponse($res,200,array('Access-Control-Allow-Origin' => '*'));
    }

    /**
     * @Method({"GET"})
     * @Route("/Search/{word}")
     */
    public function getSearchResults($word){
        $tickets = $this->getDoctrine()->getRepository("AppBundle:Annonce")->SearchResultsAPI($word);
        $res=[];
        foreach ($tickets as $tick){
            $vts =$this->getDoctrine()->getRepository("AppBundle:Annonce")->find($tick["id"])->getVoiture();
            $img = $vts->getPhoto();
            array_push($tick,$vts->getId());
            array_push($tick,$vts->getUtilisateur()->getId());
            array_push($tick,$img);
            array_push($res,$tick);
        }

        return new JsonResponse($res,200,array('Access-Control-Allow-Origin' => '*'));
   }
    /**
     * @Method({"GET"})
     * @Route("/Car/{id}")
     */
    public function getCarById($id, Voiture $vt){
    $voiture= $this->getDoctrine()->getRepository("AppBundle:Voiture")->getOneAPI($id);
    array_push($voiture[0],$vt->getFicheTech()->getId());
    array_push($voiture[0],["id" => $vt->getConstructeur()->getId(), "Nom" =>$vt->getConstructeur()->getNom()]);

    if ($voiture == null){
        return new JsonResponse(["message" => "La voiture n'existe pas"],404,array('Access-Control-Allow-Origin' => '*'));
    }
        return new JsonResponse($voiture,200,array('Access-Control-Allow-Origin' => '*'));
    }
    /**
 * @Method({"GET"})
 * @Route("/TS/{id}")
 */
    public function getTechById($id){
        $voiture= $this->getDoctrine()->getRepository("AppBundle:FicheTech")->getOneAPI($id);
        if ($voiture == null){
            return new JsonResponse(["message" => "La TS n'existe pas"],404,array('Access-Control-Allow-Origin' => '*'));
        }
        return new JsonResponse($voiture,200,array('Access-Control-Allow-Origin' => '*'));
    }
    /**
     * @Method({"GET"})
     * @Route("/USER/{id}")
     */
    public function getUSERById($id){
        $voiture= $this->getDoctrine()->getRepository("AppBundle:Utilisateur")->getOneAPI($id);
        if ($voiture == null){
            return new JsonResponse(["message" => "L'utilisateur n'existe pas"],404,array('Access-Control-Allow-Origin' => '*'));
        }
        return new JsonResponse($voiture,200,array('Access-Control-Allow-Origin' => '*'));
    }
    /**
     * @Method({"POST"})
     * @Route("/LoginAPI")
     */
    public  function Login(Request $request){

/*        if ($request->getMethod() == 'OPTIONS') {

            $response =  new Response();
            $response->headers->set('Access-Control-Allow-Origin', '*');
            return $response;
        }*/
     /*   $data =$request->request->all();*/

        $post = $request->getContent();
        $post = json_decode($post);
        $login = $post->loginx;
        $pass = $post->password;
        $username = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->findOneBy(['Username'=> $login]);
       /* return new JsonResponse($data,200,array('Access-Control-Allow-Origin' => '*'));*/
        if ($username){
            if ($this->get('security.password_encoder')->isPasswordValid($username, $pass)){
                $token = $this->get('lexik_jwt_authentication.encoder')
                    ->encode([
                        'username' => $username->getUsername(),
                        'exp' => time() + 900000000000 //
                    ]);
                $username->setToken($token);
                $em = $this->getDoctrine()->getManager();
                $em->merge($username);
                $em->flush();
                $response =new JsonResponse(['token' => $token,"userId" => $username->getId()],200,array('Access-Control-Allow-Origin' => '*'));
                return $response;
            }else{return new JsonResponse(['message' => "Mot de passe incorrecte"],404,array('Access-Control-Allow-Origin' => '*'));}
        }else{return new JsonResponse(['message' => "Nom d'utilisateur incorrecte"],404,array('Access-Control-Allow-Origin' => '*'));}
    }

    /**
     * @Route("/NewTicketAPI")
     * @Method({"POST"})
     */
    public  function search(Request $request){
        $post = $request->getContent();

        $post = json_decode($post);

        $CID = $post->Uid;
        $user = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->find($CID);
        $TS= new FicheTech();
        $car = new Voiture();
        $ticket = new Annonce();
        if (!$user){return new JsonResponse(['message' => "Erreur dans l'utilisateur courant"],404,array('Access-Control-Allow-Origin' => '*'));}
        $crs=$post->crs;
        property_exists($crs,"id")? $ticket->setId($crs->id):$ticket->setNom($crs->Name);
        $ticket->setNom($crs->Name);
        $ticket->setDateAjoutAnnonce(date_create((date("Y/m/d"))));
        $ticket->setDescription($crs->Description);
        $ticket->setPrix($crs->Price);
        $validation = $this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1);
        $ticket->setStatus($validation->getIsValidationOn()!=0 ? false : true);
        $ticket->setUtilisateur($user);
        $car->setNomVoiture($crs->CarName);
        $ct = $this->getDoctrine()->getRepository("AppBundle:Constructeur")->find(1);
        $car->setConstructeur($ct);
        $car->setUtilisateur($user);
        $car->setDateAjout(date_create((date("Y/m/d"))));
        $car->setDisponibilite(true);
        $car->setModeleVoiture($crs->CarModel);
        $TS->setUtilisateur($user);
        property_exists($crs, 'Carburant')?$TS->setCarburant($crs->Carburant):$TS->setCarburant(null);
        property_exists($crs, 'CU100')?$TS->setConsommationUrbaine100Km($crs->CU100):$TS->setConsommationUrbaine100Km(null);
        property_exists($crs, 'MaxRev')?$TS->setMaxRevision($crs->MaxRev):$TS->setMaxRevision(null);
        property_exists($crs, 'PF')?$TS->setPuissanceFiscale($crs->PF):$TS->setPuissanceFiscale(null);
        property_exists($crs, 'VolRev')?$TS->setVolumeResevoir($crs->VolRev):$TS->setVolumeResevoir(null);
        property_exists($crs, 'Longeur')?$TS->setLongueur($crs->Longeur):$TS->setLongueur(null);
        $car->setFicheTech($TS);
        property_exists($crs, 'image')?$file =$crs->image:$file=null;
        if ($file != null){
            $file2=null;
            $name =md5(uniqid()).'.'."png";
            $fileName =$this->getParameter("images_directory").'/'.$name;

            $file22=$this->base64_to_jpeg($file,$fileName);
            $car->setPhoto($name);
        }
        else{
            if (!property_exists($crs, 'id')){
                $car->setPhoto('/DefaultCar.gif');
            }else{
                $temp= $this->getDoctrine()->getRepository("AppBundle:Annonce")->find($crs->id);
                $car->setPhoto($temp->getVoiture()->getPhoto());
                $ticket->setStatus($temp->getStatus());
                $car ->setConstructeur($temp->getVoiture()->getConstructeur());
            }
        }
        $ticket->setVoiture($car);
        $em = $this->getDoctrine()->getManager();
        property_exists($crs,"id")?$em->merge($ticket):$em->persist($ticket);
        $em->flush();
        return new JsonResponse(['message' => property_exists($crs,"id")?"Modification Faite !":"Ajout Fait !"],200,array('Access-Control-Allow-Origin' => '*'));
    }
    /**
     * @Route("/NewUserAPI")
     * @Method({"POST"})
     */
    public function NewUSERAPI(Request $request){
        $post = $request->getContent();
        $post = json_decode($post);
        $username = $post->UserName;
        $user = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->findOneBy(['Username'=> $username]);
        if ($user){
            if(!property_exists($post, "id")){
                return new JsonResponse(['message' => "Le nom d'utilisateur que vous avez entrer existe déja"],404,array('Access-Control-Allow-Origin' => '*'));            }
        }

        $Nom = $post->Name;
        $Prenom = $post->Prenom;
        $Email = $post->Email;
        $user2 = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->findOneBy(['mail'=> $Email]);
        if ($user2){
            if(!property_exists($post, "id")){
                return new JsonResponse(['message' => "Le E-mail d'utilisateur que vous avez entrer existe déja"],404,array('Access-Control-Allow-Origin' => '*'));
            }
        }
        $Tel = $post->Tel;
        $User = new Utilisateur();
        $User->setNom($Nom);
        $User->setMail($Email);
        $User->setPrenom($Prenom);
        $User->setNumTel($Tel);
        $User->setUsername($username);
        property_exists($post,"id")?$User->setId($post->id):null;
        property_exists($post,"Ville")?$User->setVille($post->Ville):null;
        property_exists($post,"Pays")?$User->setPays($post->Pays):null;
        property_exists($post,"CodeP")?$User->setCodePostal($post->CodeP):null;
        property_exists($post, 'image')?$file =$post->image:$file=null;
        if (property_exists($post,"Password")){

            $encoded = $this->get('security.password_encoder')->encodePassword($User, $post->Password);
            $User->setPassword($encoded);
            $token = $this->get('lexik_jwt_authentication.encoder')
                ->encode([
                    'username' => $User->getUsername(),
                    'exp' => time() + 900000000000 //
                ]);
            $User->setToken($token);
        }else{
            if(property_exists($post, "id")){
                $User->setPassword($user->getPassword());
                $User->setToken($user->getToken());
                $User->setRoles($user->getRoles());
            }
        }

        if ($file != null){
            $file2=null;
            $name =md5(uniqid()).'.'."png";
            $fileName =$this->getParameter("images_directory").'/'.$name;

            $file22=$this->base64_to_jpeg($file,$fileName);
            $User->setPhoto($name);
        }
        else{
            if(property_exists($post,"id")){
                $User->setPhoto($user->getPhoto());
            }else{
                $User->setPhoto('DefaultUser.png');
            }
        }
        $em = $this->getDoctrine()->getManager();
        property_exists($post,"id")?$em->merge($User):$em->persist($User);
        $em->flush();
        $ku = $this->getDoctrine()->getRepository('AppBundle:Utilisateur')->findOneBy(['Username'=> $username]);
        $ku = $this->getDoctrine()->getRepository("AppBundle:Utilisateur")->getOneAPI($ku->getId());
        return new JsonResponse(['message' => property_exists($post,"id")?"Compte Modifié":"Compte Crée !","user"=>$ku],200,array('Access-Control-Allow-Origin' => '*'));
    }
    function base64_to_jpeg($base64_string, $output_file) {

        $ifp = fopen( $output_file, 'wb' );
        $data = $base64_string ;

        fwrite( $ifp, base64_decode( $data ) );
        fclose( $ifp );

        return $output_file;
    }

    /**
     * @Route("/DELTICKET")
     * @Method({"POST"})
     */

    public function DelTicket(Request $request)
    {
        $post = $request->getContent();

        $post = json_decode($post);
            if (!$post){
                return new JsonResponse(['message' => "Erreur de Connexion..."],404,array('Access-Control-Allow-Origin' => '*'));
            }

        $id = $post->id;
        $tc =$this->getDoctrine()->getRepository("AppBundle:Annonce")->find($id);
        if (!$tc) return new JsonResponse(['message' => "l'annonce n'existe pas..."],404,array('Access-Control-Allow-Origin' => '*'));
        $em = $this->getDoctrine()->getManager();
        $em->remove($tc);
        $em->flush();
        return new JsonResponse(['message' => "Annonce Supprimée !"],200,array('Access-Control-Allow-Origin' => '*'));
    }

}
