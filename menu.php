                <div class="Pagina">
                    <div class="__Grid1">
                        <div class="Seccion1">
                            <div class="MenuGeneralS" hidden="">
                                <div class="MenuGeneral">
                                    <div class="__MenuGeneral img02">
                                        <a href = "nuevo.php" target = "frame2"> 
                                            <img class="imagenesMenu" onmouseout="this.src='img/menu_nuevo.png';" onmouseover="this.src='img/menu_nuevo1.png';" src="img/menu_nuevo.png" alt="Sistema" title="Nueva Cotizacion">
                                        </a>
                                    </div>
                                    <div class="__MenuGeneral img03">
                                        <a href = "buscar.php" target = "frame2">
                                            <img class="imagenesMenu" onmouseout="this.src='img/menu_buscar.png';" onmouseover="this.src='img/menu_buscar1.png';" src="img/menu_buscar.png" alt="Sistema" title="Cerrar Cotizacion">
                                        </a>
                                    </div>
                                    <div class="__MenuGeneral img04" hidden>
                                        <?php if ($id_c>0){?><a href = "modifica.php?id=<?php echo $id_c; ?>" target = "frame2"> <?php } ?>
                                            <img class="imagenesMenu" onmouseout="this.src='img/menu_elementos.png';" onmouseover="this.src='img/menu_elementos1.png';" src="img/menu_elementos.png" alt="Sistema" title="Elementos">
                                        <?php if ($id_c>0){?></a><?php } ?>
                                    </div>
                                    <div class="__MenuGeneral img05" hidden>
                                        <?php if ($id_c>0){?><a href = "obs.php?id=<?php echo $id_c; ?>" target = "frame2"> <?php } ?>
                                            <img class="imagenesMenu" onmouseout="this.src='img/menu_obs.png';" onmouseover="this.src='img/menu_obs1.png';" src="img/menu_obs.png" alt="Sistema" title="Observaciones">
                                        <?php if ($id_c>0){?></a><?php } ?>
                                    </div>
                                    <div class="__MenuGeneral img06" hidden>
                                        <?php if ($id_c>0){?><a href = "imprimir.php?id=<?php echo $id_c; ?>" target = "frame2"> <?php } ?>
                                            <img class="imagenesMenu" onmouseout="this.src='img/menu_print.png';" onmouseover="this.src='img/menu_print1.png';" src="img/menu_print.png" alt="Sistema" title="Imprime Ficha">
                                        <?php if ($id_c>0){?></a><?php } ?>
                                    </div>
                                    <div class="__MenuGeneral img07" hidden>
                                        <a href = "index.html" target = "_top" onclick="return confirm('Esta Seguro?')"> 
                                            <img class="imagenesMenu" onmouseout="this.src='img/menu_cerrar.png';" onmouseover="this.src='img/menu_cerrar1.png';" src="img/menu_cerrar.png" alt="Sistema" title="Cerrar Cotizacion">
                                        </a>
                                    </div>
                                    <div class="__MenuGeneral img08" hidden>
                                        <?php if ($id_c>0){?><a href = "config.php?id=<?php echo $id_c; ?>" target = "frame2"> <?php } ?>
                                            <img class="imagenesMenu" onmouseout="this.src='img/menu_config.png';" onmouseover="this.src='img/menu_config1.png';" src="img/menu_config.png" alt="Sistema" title="Configuracion">
                                        <?php if ($id_c>0){?></a><?php } ?>
                                    </div>
    
                                </div>
                            </div>
                            <div class="__MenuGeneral img01">
                                <div class="BtnMenu">
                                    <img class="activator" id="activator" src="img/menu.png" alt="Menu General" title="Menu General">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="__Grid6">
                        <!--* Aca esta la parte de CopyRight --->
                        <div class="Seccion6"></div>
                    </div>
                </div>
