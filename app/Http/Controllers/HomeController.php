<?php
namespace App\Http\Controllers;

/*      INCLUDING REQUIRED SYSTEM PACKAGES    */
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


/*      INCLUDING REQUIRED USER MODEL PACKAGES    */
use App\User as Users;
use App\Businesse as Clients;
use App\Busscategorie as BussCat;
use App\Busstype as BussTypes;
use App\Transaction as Trans;


class HomeController extends Controller
{
    private $userDetails;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return $this->sendOutputDisplay('pages.adminDashboard');
    }


    public function listAllClients()
    {
        $clientData = Clients::get();
        $bussCat    = $this->getAllBussCat();
        $bussTypes  = $this->getAllBussTypes();
        return $this->sendOutputDisplay('pages.manageClients', [$clientData, $bussCat, $bussTypes]);
    }


    public function listAllTransactions()
    {
        $transData = Trans::get();
        return $this->sendOutputDisplay('pages.transactionDetails', $transData);
    }

    public function listAllBusinessTypes()
    {
        $bTypesData = BussTypes::get();
        return $this->sendOutputDisplay('pages.manageBussinessTypes', $bTypesData);
    }



/*
*
*
*       PRIVATE METHODS WHICH WILL BE CALLED WITHIN THIS CONTROLLER
*
*
*
*/

    private function getAllBussCat()
    {

        return Cache::remember('busscat', 3600, function(){
            return BussCat::get();
        });
    }

    private function getAllBussTypes()
    {
        return Cache::remember('busstypes', 3600, function(){
            return BussTypes::get();
        });
    }

    private function sendOutputDisplay($viewToLoad, $dataToLoad = array('&nbsp;')){

        $this->getLoggedInUserDetails();
        if(View::exists($viewToLoad)){
            return view($viewToLoad)->with([ 'userDetails'=>$this->userDetails, 'dataFromController'=> $dataToLoad ]);
        }
        else
        {
            echo 'no';
        }
    }

    private function getLoggedInUserDetails(){

        $userData = session('thinktub-Auth-Data');
        $this->userDetails = Users::join('roles','users.role','=','roles.id')->select('users.name','roles.role')->where('users.email',$userData['email'])->get();
    }
}
