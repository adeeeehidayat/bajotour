<?php

namespace App\Controllers;

use App\Models\OpiniModel;
use CodeIgniter\Controller;

class Opini extends Controller
{
    public function index()
    {
        return view('opini');
    }

    public function submit()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'date' => 'required|valid_date',
            'email' => 'required',
            'experience' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }

        $model = new OpiniModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'visit_date' => $this->request->getPost('date'),
            'email' => $this->request->getPost('email'),
            'experience' => $this->request->getPost('experience'),
        ];

        if ($model->save($data)) {
            return redirect()->back()->with('success', 'Thank you for your feedback!');
        } else {
            return redirect()->back()->withInput()->with('error', ['An error occurred while submitting your feedback. Please try again.']);
        }
    }
}
