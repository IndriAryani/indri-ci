<?php 
function is_logged_in()
{
    $ci = get_instance(); #mengatasi jk blm login mk tdk bs msk ke halaman admin
    #jk tdk ditemukan session yg sesuai maka di tolak
    if(!$ci->session->userdata('username')) {
        redirect('login');
    }
}