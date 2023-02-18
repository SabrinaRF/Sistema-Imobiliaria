<div class="row">
                <div class="col-12 mt-4 col-md-4">
                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload1" >
                            <a>
                                <img src="arquivo/arquivo_img/<?php echo $dados1["imgnome1"];?>" alt="Editar" class="border"  width="150" height="150">
                            </a>
                        </button>
                        
                </div>
                <div class="modal " id="modalupload1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edição de imagem</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <form enctype="multipart/form-data" action="arquivo/editarImovel_up.php?array='.$array.'" method="post"> 
                                        <p>Escolha uma imagem: </p>    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="arquivo" id="arquivo" aria-describedby="inputGroupFileAddon01" required>
                                                <label class="custom-file-label" for="arquivo">Escolher arquivo</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Confirmar alterações</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>';
                    ?> 
                    
                <div class="col-12 mt-4 col-md-4">
                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload2">
                            <a>
                                <img src="arquivo/arquivo_img/<?php echo $dados1["imgnome2"];?>" alt="Editar" class="border"  width="150" height="150">
                            </a>
                        </button>
                        
                </div>
                    <?php //////////                PERFIL UPLOAD 2               ////////////
                        
                        
                        $arr = [$dados1["idimoveis"] ,$dados1["imgnome2"] ,"imgnome2"];
                        $array = implode(" ", $arr);
                        echo'<meta charset="UTF-8">';

                            //     Modal Editar
                        echo '<div class="modal " id="modalupload2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edição de imagem</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <form enctype="multipart/form-data" action="arquivo/editarImovel_up.php?array='. $array.'" method="post"> 
                                        <p>Escolha uma imagem: </p>    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="arquivo" id="arquivo" aria-describedby="inputGroupFileAddon01" required>
                                                <label class="custom-file-label" for="arquivo">Escolher arquivo</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Confirmar alterações</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>';
                    ?>
                <div class="col-12 mt-4 col-md-4">
                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload">
                            <a>
                                <img src="arquivo/arquivo_img/<?php echo $dados1["imgnome3"];?>" alt="Editar" class="border"  width="150" height="150">
                            </a>
                        </button>
                        
                </div>
                    <?php //////////                PERFIL UPLOAD 3               ////////////

                    
                        $arr = [$dados1["idimoveis"] ,$dados1["imgnome3"] ,"imgnome3"];
                        $array = implode(" ", $arr);
                        
                        echo'<meta charset="UTF-8">';

                            //     Modal Editar
                        echo '<div class="modal " id="modalupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edição de imagem</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <form enctype="multipart/form-data" action="arquivo/editarImovel_up.php?array='. $array.'" method="post"> 
                                        <p>Escolha uma imagem: </p>    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="arquivo" id="arquivo" aria-describedby="inputGroupFileAddon01" required>
                                                <label class="custom-file-label" for="arquivo">Escolher arquivo</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Confirmar alterações</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>';
                    ?>	
            </div>
            <div class="row">
                <div class="col-12 mt-4 col-md-4">
                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload">
                            <a>
                                <img src="arquivo/arquivo_img/<?php echo $dados1["imgnome4"];?>" alt="Editar" class="border"  width="150" height="150">
                            </a>
                        </button>
                        
                </div>
                    <?php //////////                PERFIL UPLOAD 4               ////////////

                    
                        $arr = [$dados1["idimoveis"] ,$dados1["imgnome4"] ,"imgnome4"];
                        $array = implode(" ", $arr);

                        echo'<meta charset="UTF-8">';

                            //     Modal Editar
                        echo '<div class="modal " id="modalupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edição de imagem</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <form enctype="multipart/form-data" action="arquivo/editarImovel_up.php?array='. $array.'" method="post"> 
                                        <p>Escolha uma imagem: </p>    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="arquivo" id="arquivo" aria-describedby="inputGroupFileAddon01" required>
                                                <label class="custom-file-label" for="arquivo">Escolher arquivo</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Confirmar alterações</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>';
                    ?>	
                 <div class="col-12 mt-4 col-md-4">
                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload">
                            <a>
                                <img src="arquivo/arquivo_img/<?php echo $dados1["imgnome5"];?>" alt="Editar" class="border"  width="150" height="150">
                            </a>
                        </button>
                        
                </div>
                    <?php //////////                PERFIL UPLOAD 5               ////////////

                    
                        $arr = [$dados1["idimoveis"] ,$dados1["imgnome5"] ,"imgnome5"];
                        $array = implode(" ", $arr);

                        echo'<meta charset="UTF-8">';

                            //     Modal Editar
                        echo '<div class="modal " id="modalupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edição de imagem</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <form enctype="multipart/form-data" action="arquivo/editarImovel_up.php?array='. $array.'" method="post"> 
                                        <p>Escolha uma imagem: </p>    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="arquivo" id="arquivo" aria-describedby="inputGroupFileAddon01" required>
                                                <label class="custom-file-label" for="arquivo">Escolher arquivo</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Confirmar alterações</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>';
                    ?>	
                <div class="col-12 mt-4 col-md-4">
                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload">
                            <a>
                                <img src="arquivo/arquivo_img/<?php echo $dados1["imgnome6"];?>" alt="Editar" class="border"  width="150" height="150">
                            </a>
                        </button>
                        
                </div>
                    <?php //////////                PERFIL UPLOAD 6               ////////////

                       
                        $arr = [$dados1["idimoveis"] ,$dados1["imgnome6"] ,"imgnome6"];
                        $array = implode(" ", $arr);

                        echo'<meta charset="UTF-8">';

                            //     Modal Editar
                        echo '<div class="modal " id="modalupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edição de imagem</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <form enctype="multipart/form-data" action="arquivo/editarImovel_up.php?array='. $array.'" method="post"> 
                                        <p>Escolha uma imagem: </p>    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="arquivo" id="arquivo" aria-describedby="inputGroupFileAddon01" required>
                                                <label class="custom-file-label" for="arquivo">Escolher arquivo</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Confirmar alterações</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>';
                    ?>	
                    
                


            </div>
            