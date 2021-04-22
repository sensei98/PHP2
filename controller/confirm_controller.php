<?php

require_once '../model/confirm_model.php';

class ConfirmContr{
    public function getAllPayments(){
        $model = new Confirm_Model();
        return $model->getAllPayments();
    }
}
