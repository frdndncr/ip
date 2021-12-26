<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url("students/insert") ?>" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ISBN">ISBN</label> 
                                    <input name="ISBN" id="ISBN" type="text" class="form-control">
                                </div>
                            </div>   
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name"> Kitap Adı</label> 
                                    <input name="name" id="name" type="text" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="author">Yazar</label> 
                                    <input name="author" id="author" type="text" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pages">Sayfa Sayısı</label> 
                                    <input name="pages" id="pages" type="text" class="form-control">
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