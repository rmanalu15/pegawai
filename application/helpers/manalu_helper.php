<?php

function log_koperasi()
{
    $ci = get_instance();

    if (!$ci->session->userdata('kode_regpegawai')) {
        redirect('auth');
    }
}
