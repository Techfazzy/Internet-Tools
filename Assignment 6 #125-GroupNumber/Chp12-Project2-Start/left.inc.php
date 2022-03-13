            <aside class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading">Continents</div>
                    <ul class="list-group">
                       
                       <?php   /* you will need to replace this hard-coded list with appropriate PHP */
                        foreach($continents as $value){
                            // $src = $value."[".$key."]";
                            echo "<li class='list-group-item'>";
                            echo "<a href='#'> $value</a>";
                            echo"</li";
                             }
                        ?>
                        
                        
                    </ul>
                </div>
                <!-- end continents panel -->

                <div class="panel panel-info">
                    <div class="panel-heading">Popular</div>
                    <ul class="list-group">
                      
                       <?php   /* you will need to replace this hard-coded list with appropriate PHP */
                        foreach($countries as $key => $value){
                            // $src = $value."[".$key."]";
                            echo "<li class='list-group-item'>";
                            echo "<a href='list.php?country=$value> $value</a>";
                            echo"</li";
                             }
                        ?>
                        
                    </ul>
                </div>
                <!-- end continents panel -->
            </aside>