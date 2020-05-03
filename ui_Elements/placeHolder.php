<?php

echo '

<html lang="en">
    <body>
    
        <div class="container" style="padding-top: 50px; height: 5000px">
        
        
        <!-- Card -->
        <div class="card card-cascade wider reverse">
        
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
                <a class="nav-link active" id="skills-tab-just" data-toggle="tab" href="#skills-tab" role="tab" aria-controls="skills-tab"
                    aria-selected="true">Skills</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" id="character-tab-just" data-toggle="tab" href="#character-tab" role="tab" aria-controls="profile-just"
                    aria-selected="false">Characters</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just" role="tab" aria-controls="contact-just"
                    aria-selected="false">Interactions</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just2" role="tab" aria-controls="contact-just"
                    aria-selected="false">Pilots Services</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just3" role="tab" aria-controls="contact-just"
                    aria-selected="false">Skins</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just4" role="tab" aria-controls="contact-just"
                    aria-selected="false">History</a>
                </li>                
                
            </ul>
            
            <div class="tab-content card pt-5" id="myTabContentJust">
                <div class="tab-pane fade show active" id="skills-tab" role="tabpanel" aria-labelledby="skills-tab-just">
                    <p>
                        ';
                                require "ui_Elements/characterSheet_content/character/character_Group.php";
                        echo'
                    </p>
                </div>
                
                <div class="tab-pane fade" id="character-tab" role="tabpanel" aria-labelledby="character-tab-just">
                    <p>
                        ';
                            require "ui_Elements/characterSheet_content/character/character_Group.php";
                        echo'
                    </p>
                </div>
                <div class="tab-pane fade" id="contact-just" role="tabpanel" aria-labelledby="contact-tab-just">
                    <p>
                        ';
                            require "ui_Elements/characterSheet_content/interactions/interactions_Group.php";
                        echo'
                    </p>
                </div>
            </div>

            
            <!-- Tabs -->
            
        
          </div>
        
        </div>
        <!-- Card -->
        
        
        </div>
    
    </body>
</html>    

';