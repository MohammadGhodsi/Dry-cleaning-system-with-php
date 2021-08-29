<?php 
    interface iuser {
        public function login($username , $password);
        public function change_password ($password_new,$userid );
    }