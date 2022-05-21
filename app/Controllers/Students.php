<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Exception;
use PhpParser\Node\Stmt\Catch_;

class Students extends ResourceController
{
    private $studentModel;

    public function __construct()
    {
        $this->studentModel = new \App\Models\StudentsModel();
    }

    /** Return all students
     * @author Michelle Belli
     */
    public  function index()
    {
        return view('students', [
            'students' => $this->studentModel->paginate(5),
            'pager' => $this->studentModel->pager

        ]);
    }

    /** Return form to create new student
     * @author Michelle Belli
     */
    public  function create()
    {
        return view('form');
    }


    /** Create new student
     * @author Michelle Belli
     */
    public  function store()
    {
        $student['name'] = $this->request->getPost('name');
        $student['photo'] = $this->request->getPost('photo');
        $student['street'] = $this->request->getPost('street');
        $student['number'] = $this->request->getPost('number');
        $student['neighborhood'] = $this->request->getPost('neighborhood');
        $student['city'] = $this->request->getPost('city');
        $student['complement'] = $this->request->getPost('complement');
        $student['state'] = $this->request->getPost('state');
        $student['country'] = $this->request->getPost('country');
        $student['cep'] = $this->request->getPost('cep');

        try {
            if ($this->studentModel->save($student)) {
                return view('messages', [
                    'message' => 'Aluno salvo com sucesso.'
                ]);
            } else {
                echo ($this->studentModel->errors());
            }
        } catch (Exception $e) {
            echo ($e->getMessage());
        }
    }

    /** Delete one student by id
     * @author Michelle Belli
     */
    public function delete($id = null)
    {
        try {
            if ($this->studentModel->delete($id)) {
                echo view('messages', [
                    'message' => 'Aluno excluído com sucesso.'
                ]);
            } else {
                echo ("Erro.");
            }
        } catch (Exception $e) {
            echo ($e->getMessage());
        }
    }

    //Return form to update a student
    public function edit($id = null)
    {
        return view('form', [
            'student' => $this->studentModel->find($id)
        ]);
    }

    /** Update one student by id
     * @author Michelle Belli
     */
    public function update($id = null)
    {

        $student['name'] = $this->request->getPost('name');
        $student['photo'] = $this->request->getPost('photo');
        $student['street'] = $this->request->getPost('street');
        $student['number'] = $this->request->getPost('number');
        $student['neighborhood'] = $this->request->getPost('neighborhood');
        $student['city'] = $this->request->getPost('city');
        $student['complement'] = $this->request->getPost('complement');
        $student['state'] = $this->request->getPost('state');
        $student['country'] = $this->request->getPost('country');
        $student['cep'] = $this->request->getPost('cep');

        try {
            if ($this->studentModel->update($id, $student)) {
                echo view('messages', [
                    'message' => 'Aluno editado com sucesso.'
                ]);
            } else {
                echo ("Erro.");
            }
        } catch (Exception $e) {
            echo ($e->getMessage());
        }
    }
}
