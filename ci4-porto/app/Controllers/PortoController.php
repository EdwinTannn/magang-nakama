<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BioModel;
use App\Models\ContactformModel;
use App\Models\EduModel;
use App\Models\ExpModel;
use App\Models\HomeModel;
use App\Models\PortoModel;
use App\Models\ServiceModel;

class PortoController extends BaseController
{
    /**
     * Function untuk Index
     */
    public function index(){
        $home_model = new HomeModel();
        $get_all_home = $home_model->findAll();
        $data = [
            'get_all_home' => $get_all_home,

        ];
        return view('index', $data);
    }

    public function about(){
        $bio_model = new BioModel();
        $get_all_bio = $bio_model->findAll();
        $about_model_edu = new EduModel();
        $get_all_about_edu = $about_model_edu->findAll();
        $about_model_exp = new ExpModel();
        $get_all_about_exp = $about_model_exp->findAll();
        $data = [
            'get_all_bio' => $get_all_bio,
            'get_all_about_edu' => $get_all_about_edu,
            'get_all_about_exp' => $get_all_about_exp,
        ];
        return view('about', $data);
    }

    public function portofolio(){
        $porto_model = new PortoModel();
        $get_all_porto = $porto_model->findAll();
        $data = [
            'get_all_porto' => $get_all_porto,
        ];
        return view('portofolio', $data);
    }

    public function service(){
        $service_model = new ServiceModel();
        $get_all_service = $service_model->findAll();
        $data = [
            'get_all_service' => $get_all_service,
        ];
        return view('service', $data);
    }

    public function contact(){
        $contactModel = new ContactformModel();
        $getContact = $contactModel->findAll();
        return view('contact', [
            'contact' => $getContact,
        ]);
    }

    /**
     * POST : /user/sendmessage
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function contact_post(){
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $number = $this->request->getVar('number');
        $message = $this->request->getVar('message');

        $contactModel = new ContactformModel();
        $InsertResult = $contactModel->createContact([
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'message' => $message
        ]);
        if (!empty($insertContact['id'])){
            return redirect()->to('/contact')->with('success', 'success sent email');
        } else
            return redirect()->to('/contact')->with('errors', 'failed sent email');
    }
    
}