<?php
include_once 'header.php';
?>
<style>
#wrapper{height: 600px; width: auto; overflow: hidden; position: relative; font-family: Arial; background: #ffffff;}

h2{height: 16px; line-height: 16px;}

ul.list li{position: relative; display: block; overflow: hidden; height: 68px; margin-top: 5px;
  background: #e5e5e5;}

ul li.first{margin-top: 0px;}

ul li span.num{position: absolute; width: 34px; line-height: 68px; height: 68px; text-align: center;
  color: #ffffff;
  background: #4a7fbb;
  border-right: 1px solid #4a7fbb;
  font-size: 18px; 
  font-weight: Bold;
  font-family: SourceSansPro-Regular;}

ul.list li a{position: relative; display: block; overflow: hidden; line-height: 68px; height: 68px; word-wrap: break-word; padding: 0px 28px 0px 46px; background: url(https://contextual.media.net/__media__/pics/800015191/tran.png) right top no-repeat;
  color: #000000;
  font-size: 17px; 
  font-weight:Bold;
  font-family: SourceSansPro-Regular;}

ul li span.arw{position: absolute; top: 50%; margin-top: -17px; right: 4px; width: 23px; line-height: 30px; height: 30px; font-size: 26px; text-align: center; font-family: Arial; font-weight: bold;
  color: #4a7fbb;}

ul.list li:hover{background: #4a7fbb;}

ul li:hover span.num{border-right-color: #ffffff;
	color: #ffffff;
	background: #4a7fbb}

ul.list li:hover a{color: #ffffff;}

ul.list li:hover span.arw{color: #ffffff;}
  #content_header{
    
    width: auto;
    margin-top: 20px;
    padding-top: 13px;
    padding-bottom: 13px;
    padding-left: 40px;
    background-color: #4a7fbb;
    color: #fff;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    list-style-position: inside;
    
}
</style>
<!--<style>
@font-face {font-family: "SourceSansPro-Regular";src: url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.eot");src: url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.eot?#iefix") format("embedded-opentype"),url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.woff") format("woff"),url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.ttf") format("truetype"),url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.svg#SourceSansPro-Regular") format("svg");font-weight: normal;font-style: normal;}@font-face {font-family: "SourceSansPro-Regular";src: url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.eot");src: url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.eot?#iefix") format("embedded-opentype"),url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.woff") format("woff"),url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.ttf") format("truetype"),url("https://contextual.media.net/__media__/fonts/SourceSansPro-Regular/SourceSansPro-Regular.svg#SourceSansPro-Regular") format("svg");font-weight: normal;font-style: normal;}						
/*CSS Reset Starts*/
  *{margin: 0; padding: 0}
  html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video { margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline; }
  /* HTML5 display-role reset for older browsers */
  article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
  body { line-height: 1; }
  ol, ul { list-style: none; }
  blockquote, q { quotes: none; }
  blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
  table { border-collapse: collapse; border-spacing: 0; }
  .clearfix { *zoom: 1; }
  .clearfix:before, .clearfix:after { display: table; content: ""; line-height: 0; }
  .clearfix:after { clear: both; }
  a{text-indent:0; text-decoration:none; outline:none;}
  a:hover{text-indent:0; text-decoration:none; cursor:pointer; outline:none;}
/*CSS Reset Ends*/

#wrapper{height: 600px; width: auto; overflow: hidden; position: relative; font-family: Arial; background: #ffffff;}

h2{height: 16px; line-height: 16px;}

ul.list li{position: relative; display: block; overflow: hidden; height: 68px; margin-top: 5px;
  background: #e5e5e5;}

ul li.first{margin-top: 0px;}

ul li span.num{position: absolute; width: 34px; line-height: 68px; height: 68px; text-align: center;
  color: #ffffff;
  background: #4a7fbb;
  border-right: 1px solid #4a7fbb;
  font-size: 18px; 
  font-weight: Bold;
  font-family: SourceSansPro-Regular;}

ul.list li a{position: relative; display: block; overflow: hidden; line-height: 68px; height: 68px; word-wrap: break-word; padding: 0px 28px 0px 46px; background: url(https://contextual.media.net/__media__/pics/800015191/tran.png) right top no-repeat;
  color: #000000;
  font-size: 17px; 
  font-weight:Bold;
  font-family: SourceSansPro-Regular;}

ul li span.arw{position: absolute; top: 50%; margin-top: -17px; right: 4px; width: 23px; line-height: 30px; height: 30px; font-size: 26px; text-align: center; font-family: Arial; font-weight: bold;
  color: #4a7fbb;}

ul.list li:hover{background: #4a7fbb;}

ul li:hover span.num{border-right-color: #ffffff;
	color: #ffffff;
	background: #4a7fbb}

ul.list li:hover a{color: #ffffff;}

ul.list li:hover span.arw{color: #ffffff;}


</style>-->
<div class="container">   
    <div id="content_header">Agriculture and Environment</div></br></br>
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9 col-md-8">
            <div role="tabpanel" class="tab-pane" id="juice">
                                    <div class="row">
                                        <div class="container bottom-pad-40">
                                            <div class="col-sm-12">
                                                <div class="col-sm-6 col-md-12">
<!--                                                    <div class="section-title text-left">
                                                         Heading 
                                                        <h2 class="title">Why choose us?</h2>
                                                    </div>-->
                                                    <div class="panel-group no-list" id="accordion1">
                                                        <div class="panel panel-default active">
                                                            <div class="panel-heading">
                                                                <div class="panel-title">
                                                                    <!-- Tab -->
                                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#item1">Introduction</a>
                                                                </div>
                                                            </div>
                                                            <div id="item1" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    <div class="jumbotron">
                                                                    <!-- Tab Content-->
                                                                    <p>Padakhep since its beginning has progressively put special emphasis on agriculture program. The agriculture program of Padakhep sets the goal to increase income and employment of the target people through increasing yield (productivity) and production of crops, forestry, fishery, livestock and poultry. Under this program, Padakhep covers various fields of agriculture starting from seed production to livestock rearing. Total beneficiaries covered under the agriculture programs are about 1.5 million families. Special attention has been given to the marginal and small farmers; especially the women and they are largely supported to be involved in agro based income generating activities for molding their livelihood towards self-reliance.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default active">
                                                            <div class="panel-heading">
                                                                <div class="panel-title">
                                                                    <!-- Tab -->
                                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#item2">Objectives of the program</a>
                                                                </div>
                                                            </div>
                                                            <div id="item2" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <div class="jumbotron">
                                                                    The specific objectives of the agriculture program are to:<br/><br/>
                                                                    <ul>
                                                                        <li>Increase production of crops, forests, fishery and livestock</li>
                                                                        <li>Make agricultural credit and other inputs available to the farmers for higher production/yield</li>
                                                                        <li>Preserve and encourage green tree coverage and produce alternative energy to ensure clean environment</li>
                                                                        <li>Ensure agro-based, self-financed and sustainable income generating activities</li>
                                                                        <li>Enhance income of the organization for its sustainability</li>
                                                                        <li>Conduct agricultural research considering the importance of environment and sustainability</li>
                                                                        </ul>  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <div class="panel-title">
                                                                    <!-- Tab -->
                                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#item3">Major Activities and Services Provided</a>
                                                                </div>
                                                            </div>
                                                            <div id="item3" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <div class="jumbotron">
                                                                    <!-- Tab Content-->
                                                                    <p>Under the agriculture program, Padakhep has been designing and implementing a range of agriculture oriented activities that include credit activities, seed production and distribution, cattle and poultry rearing, aquaculture management, social forestry, conserving forest, protecting environment, tree plantation etc. targeting mainly the poor farmers.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<!--                                                <div class="col-sm-6 col-md-6">
                                                    <div class="section-title text-left">
                                                         Heading 
                                                        <h2 class="title">Our Skills</h2>
                                                    </div>
                                                    <div class="entry-content about-us">
                                                         Progress Bar 1 
                                                        <h6>Fund for Childerns</h6>
                                                        <div class="progress">
                                                            <div data-percentage="60" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar">
                                                                <span class="progress-label">60%</span>
                                                            </div>
                                                        </div>
                                                         Progress Bar 2 
                                                        <h6>Fund for Plants</h6>
                                                        <div class="progress">
                                                            <div data-percentage="65" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" role="progressbar" class="progress-bar">
                                                                <span class="progress-label">65%</span>
                                                            </div>
                                                        </div>
                                                         Progress Bar 3 
                                                        <h6>Fund for Educations</h6>
                                                        <div class="progress">
                                                            <div data-percentage="80" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                                <span class="progress-label">80%</span>
                                                            </div>
                                                        </div>
                                                         Progress Bar 4 
                                                        <h6>Fund for Refugees</h6>
                                                        <div class="progress">
                                                            <div data-percentage="70" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar">
                                                                <span class="progress-label">70%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>-->
<!--            <div class="jumbotron">
                <h2 style="color: #4a7fbb">Introduction</h2><br/>
                <p>Padakhep launched its microfinance program in 1993 to encourage the increase of income and livelihood of the poor beneficiaries. Based on long term experience, Padakhep realize that, Microcredit is insufficient to tackle poverty and that the poor also need a package of other services for their economic empowerment, resulting in microfinance. While microfinance has produced benefits, it is not enough as it has failed to reach the poorest of the poor. Considering the problem, Padakhep follows a Holistic Development Approach (HDA) in operating its microfinance program aims to alleviate poverty not only through income generation but through a holistic approach targeting a package of other interventions centering a community or Padakhep Palli. Holistic Development is the system of collectively implementing health, economic, and education initiatives to strategically meet a community's development goals.</p>
                <p>Microfinance has been regarded as the main program of Padakhep in respect of beneficiary size, working area, volume of capital and belongingness. All other programs/activities strategically are based or centered on microfinance. Efficient management system and tools, linkage with financial institutions, identification of alternative micro-schemes, approach to address the poorest of the poor section and access to the remotest and hard-to-reach locations have added an extra dimension to Padakhep's microfinance program. It has to be mentioned that a beneficiary of the microfinance program of Padakhep was awarded 'Best Woman Micro Entrepreneur of the Year 2013' from CITI Group.</p>
                <p>Padakhep receives credit funds and operational backstop support from PKSF and other national as well as international financing agencies. The program covers target beneficiaries like ultra poor, beggars, poor, small/marginal farmers, businessmen, fishermen, entrepreneurs, char/haor/baor/tribal/coastal and monga-affected people, etc. In all, 30-35 lakh beneficiaries are involved in the microfinance program of Padakhep.</p>
            </div>  
            <div class="jumbotron">
            <h2 style="color: #4a7fbb">Objectives of the program</h2><br/>
                                The specific objectives of the microfinance program are to:<br/><br/>
                                <ul>
                                    <li>Make credit available to the poor helpless people who do not have access to the existing (formal) credit facilities</li>
                                    <li>Help create self-employment and sustainable income for the target people through Income Generating Activities (IGA) and enterprises</li>
                                    <li>Mobilize savings for the poor</li>
                                    <li>Reduce dependency on moneylenders</li>
                                    <li>Enhance income of the organization for its sustainability</li>
                                    <li>Empower the women</li>
                                    <li>Ensure livelihood security of the beneficiaries</li>
                                </ul>    
            </div>
            <div class="jumbotron">
            <h2 style="color: #4a7fbb">Program Strategy</h2><br/>
                                Padakhep follows Holistic Development Approach with microfinance as the centre point of development. The important strategies of the program include:<br/><br/>
                                <ul type="circle">
                                <li>Maintaining MRA rules & regulations</li>
                                <li>Diversified products to meet beneficiaries demand</li>
                                <li>Special emphasis on sustainability of its borrowers.</li>
                                <li>Easy & close communication among employee as well as between employees & beneficiaries</li>
                                <li>Dynamic & forward looking leadership</li>
                                <li>Decentralization and delegation of authority to the bottom line officials</li>
                                <li>Participatory process in decision making</li>
                                <li>Special provision and emphasis on micro enterprise loan to advanced members for creating employment opportunities</li>
                                <li>Implementing cluster-based development activities through mobilizing all sorts of local level resources and providing need-based information and technologies to the beneficiaries and communities </li>
                                <li>Ensuring maximization of savings and promoting micro insurance as the part of borrower's resource mobilization and safety of the disbursed credit.</li>
                                <li>Special priority on the agricultural development projects.</li>
                                <li>Strong monitoring and supportive supervision</li>
                                <li>Establishing and maintaining linkages and partnership with the govt./NGO/private organizations and national/international donor agencies</li>
                                <li>Special focus on women's empowerment</li>
                                <li>Risk and transaction cost reduction</li>
                                </ul>  
            </div>
            <div class="jumbotron">
            <h2 style="color: #4a7fbb">Operational Area</h2><br/>
            <p>At present, Padakhep is operating its microfinance program in 54 districts through 312 management units (246 branch, 5 sub-branch, 48 area, 13 zone offices and head office).</p>
                            
            </div>-->
<!--            <div class="row">
                              <div class="col-xs-6 col-lg-4">
                                    <h2>Heading</h2>
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    <p><a class="btn btn-default" href="#" role="button">View details Â»</a></p>
                                </div>
                                <div class="col-xs-6 col-lg-4">
                                    <h2>Heading</h2>
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    <p><a class="btn btn-default" href="#" role="button">View details Â»</a></p>
                                </div>
                                <div class="col-xs-6 col-lg-4">
                                    <h2>Heading</h2>
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    <p><a class="btn btn-default" href="#" role="button">View details Â»</a></p>
                                </div>
                                <div class="col-xs-6 col-lg-4">
                                    <h2>Heading</h2>
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    <p><a class="btn btn-default" href="#" role="button">View details Â»</a></p>
                                </div>
                                <div class="col-xs-6 col-lg-4">
                                    <h2>Heading</h2>
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    <p><a class="btn btn-default" href="#" role="button">View details Â»</a></p>
                                </div>
                                <div class="col-xs-6 col-lg-4">
                                    <h2>Heading</h2>
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    <p><a class="btn btn-default" href="#" role="button">View details Â»</a></p>
                                </div>

            </div>-->
                      

        </div>

        <div class="col-xs-12 col-sm-3 col-md-4 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <ul class="list pull-right">
                    <li class="first"><span class="num">01</span><span class="arw">›</span><a href="https://padakhep.org" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk1" name="dk1">Major Activities</a></li>
                    <li><span class="num">02</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk2" name="dk2">Services Provided</a></li>
                    <li><span class="num">03</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk3" name="dk3">Major Microfinance </a></li>
                    <li><span class="num">04</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk4" name="dk4">Major Programs/Projects</a></li>
                    <li><span class="num">05</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk5" name="dk5">Overall Impacts of the Program</a></li>
                    <li><span class="num">06</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk6" name="dk6">Overall Impacts of the Program</a></li>
                    <li><span class="num">07</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk7" name="dk7">Roksana: A Successful Entrepreneur</a></li>
                    <li><span class="num">08</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk8" name="dk8">Website Samples</a></li>
                </ul>  
            </div>          

        </div><!--/.sidebar-offcanvas-->
    </div><!--/row-->

    <!--    <div class="row col-md-12">
            <div class="col-sm-8 col-md-12">
                <iframe width="600" height="338" src="http://www.youtube.com/embed/UVAlMJphUXE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div></br>-->

</br>
</br>
</div> 
<!--<div id="wrapper">
                <ul class="list col-md-3 pull-right">
                    <li class="first"><span class="num">01</span><span class="arw">›</span><a href="https://padakhep.org" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk1" name="dk1">Free Web Templates</a></li>
                    <li><span class="num">02</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk2" name="dk2">Medical Website Templates</a></li>
                    <li><span class="num">03</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk3" name="dk3">Website Themes</a></li>
                    <li><span class="num">04</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk4" name="dk4">Free Blank Templates</a></li>
                    <li><span class="num">05</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk5" name="dk5">Blogging Website Templates</a></li>
                    <li><span class="num">06</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk6" name="dk6">Premium Wordpress Templates</a></li>
                    <li><span class="num">07</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk7" name="dk7">Wordpress Web Templates</a></li>
                    <li><span class="num">08</span><span class="arw">›</span><a href="#" target="_top" onmouseover="changeStatus('');return true;" onmouseout="changeStatus('');return true;" onclick="if(typeof(showPop) != 'undefined')showPop=0;return modifyKeywordClickURL(this, 'kwclk');;" id="dk8" name="dk8">Website Samples</a></li>
                </ul>        
            </div>-->

<script type="text/javascript">if(relplaceAllALinks) relplaceAllALinks(/(\/trf|\.cfm)\?/);</script><script type="text/javascript">     function appendCustomHeader() {         var cH = document.createElement('div');         cH.innerHTML = 'Advertisement';         cH.className = 'mnetAdb';         var cHsT = cH.style;         cHsT.top = '5px';         cHsT.right = '5px';         cHsT.position = 'absolute';         cHsT.fontSize = '10px';         cHsT.background = "#FFF";         cHsT.color = "#F00";         cHsT.padding = "1px";        cHsT.fontWeight = "bold";         document.body.appendChild(cH);     } </script><iframe name="mediaNetHiddenIFrame" style="display:none;"></iframe><form id="postForm" name="postForm" target="mediaNetHiddenIFrame" method="post"><input name="fp" value="NMt41eo3vXVnW5Z_U-NC8mfZ_yayq-acvN1cAL-APxcFMmSq4cfvY96hXvfKpHKDELgKeAyObum7JgZ2Zzpwa7Xd_cyRr5X-jEVMdJ2Rgecac8p6RINDm4jsIrDOqKRZ" type="hidden"><input name="lpid" value="" type="hidden"><input name="tsid" value="18" type="hidden"><input name="ksu" value="178" type="hidden"><input name="cme" value="Rh48LoYRIRHxRrIZyCpK4zuxceJy-ajka7_pKOUREkx2mxsHCj_SoX1EALHEEDZzE6UL2vigE54fORonQPXKkjD9jAsVPd-hLisoX_Dt1qc5dPSh5mFEaANdl8FFdsvV1cesaREoxVEmx4wSX3bpC0VECElovhD4Er7pmpnEpWAsNToXtcKIPnA868tgtYuxvrPriSbu6-g=||NDHRnZ9Gz3KXlI-i9OnZqQ==|5gDUJdTGiJzedmq9hanWYg==|N7fu2vKt8_s=|YdjFvixrVaGM_QQ7Pe8NnGLhBd5BX8vYBNp3anJhrb0R76sKELxqKBXQDYSUydfVaG9-ofufvnEVUHTS6UZr2g==|Jf0d-WoAdPt_XImpm2sl3Ga-qmaXiJ-dI8p52K6P3ck=|JOdUW6PDSN4ckElvzwEBvOsqTrPenTZ9aZAdeBlsV2Hq4zNKEjLMswkPk2eHQP_u0ODkgP_1KNZQuPhKy4xTPkRg0rk4gQRLKDygzPyrvyGzCLsqqmnv04e_4XHtAbhrGbeNpr74S7R6Z_0wrT-00wSXGYXmpqmgJmTaXiheWQo=|" type="hidden"><input name="q" value="" type="hidden"><input name="prv" value="" type="hidden"><input name="type" value="" type="hidden"><input name="ps" value="" type="hidden"><input name="chid" value="" type="hidden"></form><script language="JavaScript" type="text/javascript">var w = 't7bt6dt65t74t61yzt7bt66t70yzwt4et4dt74t34t31t65t6ft33t76t58t56t6et57t35t5at5ft55t2dt4et43t38t6dt66t5at5ft79t61t79t71t2dt61t63t76t4et31t63t41t4ct2dt41t50t78t63t46t4dt6dt53t71t34t63t66t76t59t39t36t68t58t76t66t4bt70t48t4bt44t45t4ct67t4bt65t41t79t4ft62t75t6dt37t4at67t5at32t5at7at70t77t61t37t58t64t5ft63t79t52t72t35t58t2dt6at45t56t4dt64t4at32t52t67t65t63t61t63t38t70t36t52t49t4et44t6dt34t6at73t49t72t44t4ft71t4bt52t5awxzt63yzwt43t72t79t45t6at30t32t74t64t65t41t5ft2dt62t69t2dt66t5at4at43t62t51wxt63t6dt65ywt52t68t34t38t4ct6ft59t52t49t52t48t78t52t72t49t5at79t43t70t4bt34t7at75t78t63t65t4at79t2dt61t6at6bt61t37t5ft70t4bt4ft55t52t45t6bt78t32t6dt78t73t48t43t6at5ft53t6ft58t31t45t41t4ct48t45t45t44t5at7at45t36t55t4ct32t76t69t67t45t35t34t66t4ft52t6ft6et51t50t58t4bt6bt6at44t39t6at41t73t56t50t64t2dt68t4ct69t73t6ft58t5ft44t74t31t71t63t35t64t50t53t68t35t6dt46t45t61t41t4et64t6ct38t46t46t64t73t76t56t31t63t65t73t61t52t45t6ft78t56t45t6dt78t34t77t53t58t33t62t70t43t30t56t45t43t45t6ct6ft76t68t44t34t45t72t37t70t6dt70t6et45t70t57t41t73t4et54t6ft58t74t63t4bt49t50t6et41t38t36t38t74t67t74t59t75t78t76t72t50t72t69t53t62t75t36t2dt67t25t33t44t25t37t43t25t37t43t4et44t48t52t6et5at39t47t7at33t4bt58t6ct49t2dt69t39t4ft6et5at71t51t25t33t44t25t33t44t25t37t43t35t67t44t55t4at64t54t47t69t4at7at65t64t6dt71t39t68t61t6et57t59t67t25t33t44t25t33t44t25t37t43t4et37t66t75t32t76t4bt74t38t5ft73t25t33t44t25t37t43t59t64t6at46t76t69t78t72t56t61t47t4dt5ft51t51t37t50t65t38t4et6et47t4ct68t42t64t35t42t58t38t76t59t42t4et70t33t61t6et4at68t72t62t30t52t37t36t73t4bt45t4ct78t71t4bt42t58t51t44t59t53t55t79t64t66t56t61t47t39t2dt6ft66t75t66t76t6et45t56t55t48t54t53t36t55t5at72t32t67t25t33t44t25t33t44t25t37t43t4at66t30t64t2dt57t6ft41t64t50t74t5ft58t49t6dt70t6dt32t73t6ct33t47t61t2dt71t6dt61t58t69t4at2dt64t49t38t70t35t32t4bt36t50t33t63t6bt25t33t44t25t37t43t4at4ft64t55t57t36t50t44t53t4et34t63t6bt45t6ct76t7at77t45t42t76t4ft73t71t54t72t50t65t6et54t5at39t61t5at41t64t65t42t6ct73t56t32t48t71t34t7at4et4bt45t6at4ct4dt73t77t6bt50t6bt32t65t48t51t50t5ft75t30t4ft44t6bt67t50t5ft31t4bt4et5at51t75t50t68t4bt79t34t78t54t50t6bt52t67t30t72t6bt34t67t51t52t4ct4bt44t79t67t7at50t79t72t76t79t47t7at43t4ct73t71t71t6dt6et76t30t34t65t5ft34t58t48t74t41t62t68t72t47t62t65t4et70t72t37t34t53t37t52t36t5at5ft30t77t72t54t2dt30t30t77t53t58t47t59t58t6dt70t71t6dt67t4at6dt54t61t58t69t68t65t57t51t6ft25t33t44t25t37t43wxzwt69t62wyzwt30wxzt63t69t64yzwt38t43t55t54t59t43t42t52t58wxzt63t72t69t64yzwt36t32t38t30t34t34t30t33t38wxt6ft52t75t72t6cyzwt68t74t74t70t25t33t41t25t32t46t25t32t46t63t64t6et33t6et63t2et6dt65t64t69t61t2et6et65t74t25t32t46t6dt65t64t69t61t6dt61t69t6et2et68t74t6dt6ct25t33t46t25t32t36t65t73t69t25t33t44t31t25t32t36t25t32t36t63t69t64t25t33t44t38t43t55t54t59t43t42t52t58t25t32t36t63t70t63t64t25t33t44t79t6at73t6ft4ct31t31t48t69t67t6dt4ft6ft37t76t4ct36t30t76t77t50t77t25t32t35t33t44t25t32t35t33t44t25t32t36t63t72t69t64t25t33t44t36t32t38t30t34t34t30t33t38t25t32t36t70t69t64t25t33t44t38t50t4ft45t31t32t33t30t41t25t32t36t73t69t7at65t25t33t44t33t30t30t78t36t30t30t25t32t36t63t70t6et65t74t25t33t44t79t56t62t31t73t48t6dt2dt30t4bt49t68t32t39t42t4ft46t54t6at6at72t43t5ft38t4bt54t65t5at5at4et4ct36t4ft75t79t76t35t5ft45t70t36t77t6bt25t32t35t33t44t25t32t36t63t6dt65t25t33t44t55t66t77t71t56t30t33t54t46t57t6bt6et56t4ct70t47t7at39t37t6et54t53t6ct53t79t70t4et4at64t4at4ft79t57t52t50t50t58t69t4ct33t51t5ft39t36t4at65t6dt76t55t65t4et6ft41t4dt37t2dt4et73t39t37t47t30t57t38t34t4dt54t2dt6ft4at77t52t66t4bt57t5at74t6ft5ft58t50t6ct33t6dt46t6bt7at57t79t51t31t45t4bt51t6et49t47t36t38t72t4ct6ft58t49t59t54t50t32t76t74t78t4ct2dt2dt79t6at39t65t34t7at4bt5ft5ft66t77t30t33t69t46t6ft31t47t41t39t63t55t31t50t41t25t32t35t33t44t25t32t35t37t43t25t32t35t37t43t4et44t48t52t6et5at39t47t7at33t4bt58t6ct49t2dt69t39t4ft6et5at71t51t25t32t35t33t44t25t32t35t33t44t25t32t35t37t43t35t67t44t55t4at64t54t47t69t4at7at65t64t6dt71t39t68t61t6et57t59t67t25t32t35t33t44t25t32t35t33t44t25t32t35t37t43t4et37t66t75t32t76t4bt74t38t5ft73t25t32t35t33t44t25t32t35t37t43t59t64t6at46t76t69t78t72t56t61t47t4dt5ft51t51t37t50t65t38t4et6et47t4ct68t42t64t35t42t58t38t76t59t42t4et70t33t61t6et4at68t72t62t30t52t37t36t73t4bt45t4ct78t71t4bt42t58t51t44t59t53t55t79t64t66t56t61t47t39t2dt6ft66t75t66t76t6et45t56t55t48t54t53t36t55t5at72t32t67t25t32t35t33t44t25t32t35t33t44t25t32t35t37t43t4at66t30t64t2dt57t6ft41t64t50t74t5ft58t49t6dt70t6dt32t73t6ct33t47t61t2dt71t6dt61t58t69t4at2dt64t49t38t70t35t32t4bt36t50t33t63t6bt25t32t35t33t44t25t32t35t37t43t25t32t36t68t74t74t70t73t25t33t44t31t25t32t36t63t63t25t33t44t42t44t25t32t36t62t66t25t33t44t30t25t32t36t73t74t61t74t69t63t49t66t72t61t6dt65t25t33t44t31t25t32t36t76t69t66t25t33t44t31t25t32t36t6et73t65t25t33t44t33t25t32t36t76t69t25t33t44t31t35t31t31t38t35t38t32t34t34t32t30t38t35t33t36t31t39t30t25t32t36t6ct77t25t33t44t31t25t32t36t75t67t64t25t33t44t34t25t32t36t69t62t25t33t44t30t25t32t36t6et62t25t33t44t31t25t32t36t63t68t6ft73t74t25t33t44t63t6ft6et74t65t78t74t75t61t6ct2et6dt65t64t69t61t2et6et65t74t25t32t36t66t76t69t70t73t25t33t44t30t25t32t36t76t70t66t25t33t44t30t30t30t25t32t36t61t70t25t33t44t30t25t32t36t70t66t25t33t44t30t25t32t36t69t73t4ft66t66t69t63t65t25t33t44t30wxzt73t69t7at65yzwt33t30t30t78t36t30t30wxzt6ct70t69t64yzwwxzt74t73t69t64yzwt31t38wxzt6bt73t75yzwt31t37t38wxzt63t68t69t64yzwwxzt68t74t74t70t73yzwt30wxzt6bt77t64t73t4dt61t78t54t6dyzwt34t30t30wxzt75t67t64yzwt34wxzt6dt61t78t50t72t6ft76t69t64t65t72t50t69t78t65t6ct31ywt25t32t46t25t32t46t63t2et61t64t2dt73t72t76t2et63t6ft25t32t46t70t69t78t65t6cwxzt6dt61t78t50t72t6ft76t69t64t65t72t50t69t78t65t6ct32ywt25t32t46t25t32t46t63t2et61t64t79t69t65t6ct64t2et63t6ft25t32t46t70t69t78t65t6cwt7dxzt6bt65t79t77t6ft72t64t73yzt5bt5bt7bwt70wyt31t30t30xwt62t67wyt5bt7bwt63wyt31xwt6bwyt5bt7bwt69wyt31t31t36t38t34t35t35t33xwt74wywt46t72t65t65zt57t65t62zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt32t36t36xwt62wywt32t34t32t37t39wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et31t36wxwt74t64wywt33t33t35t35t35t30t30t34wxwt65t74wywt5ft4et66t66t64t53t66t5ct2ft64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt31t38t38t35t38t39t36t38xwt74wywt4dt65t64t69t63t61t6czt57t65t62t73t69t74t65zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt33t30t37xwt62wywt32t34t32t37t39wxwt62t32wywt72t70t63t3dt30t2et31t35wxwt74t64wywt31t36t37t37t37t37t38t38wxwt65t74wywt6ct66t34t57t4at31t61t64t53t66t5ct2ft39t57t35t66t64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt31t38t31t36t32t33t36t36t33xwt74wywt57t65t62t73t69t74t65zt54t68t65t6dt65t73wxwt74t79wyt32t36t36xwt62wywt38t33t36t38t33wxwt62t32wywt72t70t63t3dt30t2et31t39wxwt74t64wywt31t36t37t37t37t37t38t38wxwt65t74wywt53t66t5ct2ft39t57t35t66t64t72t58t66t56t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt33t38t32t31t36t39t36xwt74wywt46t72t65t65zt42t6ct61t6et6bzt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt36t35xwt62wywt6et6ft74zt66t6ft75t6et64wxwt62t32wywt72t70t63t3dt30t2et30t32wxwt74t64wywt33t33t35t37t31t33t38t38wxwt65t74wywt5ft4et66t66t64t68t61t31t42t55t64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt33t32t31t36t39t35t30t32t39xwt74wywt42t6ct6ft67t67t69t6et67zt57t65t62t73t69t74t65zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt32t36t36xwt62wywt31t34t31t39t30t31wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et30t30wxwt74t64wywt31t30t39t39t35t34t35t31t39t39t34t32t30wxwt65t74wywt68t61t76t73t73t57t42t73t64t53t66t5ct2ft39t57t35t66t64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt32t31t35t36t33t33t39t33t37xwt74wywt50t72t65t6dt69t75t6dzt57t6ft72t64t70t72t65t73t73zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt32t36t36xwt62wywt38t33t36t38t33wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et30t32wxwt74t64wywt31t30t39t39t35t32t38t34t32t32t32t30t34wxwt65t74wywzt4et66t56t57t33t56t64t53t76t4et34t67t4et66t39t39t64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt31t38t34t39t34t36t30t31t32xwt74wywt57t6ft72t64t70t72t65t73t73zt57t65t62zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt32t36t36xwt62wywt38t33t36t38t33wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et30t36wxwt74t64wywt31t30t39t39t35t32t38t34t32t32t32t30t34wxwt65t74wywt53t76t4et34t67t4et66t39t39t64t53t66t5ct2ft64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt32t36t31t38t35t34t35t39xwt74wywt57t65t62t73t69t74t65zt53t61t6dt70t6ct65t73wxwt74t79wyt32t36t36xwt62wywt32t38t39t30t34wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et31t31wxwt74t64wywt31t30t39t39t35t32t38t34t30t35t38t32t30wxwt65t74wywt53t66t5ct2ft39t57t35t66t64t52t31t56t67t61t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt31t31t36t37t30t35t32t31xwt74wywt46t72t65t65zt54t65t6dt70t6ct61t74t65t73zt66t6ft72zt57t6ft72t64wxwt74t79wyt33t30t37xwt62wywt31t34t39t34t35t32wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et30t35wxwt74t64wywt31t30t39t39t35t34t35t31t39t39t34t32t30wxwt65t74wywt5ft4et66t66t64t72t66t56t67t61t31t35t66t39t64t51t76t4et64t53t76t4et34wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt39t33t34t34t38t30t37xwt74wywt45t63t6ft6dt6dt65t72t63t65zt57t65t62t73t69t74t65zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt33t30t37xwt62wywt31t30t33t37t39t32wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et36t32wxwt74t64wywt31t30t39t39t35t34t35t31t38t33t30t33t36wxwt65t74wywt2dt4at76t56t56t66t4et4at66t64t53t66t5ct2ft39t57t35t66t64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt33t32t31t30t33t39t35t36t31xwt74wywt54t6ft75t72t69t73t74zt57t65t62t73t69t74t65zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt33t30t37xwt62wywt32t34t32t37t39wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et31t35wxwt74t64wywt31t30t39t39t35t34t35t31t38t32t35t32t34wxwt65t74wywt72t76t33t4et57t39t35t64t53t66t5ct2ft39t57t35t66t64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt33t32t31t31t39t31t31t35t38xwt74wywt50t72t69t6et74t61t62t6ct65zt54t65t6dt70t6ct61t74t65t73zt4ft6et6ct69t6et65wxwt74t79wyt32t36t36xwt62wywt31t33t32t30t33t33wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et30t32wxwt74t64wywt31t30t39t39t35t34t35t31t39t38t39t30t38wxwt65t74wywzt4et57t42t35t31t5ct2ft61t66t64t72t66t56t67t61t31t35t66t39t64t6et42t61t57t42t66wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt36t38t39t39t37t34t35t31xwt74wywt44t61t72t6bzt57t65t62zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt32t36t36xwt62wywt32t34t32t37t39wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et30t34wxwt74t64wywt31t30t39t39t35t32t38t34t32t31t36t39t32wxwt65t74wywt49t31t4et55t64t53t66t5ct2ft64t72t66t56t67t61t31t35t66t39wt7dt5dt7dxt7bwt63wyt31xwt6bwyt5bt7bwt69wyt34t39t30t34t37t39t34t36xwt74wywt42t65t73t74zt57t65t62t73t69t74t65zt54t68t65t6dt65t73wxwt74t79wyt32t36t36xwt62wywt38t33t36t38t33wxwt62t32wywt30t7ct7ct72t70t63t3dt30t2et31t37wxwt74t64wywt31t30t39t39t35t32t38t34t30t35t33t30t38wxwt65t74wywt68t66t39t35t64t53t66t5ct2ft39t57t35t66t64t72t58t66t56t66t39wt7dt5dt7dt5dt7dt5dxt5bt7bwt70wyt31t30t30xwt62t67wyt5bt7bwt63wyt31t34xwt6bwyt5bt5bt7bwt69wywt33t34t37t34t34t38t31wxwt74wywt42t65t73t74zt4at6ft6ft6dt6ct61zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt34t33t35t38t33t32t36wxwt74wywt62t72t6ft63t68t75t72t65zt64t65t73t69t67t6ezt74t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt38t30t35t32t33t37t34t38wxwt74wywt45t76t65t6et74zt46t6ct79t65t72zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt33t32t31t33t31t39t39t30t38wxwt74wywt46t72t65t65zt42t6ct61t6et6bzt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt31t31t35t36t32t36t31t32wxwt74wywt66t72t65t65zt66t6ct79t65t72zt74t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt31t31t36t33t39t37t38t32wxwt74wywt66t72t65t65zt70t72t69t6et74t61t62t6ct65zt74t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt31t31t36t35t30t30t38t35wxwt74wywt66t72t65t65zt73t61t6dt70t6ct65zt74t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt31t31t36t37t30t34t34t37wxwt74wywt66t72t65t65zt74t65t6dt70t6ct61t74t65zt64t6ft77t6et6ct6ft61t64wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt31t31t36t37t32t34t38t38wxwt74wywt46t72t65t65zt54t69t6dt65t6ct69t6et65zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt31t31t36t38t34t35t35t33wxwt74wywt46t72t65t65zt57t65t62zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt31t31t36t38t38t33t33t34wxwt74wywt66t72t65t65zt77t6ft72t64zt74t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt32t30t34t39t30t33t35t30wxwt74wywt4et65t77t73t6ct65t74t74t65t72zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt32t33t33t31t30t38t38t39wxwt74wywt50t72t6ft6at65t63t74zt54t69t6dt65t6ct69t6et65zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dxt7bwt69wywt33t32t31t33t36t33t32t38t36wxwt74wywt52t65t73t70t6ft6et73t69t76t65zt57t65t62t73t69t74t65zt54t65t6dt70t6ct61t74t65t73wxwt74t79wyt31t31t32xwt62wyt6et75t6ct6ct7dt5dt5dt7dt5dt7dt5dt5dxzt61t64t73yzt7bt6bt65t79t77t6ft72t64ywwzxzt66ywwxzt70t72t6ft76t69t64t65t72ywwzxzt74t79t70t65ywwxzt70t73ywwxzzt70t72t6ft76t69t64t65t72t32ywwzxzt74t79t70t65t32ywwxzt70t73t32ywwxzt75t72t6cyzwt68t74t74t70t73t25t33t41t25t32t46t25t32t46t77t77t77t2et74t65t6dt70t6ct61t74t65t2et6et65t74t25t32t46t77t65t62t2dt74t65t6dt70t6ct61t74t65t73t25t32t46t77t65t62t73t69t74t65t2dt74t65t6dt70t6ct61t74t65t73t25t32t46t77t65t62t73t69t74t65t2dt74t65t6dt70t6ct61t74t65t73t2dt66t6ft72t2dt64t6ft63t74t6ft72t73t25t32t46wxt75t72t6ct32ywwxzt72t65t66yzwt68t74t74t70t25t33t41t25t32t46t25t32t46t77t77t77t2et74t65t6dt70t6ct61t74t65t2et6et65t74wxzt61t64t70yzwwt0dt0azzzzzzzzzzzzt09t09t09t09xzt61t64t70t32yzwwt0dt0azzzzzzzzzzzzt09t09t09t09xzt63t68t69t64yzwwxzt61t64t69yzwwzxzt61t64t63yzwwxzt61t64t73yzwwzxzt72t62yzwt30wzxzt70t64t6eywwxzt66t41t64t73yt5bt5dxzt66t54t4fyzwt30wxzt62t74ywt30wxzt66t76t65ywwxzt68t6ct65ywwxzt6dt72t74ywwxzt70t72t74ywwxzt6ft66ywwxzt63t74ywwxzt61t76ywwxzt70t74ywwxt73t6cywwxt73t6ct63ywwxzt66t64t64ywwxzt6dt61yzwwxzt6dt70yzwwt7dxzt6ct6ft67yzwt66t70t3dt4et4dt74t34t31t65t6ft33t76t58t56t6et57t35t5at5ft55t2dt4et43t38t6dt66t5at5ft79t61t79t71t2dt61t63t76t4et31t63t41t4ct2dt41t50t78t63t46t4dt6dt53t71t34t63t66t76t59t39t36t68t58t76t66t4bt70t48t4bt44t45t4ct67t4bt65t41t79t4ft62t75t6dt37t4at67t5at32t5at7at70t77t61t37t58t64t5ft63t79t52t72t35t58t2dt6at45t56t4dt64t4at32t52t67t65t63t61t63t38t70t36t52t49t4et44t6dt34t6at73t49t72t44t4ft71t4bt52t5at26t6ct70t69t64t3dt26t74t73t69t64t3dt31t38t26t6bt73t75t3dt31t37t38t26t71t3dt26t70t72t76t3dt26t74t79t70t65t3dt26t70t73t3dt26t63t6dt65t3dt52t68t34t38t4ct6ft59t52t49t52t48t78t52t72t49t5at79t43t70t4bt34t7at75t78t63t65t4at79t2dt61t6at6bt61t37t5ft70t4bt4ft55t52t45t6bt78t32t6dt78t73t48t43t6at5ft53t6ft58t31t45t41t4ct48t45t45t44t5at7at45t36t55t4ct32t76t69t67t45t35t34t66t4ft52t6ft6et51t50t58t4bt6bt6at44t39t6at41t73t56t50t64t2dt68t4ct69t73t6ft58t5ft44t74t31t71t63t35t64t50t53t68t35t6dt46t45t61t41t4et64t6ct38t46t46t64t73t76t56t31t63t65t73t61t52t45t6ft78t56t45t6dt78t34t77t53t58t33t62t70t43t30t56t45t43t45t6ct6ft76t68t44t34t45t72t37t70t6dt70t6et45t70t57t41t73t4et54t6ft58t74t63t4bt49t50t6et41t38t36t38t74t67t74t59t75t78t76t72t50t72t69t53t62t75t36t2dt67t25t33t44t25t37t43t25t37t43t4et44t48t52t6et5at39t47t7at33t4bt58t6ct49t2dt69t39t4ft6et5at71t51t25t33t44t25t33t44t25t37t43t35t67t44t55t4at64t54t47t69t4at7at65t64t6dt71t39t68t61t6et57t59t67t25t33t44t25t33t44t25t37t43t4et37t66t75t32t76t4bt74t38t5ft73t25t33t44t25t37t43t59t64t6at46t76t69t78t72t56t61t47t4dt5ft51t51t37t50t65t38t4et6et47t4ct68t42t64t35t42t58t38t76t59t42t4et70t33t61t6et4at68t72t62t30t52t37t36t73t4bt45t4ct78t71t4bt42t58t51t44t59t53t55t79t64t66t56t61t47t39t2dt6ft66t75t66t76t6et45t56t55t48t54t53t36t55t5at72t32t67t25t33t44t25t33t44t25t37t43t4at66t30t64t2dt57t6ft41t64t50t74t5ft58t49t6dt70t6dt32t73t6ct33t47t61t2dt71t6dt61t58t69t4at2dt64t49t38t70t35t32t4bt36t50t33t63t6bt25t33t44t25t37t43t4at4ft64t55t57t36t50t44t53t4et34t63t6bt45t6ct76t7at77t45t42t76t4ft73t71t54t72t50t65t6et54t5at39t61t5at41t64t65t42t6ct73t56t32t48t71t34t7at4et4bt45t6at4ct4dt73t77t6bt50t6bt32t65t48t51t50t5ft75t30t4ft44t6bt67t50t5ft31t4bt4et5at51t75t50t68t4bt79t34t78t54t50t6bt52t67t30t72t6bt34t67t51t52t4ct4bt44t79t67t7at50t79t72t76t79t47t7at43t4ct73t71t71t6dt6et76t30t34t65t5ft34t58t48t74t41t62t68t72t47t62t65t4et70t72t37t34t53t37t52t36t5at5ft30t77t72t54t2dt30t30t77t53t58t47t59t58t6dt70t71t6dt67t4at6dt54t61t58t69t68t65t57t51t6ft25t33t44t25t37t43t26t68t69t6et74t3dt26t74t64t3dt26t63t63t3dt42t44t26t77t73t69t70t3dt32t38t38t36t39t32t37t38t35t34t26t62t63t61t3dt30t26t75t67t64t3dt34t26wxzt61t62t66yzt31xzt6ct70t65t72yzt31t30t30xzt61t6bt6dt6cyt31xzt6dt69t73t63yt7bwt70t75t72t6cwywt68t74t74t70t73t25t33t41t25t32t46t25t32t46t77t77t77t2et74t65t6dt70t6ct61t74t65t2et6et65t74t25t32t46t77t65t62t2dt74t65t6dt70t6ct61t74t65t73t25t32t46t77t65t62t73t69t74t65t2dt74t65t6dt70t6ct61t74t65t73t25t32t46t77t65t62t73t69t74t65t2dt74t65t6dt70t6ct61t74t65t73t2dt66t6ft72t2dt64t6ft63t74t6ft72t73t25t32t46wxwt63t6ft75t6et74t72t79t5ft63t6ft64t65wywt42t44wxwt70t6bwywt38t34t38t36t32t33t33t31t37wxwt79t62t6et63t61t42t69t64t64t65t72t49t64wywt7ct31t7ct34t7ct39t7ct37t7ct36t7cwxwt62t64t72t49t64wywwxwt72t6dt73wyt30xwt72t45t6et44wyt30xwt73t70t6bt77t64wywt31wxwt64t6ft6dt61t69t6ewywt77t77t77t2et74t65t6dt70t6ct61t74t65t2et6et65t74wxwt63t6bt64t6dwywt74t65t6dt70t6ct61t74t65t2et6et65t74wxwt72t65t66t65t72t65t72wywt68t74t74t70t25t33t41t25t32t46t25t32t46t77t77t77t2et74t65t6dt70t6ct61t74t65t2et6et65t74wxwt72t65t66t5ft64t6ft6dt61t69t6ewywt74t65t6dt70t6ct61t74t65t2et6et65t74wxwt69t73t53t65t72t70t52t65t64t69t72t65t63t74t69t6ft6et46t6ft72t43t6ft6ft6bt69t65t52t65t71t75t69t72t65t64wyt66t61t6ct73t65xwt63t6ft6ft6bt69t65t53t65t74t52t65t64t69t72t65t63t74t69t6ft6et48t6ft73t74t4et61t6dt65wywt68t74t74t70yt5ct2ft5ct2ft63t6ft6et74t65t78t74t75t61t6ct2et6dt65t64t69t61t2et6et65t74t5ct2ft72t2et70t68t70t3fwxwt69t73t4ct6ft63t48t61t73t68t42t65t66t6ft72t65t43t4dt45wyt66t61t6ct73t65xwt68t61t62wyt31xwt61t64t6at49t66t72t61t6dt65wyt30xwt74t61t62t49t6et64t65t78wyt66t61t6ct73t65xwt69t73t41t6dt70wyt30xwt70t64t74t69t64wyt31t7dxzt73t65t72t70yt7bt73t72t70ywt67t62t37t44t46t50t44t4ct32t6ct6et61t59t43t45t4at52t68t66t36t38t4ft39t70t55t4at47t64t46t6ft5ft56t53t70t64t4et4ct6bt41t32t78t54t5ft48t67t45t51t65t6ct74t61t2dt39t6dt51t53t5at57t5ft6dt61t66t43t37t66t38t77t33t50t4bt70t30t4et66t59t31t6ft52t48t48t66t69t36t53t6et59t75t74t76t33t49t56t6at41t52t79t49t51t38t6bt38t47t46t6dt43t57t38t25t33t44wxt73t65t72t70t55t72t6cywt68t74t74t70yt2ft2ft38t34t38t36t32t33t33t31t37t2et6bt65t79t77t6ft72t64t62t6ct6ft63t6bt73t2et63t6ft6dt2ft73t65t72t70t2et70t68t70wxt6bt6ct70ywt69t79t78t7at71t4at6ft4ft55t62t32t73t61t39t54t48t73t76t4at76t56t6ct52t35t57t75t7at4ct35t6bt64t70t50t74t68t49t72t32t77t64t45t71t5ft62t45t65t78t4ct74t36t73t65t4dt36t47t31t6ct6dt6et57t6bt6ct73t66t37t4ft75t6ct70t65t6ct66t77t32t4ct31t7at51t74t4ft34t79t76t63t76t2dt57t79t36t46t30t63t4ct50t6dt6at6dt6et2dt4at4at4et71t52t69t52t71t30t6et59t51t6dt55t56t53t5at64t33t6ft61t4ft44t63t5at4dt77t68t55t45t5at2dt6at74t51t43t68t37t47t34t25t33t44wxt72t65t66t70t67t74t79t70t65ywt31wxt63t69t66t72ywt31wxt61t64t70ywt4at58t57t34t50t7ct40t7ct61t57t50wxt66t6bywt31t39t39wxt6bt73ywt31t37t38wxt6bt74t67t64t74ywt33t38t36t36wxt72t64ywwt7dxzt6et64t61t64t70yt6et75t6ct6cxzt61t62t70t6cyzt31xzt61t62t73t73yzwwt7d';var clkHostName = '';var hostName = '';var hostLog = '';var hostAds = ''; var hostNm = ''; var hostRefactoredAds = '' ; </script><script type="text/javascript" language="javascript" src=""></script><script type="text/javascript">if (typeof _mNHC === 'object') { _mNHC.init(); }</script> 
</body>
<script type="text/javascript">function is_ie6(){return void 0==window.XMLHttpRequest&&void 0!=ActiveXObject&&/msie|MSIE 6/.test(navigator.userAgent)}function sendRequest(t,e){showPop=0,thisform=document.getElementById(t);var n=e,i=new Array;i=n.split("@@@@");for(var o=0;o<i.length;o++){var p=new Array,r=new String(i[o]);switch(p=r.split("####"),p[0]){case"action":thisform.action=p[1]+generateBrowLogURL("adclk");break;case"data":thisform.params.value=p[1]}}return thisform.method="POST",is_ie6()&&(thisform.target=""),thisform.submit(),!1}function changeStatus(t){return window.status=t,!0}function relplaceAllALinks(t){try{for(links=window.document.getElementsByTagName("A"),links_len=links.length,i=0;i<links_len;i++)links[i].href.match(t)&&(tempData=links[i].innerHTML,modifyKeywordClickURL(links[i],"olod"),links[i].innerHTML=tempData)}catch(e){}}function modifyKeywordClickURL(t,e){return t.href=t.href+generateBrowLogURL(e),"undefined"!=typeof prctu&&prctu.length>0&&(t.href=prctu+getEscapedString(t.href)),!0}function generateBrowLogURL(t){var e="";try{"undefined"!=typeof br_data&&br_data||(br_data=new brdata),e="kwclk"==t?escape(br_data.getMousePositionData()):"adclk"==t||"srcqry"==t?"&bd="+escape(br_data.getSearchBoxRelatedData()):"&bd="+escape(br_data.getURLBrowserData())}catch(n){}return e}function renderFACP(t){if("ex"==t)return!1;if(1!=showPop||"undefined"==typeof __pp||"undefined"==typeof __pp.FACP||0!=__pp.FACP.pd)return!1;try{if(!t){var t=window.event||window.Event;t.cancelBubble=!0}if(t.button&&2==t.button)return!1;if("undefined"!=typeof __pp.FACP.u&&__pp.FACP.u.length>0)return __pp.FACP.pd=!0,__pp.FACP.u=__pp.FACP.u+generateBrowLogURL("adclk"),_skPU.doPU(__pp.FACP.u,__pp.FACP.w,__pp.FACP.h,__pp.FACP.p,"ex"==t),showPop=0,!0}catch(t){return __pp.FACP.pd=!0,!1}}function atevt(){document.addEventListener?document.addEventListener("click",ppctrl,!1):document.attachEvent?document.attachEvent("onclick",ppctrl):document.onclick=ppctrl}function ppctrl(t){1!=showPop||renderFACP(t)||shpp(t)}function shpp(t){if("undefined"!=typeof __pp&&1==showPop)try{if(!t){var t=window.event||window.Event;t.cancelBubble=!0}if(t.button&&2==t.button)return;try{var e=!1;isIE()&&(e=shdsp(t)),e||"undefined"!=typeof __pp.kp&&"undefined"!=typeof __pp.kp.u&&__pp.kp.u&&__pp.kp.u.length>0&&0==__pp.kp.pd&&(__pp.kp.pd=!0,"ex"==t&&(__pp.kp.u=__pp.kp.u+"&_onx_=1"),_skPU.doPU(__pp.kp.u,__pp.kp.w,__pp.kp.h,__pp.kp.p,"ex"==t))}catch(n){}"ex"==t?shmsc(t):shdsp(t)}catch(n){}}function shdsp(t){try{return!!("undefined"!=typeof __pp.dp&&"undefined"!=typeof __pp.dp.u&&__pp.dp.u&&__pp.dp.u.length>0&&0==__pp.dp.pd)&&(__pp.dp.pd=!0,_skPU.doPU(__pp.dp.u,__pp.dp.w,__pp.dp.h,__pp.dp.p,"ex"==t),!0)}catch(t){return!1}}function isIE(){var t=!1;try{t=/msie|MSIE/.test(navigator.userAgent)}catch(e){}return t}var showPop=1,brdata=function(){this.fd="#",this.cookieSupport=-1,this.isinframe=-1,this.browserdata="",this.getLocalTimeZone=function(){return(new Date).getTimezoneOffset()/60*-1},this.getScreenHeight=function(){return screen.height},this.getScreenWidth=function(){return screen.width},this.calledInExternalFrame=function(){return"n"},this.isCookieSupported=function(){if(this.cookieSupport==-1){var t=navigator.cookieEnabled||!1;"undefined"!=typeof navigator.cookieEnabled||t||(document.cookie="skck",t=document.cookie.indexOf("skck")!=-1)}return this.cookieSupport},this.getURLBrowserData=function(){return""==this.browserdata&&(this.browserdata=this.getLocalTimeZone().toString()+this.fd+this.getScreenHeight()+this.fd+this.getScreenWidth()+this.fd+(this.isCookieSupported()?1:0).toString()+this.fd+this.calledInExternalFrame().toString()),this.browserdata},this.getMousePositionData=function(){return this.fd+mX+this.fd+mY},this.getSearchBoxRelatedData=function(){return this.getURLBrowserData()+this.getMousePositionData()}},_skPU={_Top:null,_wh:function(){var t=0;try{"number"==typeof this._Top.window.innerHeight?t=this._Top.window.innerHeight:this._Top.document.documentElement&&this._Top.document.documentElement.clientHeight?t=this._Top.document.documentElement.clientHeight:this._Top.document.body&&this._Top.document.body.clientHeight&&(t=this._Top.document.body.clientHeight)}catch(e){t=0}return t},_ww:function(){var t=0;try{"number"==typeof this._Top.window.innerWidth?t=this._Top.window.innerWidth:this._Top.document.documentElement&&this._Top.document.documentElement.clientWidth?t=this._Top.document.documentElement.clientWidth:this._Top.document.body&&this._Top.document.body.clientWidth&&(t=this._Top.document.body.clientWidth)}catch(e){t=0}return t},_wt:function(){return this._Top?void 0!=this._Top.window.screenTop?this._Top.window.screenTop:this._Top.window.screenY:0},_wl:function(){return this._Top?void 0!=this._Top.window.screenLeft?this._Top.window.screenLeft:this._Top.window.screenX:0},doPU:function(url,pw,ph,npf,dr){if(!this._Top&&(this._Top=self,top!=self))try{top.document.location.toString()&&(this._Top=top)}catch(e){}var _npSU=dr?url:"about:blank",_npID="pu_"+Math.floor(89999999*Math.random()+1e7),pxLeft=0,pxTop=0;pw==-1&&(pw=this._ww()),ph==-1&&(ph=this._wh()),pxLeft=this._wl()+this._ww()/2-pw/2,pxTop=this._wt()+this._wh()/2-ph/2,npf||(npf="toolbar=0,scrollbars=1,location=1,statusbar=0,menubar=0,resizable=1");var _npW=this._Top.window.open(_npSU,_npID,npf+",top="+pxTop+",left="+pxLeft+",width="+pw+",height="+ph);return _npW&&(_npW.blur(),navigator.userAgent.toLowerCase().indexOf("applewebkit")>-1&&(this._Top.window.blur(),this._Top.window.focus()),_npW.Init=function(e){with(e)Params=e.Params,Main=function(){if("undefined"!=typeof window.mozPaintCount){var t=window.open("about:blank");t&&t.close()}var e=Params.dUrl;try{navigator.userAgent.toLowerCase().indexOf("msie")<1&&opener.window.focus()}catch(n){}dr||(window.location=e)},Main()},_npW.Params={dUrl:url},_npW.Init(_npW)),_npW}};</script><script type="text/javascript">var _mNVsid = '1504393878916256000V10'; if(_mNVsid.indexOf("VID") == -1 && _mNVsid.length > 10) { var trimOffset = _mNVsid.indexOf("V") === -1 ? 3 : 6;  _mNVsid = _mNVsid.substr(0, _mNVsid.length - trimOffset); } else { _mNVsid = undefined; }</script><script type="text/javascript">window.mnIpua='1fe925050b653ec04000443405bc3d68';</script><script type="text/javascript">window.mnCts='1511858246';</script><script type="text/javascript" language="javascript">var _mNL3 = {viComp:"1511858244208536190", vi:"1511858244208536190", mnetOptout:"", geoloc:"23.72|90.41", _ygxid:"", esPar: {nw:"None", nwType:"None", asnum:"45951", proxy:"None", comp:"None"}};</script><script type="text/javascript">var _mNEntities = { crid: "628044038", 
									pid: "8POE1230A",
									cid: "8CUTYCBRX",
									dn: "template.net",
									requrl: "https%3A%2F%2Fwww.template.net%2Fweb-templates%2Fwebsite-templates%2Fwebsite-templates-for-doctors%2F",
									chid: "",
									ugd: "4",
									cc: "BD",
                                    sc: "",
									cme: "Rh48LoYRIRHxRrIZyCpK4zuxceJy-ajka7_pKOUREkx2mxsHCj_SoX1EALHEEDZzE6UL2vigE54fORonQPXKkjD9jAsVPd-hLisoX_Dt1qc5dPSh5mFEaANdl8FFdsvV1cesaREoxVEmx4wSX3bpC0VECElovhD4Er7pmpnEpWAsNToXtcKIPnA868tgtYuxvrPriSbu6-g%3D%7C%7CNDHRnZ9Gz3KXlI-i9OnZqQ%3D%3D%7C5gDUJdTGiJzedmq9hanWYg%3D%3D%7CN7fu2vKt8_s%3D%7CYdjFvixrVaGM_QQ7Pe8NnGLhBd5BX8vYBNp3anJhrb0R76sKELxqKBXQDYSUydfVaG9-ofufvnEVUHTS6UZr2g%3D%3D%7CJf0d-WoAdPt_XImpm2sl3Ga-qmaXiJ-dI8p52K6P3ck%3D%7CJOdUW6PDSN4ckElvzwEBvOsqTrPenTZ9aZAdeBlsV2Hq4zNKEjLMswkPk2eHQP_u0ODkgP_1KNZQuPhKy4xTPkRg0rk4gQRLKDygzPyrvyGzCLsqqmnv04e_4XHtAbhrGbeNpr74S7R6Z_0wrT-00wSXGYXmpqmgJmTaXiheWQo%3D%7C"};</script><script type="text/javascript">var hN = 'https://lg1.media.net';var lFN = 'bqi.php';!function(e){var n=e.document,t=n.documentMode,i={cDoc:"",queue:[]};i.eventLib={addEvent:function(e,n,t){e.addEventListener?e.addEventListener(n,t,!1):e.attachEvent&&e.attachEvent("on"+n,t),e=null},removeEvent:function(e,n,t){e.removeEventListener?e.removeEventListener(n,t):e.detachEvent&&e.detachEvent("on"+n,t),e=null}},i.buildQuery=function(n){var t,i={vi:"lf=3",h:"lf=4"}[n];for(t in _mNEntities)i=[i,"&",t,"=",_mNEntities[t]].join("");return e._mNL3&&e._mNL3.vi&&(i+="&vi="+e._mNL3.vi),e.mUtil&&"function"==typeof e.mUtil.getABPFlag&&(i+=e.mUtil.getABPFlag()),i},i.supportsHC="onhashchange"in e&&(void 0===t||t>7),i.cScript=function(e){var t=n.createElement("script"),o=hN+"/"+lFN+"?"+i.buildQuery(e);return"undefined"!=typeof _mNVsid&&_mNVsid.length>0&&(o+="&vsid="+_mNVsid),o+=locHash.replace(/#/g,"&"),t.src=o,t.type="text/javascript",t.async=!0,t},i.log={vi:function(){i.supportsHC&&i.eventLib.removeEvent(e,"hashchange",i.log.vi),n.getElementsByTagName("head")[0].appendChild(i.cScript("vi")),i.dequeueCB()},hover:function(){i.eventLib.removeEvent(i.cDoc,"mouseover",i.log.hover),n.getElementsByTagName("head")[0].appendChild(i.cScript("h"))}},i.isDone=function(){return/done/.test(e.location.hash)},i.hcFallBack=function(){i.isDone()&&(clearInterval(i.pollInterval),i.log.vi())},i.callWhenViewed=function(e,n){i.queue.push({cb:e,t:n||0})},i.dequeueCB=function(){var e,n;for(e in i.queue)n=i.queue[e],setTimeout(n.cb,n.t)},i.init=function(){i.cDoc=n&&n.body||e,i.eventLib.addEvent(i.cDoc,"mouseover",i.log.hover),i.isDone()?i.log.vi():i.supportsHC?i.eventLib.addEvent(e,"hashchange",i.log.vi):i.pollInterval=setInterval(i.hcFallBack,100)},e._mNHC=i}(window);try { if(typeof window.parent._mNtriggerVI === 'function') { window.parent._mNtriggerVI(); } } catch(e) {}</script><script src="https://lg1.media.net/bqi.php?lf=4&amp;crid=628044038&amp;pid=8POE1230A&amp;cid=8CUTYCBRX&amp;dn=template.net&amp;requrl=https%3A%2F%2Fwww.template.net%2Fweb-templates%2Fwebsite-templates%2Fwebsite-templates-for-doctors%2F&amp;chid=&amp;ugd=4&amp;cc=BD&amp;sc=&amp;cme=Rh48LoYRIRHxRrIZyCpK4zuxceJy-ajka7_pKOUREkx2mxsHCj_SoX1EALHEEDZzE6UL2vigE54fORonQPXKkjD9jAsVPd-hLisoX_Dt1qc5dPSh5mFEaANdl8FFdsvV1cesaREoxVEmx4wSX3bpC0VECElovhD4Er7pmpnEpWAsNToXtcKIPnA868tgtYuxvrPriSbu6-g%3D%7C%7CNDHRnZ9Gz3KXlI-i9OnZqQ%3D%3D%7C5gDUJdTGiJzedmq9hanWYg%3D%3D%7CN7fu2vKt8_s%3D%7CYdjFvixrVaGM_QQ7Pe8NnGLhBd5BX8vYBNp3anJhrb0R76sKELxqKBXQDYSUydfVaG9-ofufvnEVUHTS6UZr2g%3D%3D%7CJf0d-WoAdPt_XImpm2sl3Ga-qmaXiJ-dI8p52K6P3ck%3D%7CJOdUW6PDSN4ckElvzwEBvOsqTrPenTZ9aZAdeBlsV2Hq4zNKEjLMswkPk2eHQP_u0ODkgP_1KNZQuPhKy4xTPkRg0rk4gQRLKDygzPyrvyGzCLsqqmnv04e_4XHtAbhrGbeNpr74S7R6Z_0wrT-00wSXGYXmpqmgJmTaXiheWQo%3D%7C&amp;vi=1511858244208536190&amp;abpl=2&amp;vsid=1504393878916256&amp;&amp;cref=https%3A%2F%2Fwww.template.net%2Fweb-templates%2Fwebsite-templates%2Fcareer-template%2F&amp;sttm=1511858242832&amp;upk=1511858243.2608&amp;hvsid=00001511858242832030352891625592&amp;verid=121199&amp;tdAdd[]=%7C%40%7Csde%3D1%7C%40%7Cadepth%3D3%7C%40%7Cddepth%3D3&amp;kbbq=%26sde%3D1%26adepth%3D3%26ddepth%3D3&amp;npgv=1&amp;rtbsd=6&amp;dytm=1511858243874&amp;clsKb=2" type="text/javascript" async=""></script></head>             
                <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Menu jQuery plugin -->
        <script type="text/javascript" src="js/hover-dropdown-menu.js"></script>
        <!-- Menu jQuery Bootstrap Addon -->
        <script type="text/javascript" src="js/jquery.hover-dropdown-menu-addon.js"></script>
        <!-- Scroll Top Menu -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <!-- Sticky Menu -->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!-- Bootstrap Validation -->
        <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
        <!-- Animations -->
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/effect.js"></script>
        <!-- Owl Carousel Slider -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <!-- Parallax BG -->
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <!-- Custom Js Code -->
        <script type="text/javascript" src="js/custom.js"></script>

<?php
include_once 'footer.php';
