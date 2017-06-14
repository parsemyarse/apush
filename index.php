<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <script type="text/javascript" src="jquery/external/jquery/jquery.js"></script>
        <script type="text/javascript" src="jquery/jquery-ui.js"></script>
        <link rel="stylesheet" href="jquery/jquery-ui.theme.css">
        <script type="text/javascript" src="ajax.js"></script>
        <script>
            $(document).ready(function(){
                $(".tabs").tabs();
                $( "#accordion" ).accordion();
            });
        </script>
        <style>
            body {background-color: #2a2a2a;}
            li {
                height: 30px;
                font-size: 20px;
                padding-bottom: 12px;
                display: inline;
                padding-right: 5px;
                padding-left: 5px;
                padding-top: 5px;
            }
            ul {
                margin: 0px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .tabs {
                height: 100%;
                display: inline-block;
                width: 100%;
                
            }
            h2 {display: inline;
            font-size: 20px;}
            img {
                width: 100%;
                height: 100%;
            }
            #traceroute {
                width: 100%;
              
            }
            #svgimg{max-height: 2000px;}
            #field {width: 100%;}
            #results {width: 100%; float: left; display: inline-block;}
            fieldset {border-radius: 5px;}
            label {
                padding-left: 10px;}
            .customportfield{width: 60px;}
            h3 {
                font-size: 30px;
                text-align: center
            }
            #supporters {
                width: 45%;
                float: left;
                display: inline;
            }
            #opposers {
                float: right;
                display: inline;
                width: 45%;
            }
            #scopes {
                width: 100%;
                height: 100%;
            }
        </style>
        <title></title>
    
    </head>
    <body>
        <div class="tabs">
              <ul>
                <li><a href="#scopes">Scopes Trial</a></li>
                <li><a href="#fundvsmod">Fundamentalism vs. Modernism</a></li>
                <li><a href="#1920society">1920's Society</a></li>
              </ul>
              <div id="scopes">
                  <h3>The Scopes Trial</h3>
                  
                  
                  <fieldset id="supporters">
                  <legend>Butler Act Supporters: </legend>
                      <ul>
                      <li><strong>- The State of Tennessee</strong></li><br>
                      <li><strong>- Fundamentalists</strong></li><br>
                      <li><strong>- William Jennings Bryan </strong>(defended the state of Tennessee during the trial)</li><br>
                      </ul>
                      
                      <fieldset id="sources">
                            <legend>Sources</legend>
                      <div id="accordion">
                          <h3>Reverend John Roach Straton</h3>
                          <div>
                              <p><strong><i>"The most sinister movement in the United states"</i></strong> by Reverend John Roach Straton published by <strong><i>American Fundamentalist</i></strong> on <i>December 26th, 1925</i></h2>
                              <p>The reverend jumps straight into expressing his dissaproval of teaching evolution in public schools. He argues that areas more absent from religion have greater crime rates and worse living conditions.</p>
                                <p><strong><i>"John Scopes’s lawyers left New York and Chicago, where real religion is ignored"</i></strong> -Reverend John Roach Straton</p>
                          </div>
                          <h3>Mrs. Jesse Sparks</h3>
                          <div>
                              <p><strong>Source: </strong>A letter to a newspaper editor in Tennessee written by <strong>Mrs. Jesse Sparks</strong> on <i>July 3rd, 1925.</i></p>
                                <p>Mrs. Sparks expresses her gratitude that the decision to forbid the teaching of evolution in schools was made based on faith. Her argument imposes that laws should be shaped to accomodate the demands of Christians above all else and that those with opposing views must adapt.</p>
                                <p><strong><i>"I for one was grateful that they stood up for what was right. And
grateful, too, that we have a Christian man for governor..."</i></strong> - Mrs. Jesse Sparks</p>
                          </div>

                      </div>
                      </fieldset>
                  </fieldset>
                  
                  
                  <fieldset id="opposers">
                  <legend>Butler Act Opposers: </legend>
                      <ul>
                      <li><strong>- John Scopes</strong></li><br>
                      <li><strong>- American Civil Liberties Union (ACLU)</strong></li><br>
                      <li><strong>- Clarence Darrow <i>(defended Scopes during the trial)</i></li><br>
                      </ul>
                      
                  </fieldset>
                  <fieldset id="sources">
                  <legend>Sources</legend>
                      <div id="accordion">
                          <h3>Reverend John Roach Straton</h3>
                          <div>
                              <p><strong><i>"The most sinister movement in the United states"</i></strong> by Reverend John Roach Straton published by <strong><i>American Fundamentalist</i></strong> on <i>December 26th, 1925</i></h2>
                              <p>The reverend jumps straight into expressing his dissaproval of teaching evolution in public schools. He argues that areas more absent from religion have greater crime rates and worse living conditions.</p>
                                <p><strong><i>"John Scopes’s lawyers left New York and Chicago, where real religion is ignored"</i></strong> -Reverend John Roach Straton</p>
                          </div>
                          <h3>Mrs. Jesse Sparks</h3>
                          <div>
                              <p><strong>Source: </strong>A letter to a newspaper editor in Tennessee written by <strong>Mrs. Jesse Sparks</strong> on <i>July 3rd, 1925.</i></p>
                                <p>Mrs. Sparks expresses her gratitude that the decision to forbid the teaching of evolution in schools was made based on faith. Her argument imposes that laws should be shaped to accomodate the demands of Christians above all else and that those with opposing views must adapt.</p>
                                <p><strong><i>"I for one was grateful that they stood up for what was right. And
grateful, too, that we have a Christian man for governor..."</i></strong> - Mrs. Jesse Sparks</p>
                          </div>

                      </div>
                      </fieldset>
                  
                  
            </div>
            <div id="fundvsmod"><h3>Fundamentalism vs. Modernism</h3></div>
            <div id="1920society"><h3>Society and Innovation of the 1920s</h3></div>
        </div>
        
    </body>
</html>
