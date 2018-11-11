<?= view('header/header', ['css' => $assets['css'] ,'active_header'=> $assets['active_header']] )->render() ?>


<?= view('footer/footer', ['js' => $assets['js']])->render() ?>