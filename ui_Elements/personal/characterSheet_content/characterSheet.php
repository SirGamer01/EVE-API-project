<?php


function generateCharacterSheet(){
    $page = array("link-Skills","link-Character","link-Interactions","link-Pilot's-Services","link-Skins","link-History");
    return <<<htmlPage

    <html lang="en">
        <body>
            <div class="container" style="padding-top: 50px; height: 5000px">
                
                <!-- Card -->
                  <!-- Card image -->
                  <div class="view view-cascade overlay"  style="z-index: 1" >
                    <img class="card-img-top" src="https://mmopulse.com/wp-content/uploads/2018/04/EVE-Online-The-Best-MMORPG-Graphics-Banner.jpg"
                      alt="Card image cap">
                    <a href="#">
                      <div class="mask "></div>
                    </a>
                  </div>
                
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center " style="z-index: -1;background-color: rgba(130,130,130,0.63 ">
                
                    <!-- Title -->
                    <h4 class="card-title"><strong>My Character</strong></h4>
                    <!-- Tabs -->
                    <ul class="nav nav-tabs nav-justified md-tabs black" id="myTabJust" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="skills-tab-just" data-toggle="tab" href="#skills-just" role="tab" aria-controls="skills-just"
                          aria-selected="true">Skills</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="character-tab-just" data-toggle="tab" href="#character-just" role="tab" aria-controls="character-just"
                          aria-selected="false">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="interactions-tab-just" data-toggle="tab" href="#interactions-just" role="tab" aria-controls="interactions-just"
                          aria-selected="false">Interactions</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="services-tab-just" data-toggle="tab" href="#services-just" role="tab" aria-controls="services-just"
                          aria-selected="false">Pilot\'s-Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="skins-tab-just" data-toggle="tab" href="#skins-just" role="tab" aria-controls="skins-just"
                          aria-selected="false">Skins</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="history-tab-just" data-toggle="tab" href="#history-just" role="tab" aria-controls="history-just"
                          aria-selected="false">Skins</a>
                      </li>
    
    
                    </ul>
                    <div class="tab-content card pt-5" id="myTabContentJust">
                    
                      <div class="tab-pane fade show active" id="skills-just" role="tabpanel" aria-labelledby="skills-tab-just">
                        <p>$page[0]</p>
                      </div>
                      
                      <div class="tab-pane fade" id="character-just" role="tabpanel" aria-labelledby="character-tab-just">
                        <p>$page[1]</p>
                      </div>
                      
                      <div class="tab-pane fade" id="interactions-just" role="tabpanel" aria-labelledby="interactions-tab-just">
                        <p>$page[2]</p>
                      </div>
                      
                      <div class="tab-pane fade" id="services-just" role="tabpanel" aria-labelledby="services-tab-just">
                        <p>$page[3]</p>
                      </div>
                      <div class="tab-pane fade" id="skins-just" role="tabpanel" aria-labelledby="skins-tab-just">
                        <p>$page[4]</p>
                      </div>     
                      <div class="tab-pane fade" id="history-just" role="tabpanel" aria-labelledby="history-tab-just">
                        <p>$page[5]</p>
                      </div>                                 
                        <!-- Tabs -->
                
                  </div>
                
                </div>
                <!-- Card -->
            
           
        
        </body>
    </html>    

</div>
htmlPage;
}