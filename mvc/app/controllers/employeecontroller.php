<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Helper;
class EmployeeController extends AbstractController{

    use InputFilter ;
    use Helper ;

    public function defaultAction()
    {
        $this-> _data['employees'] = EmployeeModel::getAll();
        $this->_view();
    }

    public function addAction()
    {
        if(isset($_POST['submit']))
        {
            //var_dump($_POST);
            $emp = new EmployeeModel();
            $emp->name = $this->filterSrt($_POST['name']);
            $emp->age = $this->filterInt($_POST['age']);
            $emp->address = $this->filterSrt($_POST['address']);
            $emp->salary = $this->filterFloat($_POST['salary']);
            $emp->tax = $this->filterFloat($_POST['tax']);
            if($emp->save())
            {
                $_SESSION['message']='Employee saved Successfuly';
                $this->redirect('/employee');
               //echo $emp->name." has saved succssfuly ".$emp->id;
            }
           // var_dump($emp);
        }
        $this->_view();
    }
    public function editAction()
    {
        $id = $this->filterInt($this->_prams[0]);
        $emp = EmployeeModel::getByPK($id);
        if($emp === false)
        {
            $this->redirect('/employee');
        }
        $this->_data['employee'] = $emp ;

        if(isset($_POST['submit']))
        {
            $emp->name = $this->filterSrt($_POST['name']);
            $emp->age = $this->filterInt($_POST['age']);
            $emp->address = $this->filterSrt($_POST['address']);
            $emp->salary = $this->filterFloat($_POST['salary']);
            $emp->tax = $this->filterFloat($_POST['tax']);
            if($emp->save())
            {
                $_SESSION['message']='Employee saved Successfuly';
                $this->redirect('/employee');
               //echo $emp->name." has saved succssfuly ".$emp->id;
            }
        }
        $this->_view();
    }

    public function deleteAction()
    {
        $id = $this->filterInt($this->_prams[0]);
        $emp = EmployeeModel::getByPK($id);
        if($emp === false)
        {
            $this->redirect('/employee');
        }
        if($emp->delete())
        {
            $_SESSION['message']='Employee deleted Successfuly';
            $this->redirect('/employee');
            //echo $emp->name." has saved succssfuly ".$emp->id;
        }
    }
}
