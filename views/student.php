<?php

//Test için verilerin gelip gelmediği kontrol edildi.
//print_r($todos);

//die();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Kayıt Uygulaması</title>

    <?php $this->load->view("includes/style.php"); ?>

</head>

<body>

    <h3 class="text-center">Öğrenci Kayıt Uygulaması</h5>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url("students/index") ?>" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="number"> Öğrenci Numarası</label> 
                                    <input name="number" id="number" type="text" class="form-control">
                                </div>
                            </div>   
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name"> Öğrenci Adı</label> 
                                    <input name="name" id="name" type="text" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="surname"> Öğrenci Soyadı</label> 
                                    <input name="surname" id="surname" type="text" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email"> Öğrenci Email</label> 
                                    <input name="email" id="email" type="text" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="gsm"> Öğrenci gsm</label> 
                                    <input name="gsm" id="gsm" type="text" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="gender"> Cinsiyet</label>
                                    <label><input name="gender" id="gender" type="radio">Erkek</label>
                                    <label><input name="gender" id="gender" type="radio">Kadın</label>
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="courses"> Dersler</label> 
                                    <select name="courses" class="form-control" id="courses">
                                        <option value="">Ders Seçiniz</option>
                                        <option value="php">Php</option>
                                        <option value="java">Java</option>
                                        <option value="html">Html</option>
                                        <option value="css">CSS</option>
                                        <option value="c#">C#</option>
                                    </select>
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <button class="btn btn-primary">Ekle </button>
                            </div>
                        </div>
                        
                    </form>
                    <form action="<?php echo base_url()?>" method="POST">
                    <button class="btn btn-primary">Başa Dön </button>
                    </form>
                </div>
            </div>

            <br>
            <div class="row">
                <table class="table table-bordered table-hover table-striped">

                    <thead>
                        <tr>
                            <td class="text-center">Yapılacaklar</td>
                            <td style="width: 100px;">Durum</td>
                            <td style="width: 100px;">İşlem</td>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($todos as $todo) { ?>

                            <tr>
                                <td><?php echo $todo->description; ?></td>
                                <td> <input 
                                type="checkbox" 
                                data-url="<?php echo base_url("todo/isComplatedSetter/$todo->id")?>"
                                class="form-control js-switch" <?php echo ($todo->complatedAt==1)? "checked": " " ?>></td>
                                <td><a href="<?php echo base_url("todo/delete/$todo->id") ?>" class="btn btn-danger"> Sil </a> </td>
                            </tr>

                        <?php } ?>


                    </tbody>


                </table>


            </div>
        </div>









        <?php $this->load->view("includes/script.php"); ?>

</body>

</html>