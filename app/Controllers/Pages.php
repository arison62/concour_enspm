<?php
namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\Session\Session;

use App\Models\CompteModel;
use App\Models\CandidatModel;
use App\Models\CycleModel;
use App\Models\DepartementModel;
use App\Models\DiplomeModel;
use App\Models\DiplomeTypeModel;
use App\Models\NationaliteModel;
use App\Models\ParcoursModel;
use App\Models\RegionModel;
use App\Models\ReleveNoteModel;
use App\Models\CentreExamenModel;
use CodeIgniter\Exceptions\PageNotFoundException;



class Pages extends BaseController
{
    protected Session $session;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->session = service('session');
    }

    public function index()
    {
        $data = [
            'title' => 'Acceuil'
        ];

        return view('templates/header', $data)
            . view('pages/home')
            . view('templates/footer');
    }

    public function connexion()
    {
        $compteModel = model(CompteModel::class);

        $headerData = [
            'title' => 'Connexion'
        ];

        // Traitement de la requete POST
        if ($this->request->getMethod() == 'POST') {
            $formData = [
                'email' => $this->request->getPost('email'),
                'mot_de_passe' => $this->request->getPost('password')
            ];
            $compte = $compteModel->where('email', $formData['email'])->first();

            if(isset($compte) && password_verify($formData['mot_de_passe'], $compte['mot_de_passe'])){
                $this->session->set(['compte' => $compte]);
                return redirect()->to(base_url('concour'));
            }else{
                $errors = [];
                array_push($errors, "Email ou mot de passe incorrect");
                $this->session->setFlashdata('errors', $errors);
            }
        }


        return view('templates/header', $headerData)
            . view('pages/connexion')
            . view('templates/footer');
    }

    public function inscription()
    {
        $headerData = [
            'title' => 'Inscription'
        ];
        // Traitement de la requete POST
        if ($this->request->getMethod() == 'POST') {
            $formData = [
                'email' => $this->request->getPost('email'),
                'mot_de_passe' => $this->request->getPost('password')
            ];

            $rules = [
                'email' => 'required',
                'mot_de_passe' => 'required|min_length[7]'
            ];
            $message = [
                'email' => 'L\'email est obligatoire',
                'mot_de_passe' => 'Le mot de passe doit contenir au moins 7 caractères'
            ];

            if (!$this->validateData($formData, $rules, $message)) {
                $this->session->setFlashdata('errors', $this->validator->getErrors());

            } else {
                $errors = [];
                $compteModel = model(CompteModel::class);

                $compte = $compteModel->where('email', $formData['email'])->first();
                if ($compte) {
                    array_push($errors, 'Email deja utilise');
                    $this->session->setFlashdata('errors', $errors);
                } else {
                    $formData['mot_de_passe'] = password_hash($formData['mot_de_passe'], PASSWORD_DEFAULT);
                    $id_compte = $compteModel->insert($formData);
                    if (!$id_compte) {
                        array_push($errors, 'Une erreur est survenue');
                        $this->session->setFlashdata('errors', $errors);
                    } else {
                        $this->session->setFlashdata('success', 'Inscription reussie');
                        return redirect()->to(base_url('connexion'));
                    }
                }
            }
            return view('templates/header', $headerData)
                . view('pages/connexion')
                . view('templates/footer');

        }
        return view('templates/header', $headerData)
            . view('pages/connexion')
            . view('templates/footer');
    }


    public function concour(){
        $headerData = [
            'title' => 'Preinscripton'
        ];
        $compte = $this->session->get('compte');
        
        // redirection de l'utilisateur s'il n'est pas connecte
        if(!isset($compte)){
            return redirect()->to(base_url('connexion'));
        }

        $regionModel = model(RegionModel::class);
        $cycleModel = model(CycleModel::class);
        $parcoursModel = model(ParcoursModel::class);
        $centreExamenModel = model(CentreExamenModel::class);
        $diplomeType = model(DiplomeTypeModel::class);

        $data = [
            'regions' => $regionModel->select('id, nom')->findAll(),
            'cycles' => $cycleModel->findAll(),
            'centres' => $centreExamenModel->findAll(),
            'departementsRegion' => $regionModel->findAllWithDepartements(),
            'parcours' => $parcoursModel->findAll(),
            'diplomeType' => $cycleModel->findAllWithDiplomeTypes()
        ];

        return view('templates/header', $headerData)
            .view('pages/concour', $data)
            .view('templates/footer');

    }

    
    public function view(string $page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}