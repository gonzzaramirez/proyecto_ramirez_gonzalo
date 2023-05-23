<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class ProfileController extends Controller
{

    public function index()
    {
        $session = session();
        if (!$session->has('nombre')) {
            return redirect()->to(base_url('ingresar'));
        }

        if ($session->get('logout')) {
            return redirect()->to(base_url('ingresar'));
        }

        return view('indexIngresado', ['session' => $session]);
    }

    public function dashboard()
    {
        $session = session();
        if (!$session->has('nombre')) {
            return redirect()->to(base_url('ingresar'));
        }

        if ($session->get('logout')) {
            return redirect()->to(base_url('ingresar'));
        }

        $perfil_id = $session->get('perfil_id');

        if ($perfil_id != 1) {
            return redirect()->to(base_url('indexIngresado'));
        }

        return view('dashboard', ['session' => $session]);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        $session->set('logout', true);

        return redirect()->to(base_url('ingresar'));
    }

    public function comercializacion()
    {
        $session = session();
        if (!$session->has('nombre')) {
            return redirect()->to(base_url('ingresar'));
        }

        if ($session->get('logout')) {
            return redirect()->to(base_url('ingresar'));
        }

        return view('comercializacionIngresado', ['session' => $session]);
    }

    public function quienes_somos()
    {
        $session = session();
        if (!$session->has('nombre')) {
            return redirect()->to(base_url('ingresar'));
        }

        if ($session->get('logout')) {
            return redirect()->to(base_url('ingresar'));
        }

        return view('quienes-somosIngresado', ['session' => $session]);
    }


    public function terminos_usos()
    {
        $session = session();
        if (!$session->has('nombre')) {
            return redirect()->to(base_url('ingresar'));
        }

        if ($session->get('logout')) {
            return redirect()->to(base_url('ingresar'));
        }

        return view('terminos-usosIngresado', ['session' => $session]);


    }

    public function productos()
    {
        $session = session();
        if (!$session->has('nombre')) {
            return redirect()->to(base_url('ingresar'));
        }

        if ($session->get('logout')) {
            return redirect()->to(base_url('ingresar'));
        }

        return view('productosIngresado', ['session' => $session]);
    }

    public function contacto()
    {
        $session = session();
        if (!$session->has('nombre')) {
            return redirect()->to(base_url('ingresar'));
        }

        if ($session->get('logout')) {
            return redirect()->to(base_url('ingresar'));
        }

        return view('contactoIngresado', ['session' => $session]);
    }

}