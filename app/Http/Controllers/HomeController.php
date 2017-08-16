<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

use App\User as Users;
use App\Businesse as Clients;
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
        return $this->sendOutputDisplay('pages.manageClients', $clientData);
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
