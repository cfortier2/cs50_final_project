<!DOCTYPE html> 
<html> 
<head> 
	<title>Chris Fortier</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>


    <link rel="stylesheet" href="../html/css/quickhighlighter.css" />

</head> 

<body> 

<form action="info.php" method="post">

<div data-role="page">

    <div data-role="header">
        <h1>About</h1>
    </div><!-- /header -->

<div data-role="content">	

    <div data-role="collapsible">
            <h3>web_server</h3>
            <p>
       <div data-role="collapsible">
            <h3>mongo_functions.php</h3>
            <p>
                <div class="php"><ol><li class="li1"><div class="de1"><span class="kw2">&lt;?php</span></div></li>
                <li class="li1"><div class="de1">&nbsp;</div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; <span class="coMULTI">/***********************************************************************</span></div></li>
                <li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* mongo_functions.php</span></div></li>
                <li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
                <li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* Chris Fortier</span></div></li>
                <li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* Computer Science 50</span></div></li>
                <li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* Final Project</span></div></li>
                <li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
                <li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* mongo db functions</span></div></li>
                <li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;**********************************************************************/</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp;</div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp;</div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co4">/**</span></div></li>
                <li class="li2"><div class="de2"><span class="co4">&nbsp; &nbsp; &nbsp;* Get all stops matching an agency_key</span></div></li>
                <li class="li1"><div class="de1"><span class="co4">&nbsp; &nbsp; &nbsp;*/</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">function</span> getStops<span class="br0">&#40;</span><span class="re0">$agency</span><span class="br0">&#41;</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//connect to DB</span></div></li>
                <li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//$m = new Mongo(&quot;ec2-00-00-00-000.compute-1.amazonaws.com&quot;);</span></div></li>
                <li class="li1"><div class="de1">&nbsp;</div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//connect to local db</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$m</span> <span class="sy0">=</span> <span class="kw2">new</span> Mongo<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
                <li class="li1"><div class="de1">&nbsp;</div></li>
                <li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//select a database</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$db</span> <span class="sy0">=</span> <span class="re0">$m</span><span class="sy0">-&gt;</span><span class="me1">transit</span><span class="sy0">;</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//select a collection</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$collection</span> <span class="sy0">=</span> <span class="re0">$db</span><span class="sy0">-&gt;</span><span class="me1">stops</span><span class="sy0">;</span></div></li>
                <li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get all stops for agency</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//$cursor = $collection-&gt;find(array(agency_key=&gt;$agency), array(stop_name=&gt; 1))-&gt;sort(array(stop_name=&gt;1));</span></div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$collection</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>agency_key<span class="sy0">=&gt;</span><span class="re0">$agency</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">sort</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>stop_name <span class="sy0">=&gt;</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
                <li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
                <li class="li1"><div class="de1">&nbsp;</div></li>
                <li class="li1"><div class="de1">&nbsp;</div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$cursor</span><span class="sy0">;</span> &nbsp; &nbsp;</div></li>
                <li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
                <li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp;</div></li>
                <li class="li1"><div class="de1"><span class="sy1">?&gt;</span></div></li>
                </ol></div>
            </p>
        </div>

        <div data-role="collapsible">
            <h3>transit_node.php</h3>
            <p>
                <div class="php"><ol><li class="li1"><div class="de1"><span class="kw2">&lt;?php</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="coMULTI">/*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* Chris Fortier</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* cs50 - Final Project</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* transit_node.php is an implementation of a singly linked list optimized for details of a transit node (stop)</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* it contains functions for creating the list, appending and prepending nodes, and searching the list for a given value. </span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* Note: As a performance optimization/design decision - The stops will be sorted from the database server and the list will only be created using sorted data, therefore sorted insert is not included.</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* inList:</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* &nbsp; &nbsp; &nbsp;will accept a 'key' and 'value' to search for, giving it the ability to search for any data element that may be in the list.</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*/</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//class definition</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="kw2">class</span> transit_node</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$stop_name</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$stop_id</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$trip_id</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$block_id</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$arrival_time</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$departure_time</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$dist_to_destination</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$gCost</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$hCost</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$fCost</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$prevNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="re0">$nextNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//constructor</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="re0">$stop_name</span><span class="sy0">,</span> <span class="re0">$stop_id</span><span class="sy0">,</span> <span class="re0">$trip_id</span><span class="sy0">,</span> <span class="re0">$block_id</span><span class="sy0">,</span> <span class="re0">$arrival_time</span><span class="sy0">,</span> <span class="re0">$departure_time</span><span class="sy0">,</span> <span class="re0">$dist</span><span class="sy0">,</span> <span class="re0">$time</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//assign variables</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">stop_name</span> <span class="sy0">=</span> <span class="re0">$stop_name</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">stop_id</span> <span class="sy0">=</span> <span class="re0">$stop_id</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">block_id</span> <span class="sy0">=</span> <span class="re0">$block_id</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">arrival_time</span> <span class="sy0">=</span> <span class="re0">$arrival_time</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">departure_time</span> <span class="sy0">=</span> <span class="re0">$departure_time</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">trip_id</span> <span class="sy0">=</span> <span class="re0">$trip_id</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//keep small distances at a reasonable number</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$dist</span> <span class="sy0">&lt;</span> <span class="nu19">.1</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">dist_to_destination</span> <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">else</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">dist_to_destination</span> <span class="sy0">=</span> <span class="re0">$dist</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">prevNode</span> <span class="sy0">=</span> <span class="kw4">NULL</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span> <span class="sy0">=</span> <span class="kw4">NULL</span><span class="sy0">;</span> </div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//update costs</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">gCost</span> <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//$this-&gt;gCost($time, $arrival_time);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">hCost</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//tostring</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">public</span> <span class="kw2">function</span> __toString<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">stop_name</span><span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//determine difference between start time and arrival time</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> gCost<span class="br0">&#40;</span><span class="re0">$start_time</span><span class="sy0">,</span> <span class="re0">$arrival_time</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//doesn't work yet....need to convert string to DateTime</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://www.php.net/date_default_timezone_set"><span class="kw3">date_default_timezone_set</span></a><span class="br0">&#40;</span><span class="st_h">'America/New_York'</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$a</span> <span class="sy0">=</span> <span class="kw2">new</span> DateTime<span class="br0">&#40;</span><span class="re0">$arrival_time</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$time_diff</span> <span class="sy0">=</span> <span class="re0">$arrival_time</span> <span class="sy0">-</span> <span class="re0">$start_time</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\ngCost: $start_time, $a, $time_diff &quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//update fCost</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">fCost</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//calculate the hCost based on an average speed of 30mph</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> hCost<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//hCost is distance /speed (mph) * 60 (minutes in an hour) to get the estimated number of minutes</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">hCost</span> <span class="sy0">=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">dist_to_destination</span> <span class="sy0">/</span> <span class="nu0">30</span> <span class="sy0">*</span> <span class="nu0">60</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//update fCost</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">fCost</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//update fCost</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> fCost<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">fCost</span> <span class="sy0">=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">gCost</span> <span class="sy0">+</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">hCost</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">//linked list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">class</span> transit_list</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//link to first node</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">private</span> <span class="re0">$firstNode</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//link to last node</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">private</span> <span class="re0">$lastNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//count</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">private</span> <span class="re0">$nodeCount</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//destination found</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">private</span> <span class="re0">$destinationFound</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//constructor</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span> <span class="sy0">=</span> <span class="kw4">NULL</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span> <span class="sy0">=</span> <span class="kw4">NULL</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">nodeCount</span> <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">destinationFound</span> <span class="sy0">=</span> <span class="kw4">FALSE</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span> &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//prepend node to front of list</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> prepend<span class="br0">&#40;</span><span class="sy0">&amp;</span><span class="re0">$node</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//if list is empty</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span> <span class="sy0">==</span> <span class="kw4">NULL</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//update list variables</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span> <span class="sy0">=</span> <span class="re0">$node</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span> <span class="sy0">=</span> <span class="re0">$node</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">nodeCount</span> <span class="sy0">=</span> <span class="nu0">1</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//list is not empty</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">else</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//reassign firstNode</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span><span class="sy0">-&gt;</span><span class="me1">prevNode</span> <span class="sy0">=</span> <span class="re0">$node</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$node</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span> <span class="sy0">=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span> <span class="sy0">=</span> <span class="sy0">&amp;</span><span class="re0">$node</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">nodeCount</span><span class="sy0">++;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span> &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//append node to end of list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> append<span class="br0">&#40;</span><span class="sy0">&amp;</span><span class="re0">$node</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//if list is empty</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span><span class="br0">&#40;</span><span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span> <span class="sy0">==</span> <span class="kw4">NULL</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">prepend</span><span class="br0">&#40;</span><span class="re0">$node</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">else</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//reassign lastNode to this node</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$node</span><span class="sy0">-&gt;</span><span class="me1">prevNode</span> <span class="sy0">=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span> <span class="sy0">=</span> <span class="re0">$node</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span> <span class="sy0">=</span> <span class="re0">$node</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">nodeCount</span><span class="sy0">++;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($node);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//remove nodes after $stop_id</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> remove_after<span class="br0">&#40;</span><span class="re0">$stop_id</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//until $node is found, remove the lastNode</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$nodeFound</span> <span class="sy0">=</span> <span class="kw4">FALSE</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$end_cursor</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">while</span> <span class="br0">&#40;</span><span class="re0">$nodeFound</span> <span class="sy0">==</span> <span class="kw4">FALSE</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//cursor</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$start_cursor</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//find next to last node</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$start_cursor</span> <span class="sy0">=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">while</span> <span class="br0">&#40;</span><span class="re0">$start_cursor</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span> <span class="sy0">!=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$start_cursor</span> <span class="sy0">=</span> <span class="re0">$start_cursor</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print start_cursor</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nstart_cursor\n:&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($start_cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//work with lastNode</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$end_cursor</span> <span class="sy0">=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nend_cursor:\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($end_cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//check if this is the correct stop</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$end_cursor</span><span class="sy0">-&gt;</span><span class="me1">stop_id</span> <span class="sy0">==</span> <span class="re0">$stop_id</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//stop removing</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$nodeFound</span> <span class="sy0">=</span> <span class="kw4">TRUE</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">else</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//remove lastNode</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://www.php.net/unset"><span class="kw3">unset</span></a><span class="br0">&#40;</span><span class="re0">$end_cursor</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$end_cursor</span> <span class="sy0">=</span> <span class="kw4">NULL</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//reassign lastNode</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span> <span class="sy0">=</span> <span class="re0">$start_cursor</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//assign lastNode to null</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">lastNode</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span> <span class="sy0">=</span> <span class="kw4">NULL</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//update nodeCount</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">nodeCount</span><span class="sy0">--;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print($this-&gt;nodeCount);</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span> </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//return nodeCount</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> getNodeCount<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">nodeCount</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//return nodeCount</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> getDestinationFound<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">destinationFound</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//return the head element</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> getHead<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//return the second stop in the list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> getSecondStop<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//prints each node name</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> printList<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span><span class="re0">$cursor</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span><span class="br0">&#40;</span><span class="st0">&quot;There are <span class="es4">$this-&gt;nodeCount</span> nodes <span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//returns true if &nbsp;is in the list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> inList<span class="br0">&#40;</span><span class="re0">$key</span><span class="sy0">,</span> <span class="re0">$value</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//debug</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nSearching for: key: $key : value: $value&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//cursor to walk the list</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">firstNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//walk the list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">while</span> <span class="br0">&#40;</span><span class="re0">$cursor</span> <span class="sy0">!=</span> <span class="kw4">NULL</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print($cursor-&gt;$key . &quot;\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//compare values</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span><span class="br0">&#40;</span><span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="re0">$key</span> <span class="sy0">==</span> <span class="re0">$value</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nFOUND: &quot; . $cursor-&gt;$key . &quot;\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//update list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$this</span><span class="sy0">-&gt;</span><span class="me1">destinationFound</span> <span class="sy0">=</span> <span class="kw4">TRUE</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="kw4">TRUE</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//move cursor</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span><span class="sy0">;</span>&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//not found</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nNOT FOUND\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="kw4">FALSE</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="sy1">?&gt;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
</ol></div>
            </p>
        </div>

        <div data-role="collapsible">
            <h3>route.php</h3>
            <p>
                <div class="php"><ol><li class="li1"><div class="de1"><span class="kw2">&lt;?php</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="coMULTI">/*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* route.php</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* Chris Fortier cs50 - Final Project</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* This is the core routing program for the project. It requires transit_node.php, which defines a node of relevent data for a train stop and implements a linked list of those stops.</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* process:</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* &nbsp; &nbsp; &nbsp;Conceptually speaking, this implementation views an individual train trip as a singly linked list of transit_nodes (stops). To determine an optimal route, we start with the next train leaving a given stop. The data from that trip is then used to construct the linked list (transit_list). </span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* functions:</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* nextTrains:</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* &nbsp; &nbsp; &nbsp;queries the database for the next $num of trains departing from a given $stop_id </span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* nextTrip:</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* &nbsp; &nbsp; &nbsp;queries the database for the details of a given $trip_id for stops after the given $stop_sequence</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* getStop:</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* &nbsp; &nbsp; &nbsp;queries the database for details of a given $stop_id</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* test:</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp;* &nbsp; &nbsp; &nbsp;constructs a single list with hard-coded data for testing. </span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp;*/</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw1">require_once</span><span class="br0">&#40;</span><span class="st0">&quot;transit_node.php&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="re0">$localTest</span> <span class="sy0">=</span> <span class="kw4">False</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//connect to DB</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$localTest</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span><span class="br0">&#40;</span><span class="st0">&quot;localTest<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$m</span> <span class="sy0">=</span> <span class="kw2">new</span> Mongo<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//select a database</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$db</span> <span class="sy0">=</span> <span class="re0">$m</span><span class="sy0">-&gt;</span><span class="me1">test</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw1">else</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//$m = new Mongo(&quot;ec2-00-00-00-000.compute-1.amazonaws.com&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$m</span> <span class="sy0">=</span> <span class="kw2">new</span> Mongo<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//select a database</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$db</span> <span class="sy0">=</span> <span class="re0">$m</span><span class="sy0">-&gt;</span><span class="me1">transit</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">//test routes</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//on same route</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//astar($db, 63, 29, &quot;07:34:00&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">//transfer routes - hoboken to newark penn</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//$output = astar($db, 63, 32, &quot;07:34:00&quot;, NULL);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//print_r($output);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//sec to &nbsp;newark penn</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">//$output = astar($db, 38174, 107, &quot;07:45:00&quot;, NULL);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//print_r($output);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">function</span> test<span class="br0">&#40;</span><span class="re0">$origin</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$origin</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//-- core routing function -----------------------//</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">function</span> astar<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$origin</span><span class="sy0">,</span> <span class="re0">$destination</span><span class="sy0">,</span> <span class="re0">$time</span><span class="sy0">,</span> <span class="re0">$parent</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//handle null parent</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$parent</span> <span class="sy0">==</span> <span class="sy0">-</span><span class="nu0">1</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$parent</span> <span class="sy0">=</span> <span class="kw4">NULL</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nastar: $origin, $destination, $time&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//create trips to check &nbsp; &nbsp; </span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$trips</span><span class="br0">&#91;</span><span class="br0">&#93;</span> <span class="sy0">=</span> createTrips<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$origin</span><span class="sy0">,</span> <span class="re0">$destination</span><span class="sy0">,</span> <span class="re0">$time</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($trips);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nparent:\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($parent);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//flag if destination is found</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$destinationFound</span> <span class="sy0">=</span> <span class="kw4">FALSE</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$foundRoutes</span> <span class="sy0">=</span> <span class="br0">&#91;</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//add each trip to the open list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$trips</span> <span class="kw1">as</span> <span class="re0">$trip</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$trip</span> <span class="kw1">as</span> <span class="re0">$t</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//add to open list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$open_list</span><span class="br0">&#91;</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="re0">$t</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span> &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//read open_list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$open_list</span> <span class="kw1">as</span> <span class="re0">$list</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($list);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$current</span> <span class="sy0">=</span> <span class="re0">$list</span><span class="sy0">-&gt;</span><span class="me1">getHead</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$next</span> <span class="sy0">=</span> <span class="re0">$list</span><span class="sy0">-&gt;</span><span class="me1">getSecondStop</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\n$current-&gt;stop_name: trip_id: $current-&gt;trip_id fCost: $current-&gt;fCost\n&quot;);</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\t\\$next-&gt;stop_name: fCost: $next-&gt;fCost\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nBEFORE:\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($open_list);</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//sort the open_list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://www.php.net/usort"><span class="kw3">usort</span></a><span class="br0">&#40;</span><span class="re0">$open_list</span><span class="sy0">,</span> <span class="st0">&quot;myCmp&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nAFTER:\n&quot;);</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($open_list);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\n\n***--------starting new open list --------***\n\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//while openset is not null</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">while</span><span class="br0">&#40;</span><span class="re0">$open_list</span> <span class="sy0">!=</span> <span class="kw4">NULL</span> &nbsp;<span class="sy0">&amp;&amp;</span> <span class="re0">$destinationFound</span> <span class="sy0">==</span> <span class="kw4">FALSE</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//now that we have our open_list sorted by fCost, pull the lowest cost trip</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cheapest_trip</span> <span class="sy0">=</span> <a href="http://www.php.net/array_pop"><span class="kw3">array_pop</span></a><span class="br0">&#40;</span><span class="re0">$open_list</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\ncheapest_trip: &quot;);</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($cheapest_trip-&gt;getHead()-&gt;stop_name . &quot; fCost: &quot; . $cheapest_trip-&gt;getHead()-&gt;fCost);&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//if destination is in list, return the path</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$cheapest_trip</span><span class="sy0">-&gt;</span><span class="me1">getDestinationFound</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="nu0">1</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$destinationFound</span> <span class="sy0">=</span> <span class="kw4">TRUE</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nFOUND IT&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($cheapest_trip-&gt;getHead());</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//link parent to $cheapest_trip</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$parent</span> <span class="sy0">!=</span> <span class="kw4">NULL</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$parent</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span> <span class="sy0">=</span> <span class="re0">$cheapest_trip</span><span class="sy0">-&gt;</span><span class="me1">getHead</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//link previous node</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cheapest_trip</span><span class="sy0">-&gt;</span><span class="me1">getHead</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">prevNode</span> <span class="sy0">=</span> <span class="re0">$parent</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//create origin cursor and move to origino</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$origin</span> <span class="sy0">=</span> <span class="re0">$parent</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">while</span><span class="br0">&#40;</span><span class="re0">$origin</span><span class="sy0">-&gt;</span><span class="me1">prevNode</span> <span class="sy0">!=</span> <span class="kw4">NULL</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$origin</span> <span class="sy0">=</span> <span class="re0">$origin</span><span class="sy0">-&gt;</span><span class="me1">prevNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//return $cheapest_trip</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$origin</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">else</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$cheapest_trip</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">else</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span><span class="br0">&#40;</span><span class="st0">&quot;<span class="es1">\n</span><span class="es1">\t</span><span class="es1">\\</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span><span class="re0">$cheapest_trip</span><span class="sy0">-&gt;</span><span class="me1">getSecondStop</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">stop_name</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span><span class="br0">&#40;</span><span class="st0">&quot; fCost: &quot;</span> <span class="sy0">.</span> <span class="re0">$cheapest_trip</span><span class="sy0">-&gt;</span><span class="me1">getSecondStop</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">fCost</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//track current fCost</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$current_fCost</span> <span class="sy0">=</span> <span class="re0">$cheapest_trip</span><span class="sy0">-&gt;</span><span class="me1">getHead</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">fCost</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span><span class="br0">&#40;</span><span class="st0">&quot;<span class="es1">\n</span>current_fCost: &quot;</span> <span class="sy0">.</span> <span class="re0">$current_fCost</span> <span class="sy0">.</span> <span class="st0">&quot;<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//recursively check each trip on list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$cheapest_trip</span><span class="sy0">-&gt;</span><span class="me1">getSecondStop</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">while</span> <span class="br0">&#40;</span><span class="br0">&#40;</span><span class="re0">$cursor</span> <span class="sy0">!=</span> <span class="kw4">NULL</span><span class="br0">&#41;</span> <span class="sy0">&amp;&amp;</span> <span class="br0">&#40;</span><span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">fCost</span> <span class="sy0">&lt;</span> <span class="re0">$current_fCost</span><span class="br0">&#41;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//check fCost</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">fCost</span> <span class="sy0">&gt;</span> <span class="nu0">0</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nin_cursor\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print($cursor-&gt;stop_name . &quot; fcost: &quot; . $cursor-&gt;fCost);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//update current_fCost - added a buffer that there neeeds to be a greater than 25% change in cost</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">fCost</span> <span class="sy0">&lt;</span> <span class="br0">&#40;</span><span class="nu19">.85</span> <span class="sy0">*</span> <span class="re0">$current_fCost</span><span class="br0">&#41;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$current_fCost</span> <span class="sy0">=</span> <span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">fCost</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//trim parent list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$parent</span> <span class="sy0">=</span> <span class="re0">$cheapest_trip</span><span class="sy0">-&gt;</span><span class="me1">remove_after</span><span class="br0">&#40;</span><span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">stop_id</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\ninner parent\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($parent);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//recursive call</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> astar<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">stop_id</span><span class="sy0">,</span> <span class="re0">$destination</span><span class="sy0">,</span> <span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">arrival_time</span><span class="sy0">,</span> <span class="re0">$cursor</span> <span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//move cursor down list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$cursor</span><span class="sy0">-&gt;</span><span class="me1">nextNode</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span><span class="br0">&#40;</span><span class="st0">&quot;<span class="es1">\n</span>open_list is null<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$foundRoutes</span> <span class="sy0">!=</span> <span class="kw4">NULL</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$foundRoutes</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">else</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="kw4">FALSE</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//try and sort the open_list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">// ****NOTE LIST IS SORTED IN REVERSE ORDER SO THAT WE CAN POP THE LOWEST COST FROM THE ARRAY ***</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">function</span> myCmp<span class="br0">&#40;</span><span class="re0">$a</span><span class="sy0">,</span> <span class="re0">$b</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="br0">&#40;</span><span class="re0">$a</span><span class="sy0">-&gt;</span><span class="me1">getSecondStop</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">fCost</span> <span class="sy0">&gt;</span> <span class="re0">$b</span><span class="sy0">-&gt;</span><span class="me1">getSecondStop</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">fCost</span><span class="br0">&#41;</span> ? <span class="sy0">-</span><span class="nu0">1</span> <span class="sy0">:</span><span class="nu0">1</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span> &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//-- this function creates N number of available trips from an origin at a given time. It removes trips that are the last stop.</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="kw2">function</span> createTrips<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$origin</span><span class="sy0">,</span> <span class="re0">$destination</span><span class="sy0">,</span> <span class="re0">$time</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//load next $num trains from origin in to queue</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$num</span> <span class="sy0">=</span> <span class="nu0">30</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$nextTrains</span> <span class="sy0">=</span> nextTrains<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$origin</span><span class="sy0">,</span> <span class="re0">$time</span><span class="sy0">,</span> <span class="re0">$num</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_debug($nextTrains);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//array of linked lists of next available trips. </span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$tripList</span> <span class="sy0">=</span> <span class="br0">&#91;</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$i</span> <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//create linked list for each of the next available trains</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$nextTrains</span> <span class="kw1">as</span> <span class="re0">$train</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($train);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//create a linked list of the remainder of the route for the next train</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$tripList</span><span class="br0">&#91;</span><span class="re0">$i</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">new</span> transit_list<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get details of next available trip</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$nextTrips</span> <span class="sy0">=</span> nextTrip<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$train</span><span class="br0">&#91;</span><span class="st_h">'trip_id'</span><span class="br0">&#93;</span><span class="sy0">,</span> <span class="re0">$train</span><span class="br0">&#91;</span><span class="st_h">'stop_sequence'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_debug($nextTrips);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//add node/stop to list</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$nextTrips</span> <span class="kw1">as</span> <span class="re0">$trip</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($nextTrips);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get stop name</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$stop</span> <span class="sy0">=</span> getStop<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$trip</span><span class="br0">&#91;</span><span class="st_h">'stop_id'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$name</span> <span class="sy0">=</span> <span class="st0">&quot;&quot;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$stop</span> <span class="kw1">as</span> <span class="re0">$s</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print($s['stop_name']);</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$name</span> <span class="sy0">=</span> <span class="re0">$s</span><span class="br0">&#91;</span><span class="st_h">'stop_name'</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get block_id (this is the public train number)</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$trips_info</span> <span class="sy0">=</span> getTrip<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$trip</span><span class="br0">&#91;</span><span class="st_h">'trip_id'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$block_id</span> <span class="sy0">=</span> <span class="st0">&quot;&quot;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$trips_info</span> <span class="kw1">as</span> <span class="re0">$info</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$block_id</span> <span class="sy0">=</span> <span class="re0">$info</span><span class="br0">&#91;</span><span class="st_h">'block_id'</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get distance</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$dist</span> <span class="sy0">=</span> getDistance<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$trip</span><span class="br0">&#91;</span><span class="st_h">'stop_id'</span><span class="br0">&#93;</span><span class="sy0">,</span> <span class="re0">$destination</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//create node</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$node</span> <span class="sy0">=</span> <span class="kw2">new</span> transit_node<span class="br0">&#40;</span><span class="re0">$name</span><span class="sy0">,</span> <span class="re0">$trip</span><span class="br0">&#91;</span><span class="st_h">'stop_id'</span><span class="br0">&#93;</span><span class="sy0">,</span> <span class="re0">$trip</span><span class="br0">&#91;</span><span class="st_h">'trip_id'</span><span class="br0">&#93;</span><span class="sy0">,</span> <span class="re0">$block_id</span><span class="sy0">,</span> <span class="re0">$trip</span><span class="br0">&#91;</span><span class="st_h">'arrival_time'</span><span class="br0">&#93;</span><span class="sy0">,</span> <span class="re0">$trip</span><span class="br0">&#91;</span><span class="st_h">'departure_time'</span><span class="br0">&#93;</span><span class="sy0">,</span> <span class="re0">$dist</span><span class="sy0">,</span> <span class="re0">$time</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//add to tripList</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$tripList</span><span class="br0">&#91;</span><span class="re0">$i</span><span class="br0">&#93;</span><span class="sy0">-&gt;</span><span class="me1">append</span><span class="br0">&#40;</span><span class="re0">$node</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//increment counter</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$i</span><span class="sy0">++;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//remove lists with only one node (meaning it is the last stop)</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\ntripList - before:\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($tripList);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$tripList</span> <span class="kw1">as</span> <span class="re0">$key</span> <span class="sy0">=&gt;</span> <span class="re0">$trip</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nnodeCount: &quot; . $trip-&gt;getNodeCount() .&quot;\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$trip</span><span class="sy0">-&gt;</span><span class="me1">getNodeCount</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="nu0">1</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://www.php.net/unset"><span class="kw3">unset</span></a><span class="br0">&#40;</span><span class="re0">$tripList</span><span class="br0">&#91;</span><span class="re0">$key</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\ntripList - after:\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($tripList);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//check each of the tripLists to see if the destination is found.</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$tripList</span> <span class="kw1">as</span> <span class="re0">$trip</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($trip);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//check if destination is in this list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$trip</span><span class="sy0">-&gt;</span><span class="me1">inList</span><span class="br0">&#40;</span><span class="st_h">'stop_id'</span><span class="sy0">,</span> <span class="re0">$destination</span><span class="br0">&#41;</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//remove remaining stops from list</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$trip</span><span class="sy0">-&gt;</span><span class="me1">remove_after</span><span class="br0">&#40;</span><span class="re0">$destination</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print list</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nRoute found:\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($trip);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//look at next stop</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nNext Stop:\n&quot;);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$trip</span><span class="sy0">-&gt;</span><span class="me1">getSecondStop</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print the lists</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="coMULTI">/*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; foreach($tripList as $trip)</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $trip-&gt;printList();</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; */</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$tripList</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//--helper functions-------------------------------------------------------------------------------------------------//</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//function takes the data to &nbsp;query the next trains, gets the lon/lat and calls the next function. The location function was added as an after thought.</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="kw2">function</span> nextTrains<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$stop_id</span><span class="sy0">,</span> <span class="re0">$time</span><span class="sy0">,</span> <span class="re0">$num</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get lon/lat</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$stop</span> <span class="sy0">=</span> getStop<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$stop_id</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$stop_lon</span> <span class="sy0">=</span> <span class="st0">&quot;&quot;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$stop_lat</span> <span class="sy0">=</span> <span class="st0">&quot;&quot;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$stop</span> <span class="kw1">as</span> <span class="re0">$s</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($s['loc']);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$stop_lon</span> <span class="sy0">=</span> <span class="re0">$s</span><span class="br0">&#91;</span><span class="st_h">'stop_lon'</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$stop_lat</span> <span class="sy0">=</span> <span class="re0">$s</span><span class="br0">&#91;</span><span class="st_h">'stop_lat'</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print($stop_lon . &quot;, &quot; . &nbsp;$stop_lat); </span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> nextTrains_loc<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$stop_lon</span><span class="sy0">,</span> <span class="re0">$stop_lat</span><span class="sy0">,</span> <span class="re0">$time</span><span class="sy0">,</span> <span class="re0">$num</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//function takes a lon/lat and returns the next $num trains</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//nextTrains_loc($db, -74.075821, 40.761188, &quot;07:45:00&quot;, 5);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">function</span> nextTrains_loc<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$stop_lon</span><span class="sy0">,</span> <span class="re0">$stop_lat</span><span class="sy0">,</span> <span class="re0">$time</span><span class="sy0">,</span> <span class="re0">$num</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get stops near</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$loc_cursor</span> <span class="sy0">=</span> <span class="re0">$db</span><span class="sy0">-&gt;</span><span class="me1">command</span><span class="br0">&#40;</span><span class="br0">&#91;</span><span class="st_h">'geoNear'</span> <span class="sy0">=&gt;</span> <span class="st_h">'stops'</span><span class="sy0">,</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'near'</span>&nbsp; <span class="sy0">=&gt;</span> <span class="br0">&#91;</span><span class="re0">$stop_lon</span><span class="sy0">,</span> <span class="re0">$stop_lat</span><span class="br0">&#93;</span><span class="sy0">,</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'spherical'</span> <span class="sy0">=&gt;</span> <span class="kw4">true</span><span class="sy0">,</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'distanceMultiplier'</span> <span class="sy0">=&gt;</span> <span class="nu0">3959</span><span class="sy0">,</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'maxDistance'</span> <span class="sy0">=&gt;</span> <span class="nu19">.00009</span> <span class="sy0">,</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'num'</span> <span class="sy0">=&gt;</span> <span class="re0">$num</span> &nbsp; <span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//pull out only the stop id's</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$loc_cursor</span> <span class="kw1">as</span> <span class="re0">$loc</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><a href="http://www.php.net/is_array"><span class="kw3">is_array</span></a><span class="br0">&#40;</span><span class="re0">$loc</span><span class="br0">&#41;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$loc</span> <span class="kw1">as</span> <span class="re0">$l</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($l['obj']['stop_id']);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$l</span><span class="br0">&#91;</span><span class="st_h">'obj'</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="st_h">'stop_id'</span><span class="br0">&#93;</span> <span class="sy0">!=</span> <span class="kw4">NULL</span><span class="br0">&#41;</span> &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$stops</span><span class="br0">&#91;</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="re0">$l</span><span class="br0">&#91;</span><span class="st_h">'obj'</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="st_h">'stop_id'</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($stops);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get next $num of trains leaving after $time from location</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$query</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">&quot;stop_id&quot;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st_h">'$in'</span> <span class="sy0">=&gt;</span> <span class="re0">$stops</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="st0">&quot;departure_time&quot;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st_h">'$gt'</span> <span class="sy0">=&gt;</span> <span class="re0">$time</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$db</span><span class="sy0">-&gt;</span><span class="me1">stop_times</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span> <span class="re0">$query</span> <span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">sort</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">&quot;departure_time&quot;</span> <span class="sy0">=&gt;</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">limit</span><span class="br0">&#40;</span><span class="re0">$num</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print(&quot;\nnextTrains\n&quot;);</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_debug($cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="br0">&#40;</span><span class="re0">$cursor</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//function takes a trip id and returns an array of the remaining stops</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">function</span> nextTrip<span class="br0">&#40;</span><span class="re0">$database</span><span class="sy0">,</span> <span class="re0">$trip_id</span><span class="sy0">,</span> <span class="re0">$stop_seq</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//gets the trip</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$query</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">&quot;trip_id&quot;</span> <span class="sy0">=&gt;</span> <span class="re0">$trip_id</span><span class="sy0">,</span> <span class="st0">&quot;stop_sequence&quot;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st_h">'$gte'</span> <span class="sy0">=&gt;</span> <span class="re0">$stop_seq</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$database</span><span class="sy0">-&gt;</span><span class="me1">stop_times</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span> <span class="re0">$query</span> <span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">sort</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">&quot;stop_sequence&quot;</span> <span class="sy0">=&gt;</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_debug($cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($cursor);</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="br0">&#40;</span><span class="re0">$cursor</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//get name of a stop</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="kw2">function</span> getStop<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$stop_id</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get the stop info</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$query</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">&quot;stop_id&quot;</span> <span class="sy0">=&gt;</span> <span class="re0">$stop_id</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$db</span><span class="sy0">-&gt;</span><span class="me1">stops</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span> <span class="re0">$query</span> <span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_debug($cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="br0">&#40;</span><span class="re0">$cursor</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">//get trip info</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">function</span> getTrip<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$trip_id</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get the trip info</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$query</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">&quot;trip_id&quot;</span> <span class="sy0">=&gt;</span> <span class="re0">$trip_id</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$db</span><span class="sy0">-&gt;</span><span class="me1">trips</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span> <span class="re0">$query</span> <span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_debug($cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="br0">&#40;</span><span class="re0">$cursor</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//helper to print variables</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw2">function</span> print_debug<span class="br0">&#40;</span><span class="re0">$var</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//display if null</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re0">$var</span> <span class="sy0">==</span> <span class="kw4">NULL</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span><span class="br0">&#40;</span><span class="st0">&quot;<span class="es4">$var</span> is NULL&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//iterate through results and display</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$var</span> <span class="kw1">as</span> <span class="re0">$obj</span><span class="br0">&#41;</span> <span class="br0">&#123;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span><span class="re0">$obj</span><span class="br0">&#41;</span><span class="sy0">;;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">//get distance between two stops</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="kw2">function</span> getDistance<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$start_id</span><span class="sy0">,</span> <span class="re0">$end_id</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get start</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$start</span> <span class="sy0">=</span> getStop<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$start_id</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$start_loc</span> <span class="sy0">=</span> <span class="st0">&quot;&quot;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$start</span> <span class="kw1">as</span> <span class="re0">$s</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($s['loc']);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$start_loc</span> <span class="sy0">=</span> <span class="re0">$s</span><span class="br0">&#91;</span><span class="st_h">'loc'</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get end</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$end</span> <span class="sy0">=</span> getStop<span class="br0">&#40;</span><span class="re0">$db</span><span class="sy0">,</span> <span class="re0">$end_id</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$end_loc</span> <span class="sy0">=</span> <span class="st0">&quot;&quot;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re0">$end</span> <span class="kw1">as</span> <span class="re0">$e</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#123;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($e['loc']);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$end_loc</span> <span class="sy0">=</span> <span class="re0">$e</span><span class="br0">&#91;</span><span class="st_h">'loc'</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//get data</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$cursor</span> <span class="sy0">=</span> <span class="re0">$db</span><span class="sy0">-&gt;</span><span class="me1">command</span><span class="br0">&#40;</span><span class="br0">&#91;</span><span class="st_h">'geoNear'</span> <span class="sy0">=&gt;</span> <span class="st_h">'stops'</span><span class="sy0">,</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'near'</span>&nbsp; <span class="sy0">=&gt;</span> <span class="br0">&#91;</span><span class="re0">$start_loc</span><span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span><span class="sy0">,</span> <span class="re0">$start_loc</span><span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span><span class="br0">&#93;</span><span class="sy0">,</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'spherical'</span> <span class="sy0">=&gt;</span> <span class="kw4">true</span><span class="sy0">,</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'distanceMultiplier'</span> <span class="sy0">=&gt;</span> <span class="nu0">3959</span><span class="sy0">,</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="st_h">'query'</span> <span class="sy0">=&gt;</span> <span class="br0">&#91;</span><span class="st_h">'stop_id'</span> <span class="sy0">=&gt;</span> <span class="re0">$end_id</span> <span class="br0">&#93;</span>&nbsp; <span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//hard coded test</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="coMULTI">/*</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; $cursor = $db-&gt;command(['geoNear' =&gt; 'stops',</span></div></li>
<li class="li2"><div class="de2"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 'near'&nbsp; =&gt; [-74.075821, 40.761188],</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 'spherical' =&gt; true,</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 'distanceMultiplier' =&gt; 3959,</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 'query' =&gt; ['stop_name' =&gt; &quot;HOBOKEN&quot; ]&nbsp; ]);</span></div></li>
<li class="li1"><div class="de1"><span class="coMULTI">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*/</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($cursor);</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//print_r($cursor['results'][0]['dis']);</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//return the distance</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$distance</span> <span class="sy0">=</span> <span class="re0">$cursor</span><span class="br0">&#91;</span><span class="st_h">'results'</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="st_h">'dis'</span><span class="br0">&#93;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$distance</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1"><span class="sy1">?&gt;</span> </div></li>
</ol></div>
            </p>
        </div>

    </p>
</div> <!-- end web_server group -->

    <!-- begin database group -->
    <div data-role="collapsible">
        <h3>database_server</h3>
        <p>
            <div data-role="collapsible">
                <h3>load_file.py</h3>
                <p>
                    <div class="python"><ol><li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="co1"># Chris Fortier final project</span></div></li>
<li class="li1"><div class="de1"><span class="co1"># This file loads all of the .txt files in to the database</span></div></li>
<li class="li1"><div class="de1"><span class="co1">#</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="kw1">import</span> <span class="kw3">logging</span></div></li>
<li class="li1"><div class="de1"><span class="kw1">import</span> <span class="kw3">sys</span></div></li>
<li class="li1"><div class="de1"><span class="kw1">import</span> <span class="kw3">fileinput</span></div></li>
<li class="li2"><div class="de2"><span class="kw1">import</span> <span class="kw3">csv</span></div></li>
<li class="li1"><div class="de1"><span class="kw1">import</span> <span class="kw3">time</span></div></li>
<li class="li1"><div class="de1"><span class="kw1">import</span> <span class="kw3">os</span></div></li>
<li class="li1"><div class="de1"><span class="kw1">import</span> pymongo</div></li>
<li class="li1"><div class="de1"><span class="kw1">from</span> pymongo <span class="kw1">import</span> MongoClient</div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="kw3">logging</span>.<span class="me1">basicConfig</span><span class="br0">&#40;</span>filename=<span class="st0">'load_file.log'</span>, level=<span class="kw3">logging</span>.<span class="me1">DEBUG</span>, format=<span class="st0">'%(asctime)s %(message)s'</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="kw1">def</span> load<span class="br0">&#40;</span>agency<span class="br0">&#41;</span>:</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">#start timer</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; startTime = <span class="kw3">time</span>.<span class="kw3">time</span><span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">#verbose mode</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; verbose = <span class="kw2">False</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">#logging</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw3">logging</span>.<span class="me1">info</span><span class="br0">&#40;</span><span class="st0">&quot;Starting &quot;</span> + agency <span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">#make connection - remote</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">#con = MongoClient('ec2-00-00-00-000.compute-1.amazonaws.com', 27017)</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">#make connection - local</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; con = MongoClient<span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">#connect to database</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; db = con.<span class="me1">transit</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">#db = con.test</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">#each file in agency directory</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; path = <span class="st0">'/home/ec2-user/db/gtfs_loader/agencies/'</span> + <span class="kw2">str</span><span class="br0">&#40;</span>agency<span class="br0">&#41;</span> + <span class="st0">'/'</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; dirList = <span class="kw3">os</span>.<span class="me1">listdir</span><span class="br0">&#40;</span>path<span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">#total_counter</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; total_counter = <span class="nu0">0</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="co1">#work with each file</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw1">for</span> gtfs_file <span class="kw1">in</span> dirList:</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#check that it is a .txt file</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span><span class="kw3">os</span>.<span class="me1">path</span>.<span class="me1">splitext</span><span class="br0">&#40;</span>gtfs_file<span class="br0">&#41;</span><span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span> == <span class="st0">'.txt'</span><span class="br0">&#41;</span>:</div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#open gtfs file</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; gtfs_data = <span class="kw3">csv</span>.<span class="me1">DictReader</span><span class="br0">&#40;</span><span class="kw2">open</span><span class="br0">&#40;</span>path + gtfs_file, <span class="st0">'r'</span><span class="br0">&#41;</span>, delimiter=<span class="st0">','</span><span class="br0">&#41;</span>&nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#store file name as collection</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; collection_name = <span class="kw3">os</span>.<span class="me1">path</span>.<span class="me1">splitext</span><span class="br0">&#40;</span>gtfs_file<span class="br0">&#41;</span><span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; collection = db<span class="br0">&#91;</span>collection_name<span class="br0">&#93;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span> collection_name</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw3">logging</span>.<span class="me1">info</span><span class="br0">&#40;</span>collection<span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#create dictionary entry for agency</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; agency_dict = <span class="br0">&#123;</span><span class="st0">'agency_key'</span>: agency<span class="br0">&#125;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#print agency_dict</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#empty collection</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; collection.<span class="me1">remove</span><span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#counter for number of items</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; counter = <span class="nu0">0</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#read each line of file and insert into database</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">for</span> row <span class="kw1">in</span> gtfs_data:</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#print row</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#combine the dictionary for agency key with the data rows</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; merged_data = <span class="kw2">dict</span><span class="br0">&#40;</span>agency_dict.<span class="me1">items</span><span class="br0">&#40;</span><span class="br0">&#41;</span> + row.<span class="me1">items</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#inset into database</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; collection.<span class="me1">insert</span><span class="br0">&#40;</span>merged_data<span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#counter</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; counter += <span class="nu0">1</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#print stats</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">print</span> <span class="st0">&quot;loaded: &quot;</span> + <span class="kw2">str</span><span class="br0">&#40;</span>counter<span class="br0">&#41;</span> + <span class="st0">&quot; elements.<span class="es0">\n</span>&quot;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">#add counter</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; total_counter += counter</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; <span class="co1">#stop timer and print</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; endTime = <span class="kw3">time</span>.<span class="kw3">time</span><span class="br0">&#40;</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; diffTime = endTime - startTime</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw1">print</span><span class="br0">&#40;</span><span class="st0">&quot;There were %d elements in %f seconds for an average of %f elements per second.&quot;</span> <span class="sy0">%</span> <span class="br0">&#40;</span>total_counter, diffTime, total_counter/diffTime<span class="br0">&#41;</span> + <span class="st0">'<span class="es0">\n</span>'</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; <span class="kw3">logging</span>.<span class="me1">info</span><span class="br0">&#40;</span>agency + <span class="st0">&quot;: &quot;</span> + <span class="kw2">str</span><span class="br0">&#40;</span>total_counter<span class="br0">&#41;</span> + <span class="st0">&quot; elements in &quot;</span> + <span class="kw2">str</span><span class="br0">&#40;</span>diffTime<span class="br0">&#41;</span> + <span class="st0">&quot; seconds. &quot;</span> + <span class="kw2">str</span><span class="br0">&#40;</span>counter/diffTime<span class="br0">&#41;</span> + <span class="st0">&quot; elements per second.&quot;</span><span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">agency = <span class="kw2">raw_input</span><span class="br0">&#40;</span><span class="st0">&quot;<span class="es0">\n</span>Agency/Directory: &quot;</span><span class="br0">&#41;</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">load<span class="br0">&#40;</span>agency<span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1"><span class="kw3">logging</span>.<span class="me1">info</span><span class="br0">&#40;</span>agency + <span class="st0">&quot; complete.&quot;</span> <span class="br0">&#41;</span></div></li>
</ol></div>
                </p>
            </div>

            <div data-role="collapsible">
                <h3>mongo_script.js</h3>
                <p>
                    <div class="javascript"><ol><li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="co1">//Chris Fortier</span></div></li>
<li class="li1"><div class="de1"><span class="co1">//cs50 final project</span></div></li>
<li class="li1"><div class="de1"><span class="co1">//</span></div></li>
<li class="li2"><div class="de2"><span class="co1">//this file allows scripted access to the mongo command shell. </span></div></li>
<li class="li1"><div class="de1"><span class="co1">//For the sake of (relative) simplicity all of the data is loaded as string data type using a custome written python loader. These scripts change the data in the database to the correct types</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="co1">//run as mongo transit mongo_script.js</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2"><span class="co1">//stops</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stops</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'stop_code'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">stop_code</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">stop_code</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stops</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stops</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'stop_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">stop_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">stop_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stops</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stops</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'zone_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">zone_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">zone_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stops</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stops</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'stop_lat'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">stop_lat</span> <span class="sy0">=</span> parseFloat<span class="br0">&#40;</span>x.<span class="me1">stop_lat</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stops</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">db.<span class="me1">stops</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'stop_lon'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">stop_lon</span> <span class="sy0">=</span> parseFloat<span class="br0">&#40;</span>x.<span class="me1">stop_lon</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stops</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="co1">//agency</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">agency</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'agency_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">agency_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">agency_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">agency</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2"><span class="co1">//calendar_dates</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">calendar_dates</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'date'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">date</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">date</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">calendar_dates</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">calendar_dates</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'service_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">service_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">service_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">calendar_dates</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">calendar_dates</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'exception_type'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">exception_type</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">exception_type</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">calendar_dates</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2"><span class="co1">//routes</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">routes</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'route_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">route_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">route_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">routes</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">routes</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'route_type'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">route_type</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">route_type</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">routes</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">routes</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'agency_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">agency_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">agency_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">routes</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2"><span class="co1">//shpaes</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">shapes</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'shape_pt_lon'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">shape_pt_lon</span> <span class="sy0">=</span> parseFloat<span class="br0">&#40;</span>x.<span class="me1">shape_pt_lon</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">shapes</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">shapes</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'shape_pt_sequence'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">shape_pt_sequence</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">shape_pt_sequence</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">shapes</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">shapes</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'shape_dist_traveled'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">shape_dist_traveled</span> <span class="sy0">=</span> parseFloat<span class="br0">&#40;</span>x.<span class="me1">shape_dist_traveled</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">shapes</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">shapes</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'shape_pt_lat'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">shape_pt_lat</span> <span class="sy0">=</span> parseFloat<span class="br0">&#40;</span>x.<span class="me1">shape_pt_lat</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">shapes</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">db.<span class="me1">shapes</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'shape_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">shape_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">shape_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">shapes</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="co1">//stop_times</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stop_times</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'stop_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">stop_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">stop_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stop_times</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stop_times</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'pickup_type'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">pickup_type</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">pickup_type</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stop_times</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">db.<span class="me1">stop_times</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'shape_dist_traveled'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">shape_dist_traveled</span> <span class="sy0">=</span> parseFloat<span class="br0">&#40;</span>x.<span class="me1">shape_dist_traveled</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stop_times</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stop_times</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'stop_sequence'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">stop_sequence</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">stop_sequence</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stop_times</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stop_times</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'drop_off_type'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">drop_off_type</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">drop_off_type</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stop_times</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stop_times</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'trip_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">trip_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">trip_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">stop_times</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2"><span class="co1">//trips</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">trips</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'route_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">route_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">route_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">trips</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">trips</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'direction_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">direction_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">direction_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">trips</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">trips</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'shape_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">shape_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">shape_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">trips</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">trips</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'trip_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">trip_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">trip_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">trips</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li2"><div class="de2">db.<span class="me1">trips</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'service_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">service_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">service_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">trips</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">trips</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#123;</span><span class="st0">'block_id'</span> <span class="sy0">:</span> <span class="br0">&#123;</span>$type <span class="sy0">:</span> <span class="nu0">2</span> <span class="br0">&#125;</span><span class="br0">&#125;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">block_id</span> <span class="sy0">=</span> parseInt<span class="br0">&#40;</span>x.<span class="me1">block_id</span><span class="br0">&#41;</span><span class="sy0">;</span> db.<span class="me1">trips</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="co1">//add loc element to each stop</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stops</span>.<span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#41;</span>.<span class="me1">forEach</span><span class="br0">&#40;</span> <span class="kw2">function</span> <span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="br0">&#123;</span> x.<span class="me1">loc</span> <span class="sy0">=</span> <span class="br0">&#91;</span>x.<span class="me1">stop_lon</span><span class="sy0">,</span> x.<span class="me1">stop_lat</span><span class="br0">&#93;</span><span class="sy0">;</span> db.<span class="me1">stops</span>.<span class="me1">save</span><span class="br0">&#40;</span>x<span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span> </div></li>
<li class="li2"><div class="de2">db.<span class="me1">stops</span>.<span class="me1">ensureIndex</span><span class="br0">&#40;</span><span class="br0">&#123;</span>loc <span class="sy0">:</span> <span class="st0">&quot;2d&quot;</span><span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="co1">//remove christmas eve service</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">stop_times</span>.<span class="me1">remove</span><span class="br0">&#40;</span><span class="br0">&#123;</span>trip_id<span class="sy0">:</span><span class="br0">&#123;</span> $in<span class="sy0">:</span> <span class="br0">&#91;</span><span class="nu0">1258</span><span class="sy0">,</span><span class="nu0">1279</span><span class="sy0">,</span><span class="nu0">1280</span><span class="sy0">,</span><span class="nu0">1345</span><span class="sy0">,</span><span class="nu0">1346</span><span class="sy0">,</span><span class="nu0">1347</span><span class="sy0">,</span><span class="nu0">1488</span><span class="sy0">,</span><span class="nu0">1604</span><span class="sy0">,</span><span class="nu0">1605</span><span class="sy0">,</span><span class="nu0">1606</span><span class="sy0">,</span><span class="nu0">1607</span><span class="sy0">,</span><span class="nu0">1608</span><span class="sy0">,</span><span class="nu0">1609</span><span class="sy0">,</span><span class="nu0">1610</span><span class="sy0">,</span><span class="nu0">1722</span><span class="sy0">,</span><span class="nu0">1779</span><span class="sy0">,</span><span class="nu0">1780</span><span class="sy0">,</span><span class="nu0">1781</span><span class="sy0">,</span><span class="nu0">1782</span><span class="sy0">,</span><span class="nu0">2799</span><span class="br0">&#93;</span> <span class="br0">&#125;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
<li class="li1"><div class="de1">db.<span class="me1">trips</span>.<span class="me1">remove</span><span class="br0">&#40;</span><span class="br0">&#123;</span>trip_id<span class="sy0">:</span><span class="br0">&#123;</span> $in<span class="sy0">:</span> <span class="br0">&#91;</span><span class="nu0">1258</span><span class="sy0">,</span><span class="nu0">1279</span><span class="sy0">,</span><span class="nu0">1280</span><span class="sy0">,</span><span class="nu0">1345</span><span class="sy0">,</span><span class="nu0">1346</span><span class="sy0">,</span><span class="nu0">1347</span><span class="sy0">,</span><span class="nu0">1488</span><span class="sy0">,</span><span class="nu0">1604</span><span class="sy0">,</span><span class="nu0">1605</span><span class="sy0">,</span><span class="nu0">1606</span><span class="sy0">,</span><span class="nu0">1607</span><span class="sy0">,</span><span class="nu0">1608</span><span class="sy0">,</span><span class="nu0">1609</span><span class="sy0">,</span><span class="nu0">1610</span><span class="sy0">,</span><span class="nu0">1722</span><span class="sy0">,</span><span class="nu0">1779</span><span class="sy0">,</span><span class="nu0">1780</span><span class="sy0">,</span><span class="nu0">1781</span><span class="sy0">,</span><span class="nu0">1782</span><span class="sy0">,</span><span class="nu0">2799</span><span class="br0">&#93;</span> <span class="br0">&#125;</span> <span class="br0">&#125;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li>
</ol></div>
                </p>
            </div>


        </p>
    </div>

    <!-- design ? -->
    <div data-role="collapsible">
        <h3>design overview</h3>
        <p>
            <div class="text"><ol><li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">Chris Fortier</div></li>
<li class="li1"><div class="de1">cs50 - Final Project</div></li>
<li class="li1"><div class="de1">Design Document</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">I created this project to create a transit routing application. The site is hosted on two Amazon EC2 servers, one as a web server and the other as a database server. The site is located at http://54.235.245.148/web_server/html/main.php. PHP is the primary programming language used, though there is code in Python and javascript also. As I was preparing for the CS50 Fair I realized that I was really taxing the database server since I was manipulating the data from the web server. To improve performatnce I created a duplicate database on the same machine as the web server and rely on that for all of the database queries. This significantly improved performance. I also created a redirect page at http://54.235.245.148 to save a few extra key strokes :<span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">Servers:</div></li>
<li class="li1"><div class="de1">I had submitted the project with two servers, one for the database and one for the web server. I have since consolidated them to one machine. I used Amazon EC2 as a host and started with a Amazon Linux image. I had to install quite a few programs to get everything to work. For the sake of discussion I installed: mongoDB, apache, php, php-developer, python, gcc, make, gcc, mongo drivers for both php and python, and a few other random utilities.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">Database Server:</div></li>
<li class="li1"><div class="de1">I decided on using mongoDB as the database. I had been interested in using a NoSQL database and came across several good articles on using mongo for geospatial databases. </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">I wrote the following for handling everything on the database/raw data side of the operation. They all live under the 'db_server' directory:</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">gtfs_loader directory:</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; load_file.py - Python is my 'go-to language' whenever I need to work with a filesystem and manipulate files. This program prompts for a directory name which houses the GTFS txt files for a given agency. One element missing from the Google GTFS specification is a unique agency key amongst various agencies. To work with multiple agencies within the same database, this is agency key is necassary. Therefore I desginate this directory name to also serve as the agency key. This file parses every txt file within in the directory and using the file name and directory name, loads the data in to the appropriate database and collection <span class="br0">&#40;</span>file name/agency<span class="br0">&#41;</span>.</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">cli directory:</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; mongo_script.js - One downside of writing a dynamic file loader is that it doesn't distinguish datatypes and loads everything as a string. This file is used to update all of the individual field datatypes to their appropriate types. Mongo is designed to parse javascript files directly as if the commands were typed in its shell. This script also ensures indexing on stop locations, which is necassary for geospatial lookup performance. This dataset contains service exceptions due to Christmas which would result in duplicate data. I sipmly remove them from the database after everything is loaded.</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; route.php - This is the core algorithm that runs the site. I left a copy in this directory with several of the 'print' commands active so that I can debug the actual algorithm and isolate it from the web infrastructure.</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; transit_node.php - Needed for route.php to work. Details are below....</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">Web Server:</div></li>
<li class="li1"><div class="de1">I based the front end on the infrastrucure used for pset <span class="nu0">7</span>, so it should look pretty familiar.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">html directory:</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; main.php - The main <span class="br0">&#40;</span>only<span class="br0">&#41;</span> page that the end user would access. This is the controller for the site.</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; getMap.php and jquery_mobile_test.php are some of the test files I used to figure things out.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">templates directory:</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; main_form.php - This is the page rendered from main.php. This is the user interface and includes selection buttons for the origin and destination. The choices are dynamically generated from all available stops in the database when the page is rendered. It includes buttons for the user to enter a starting time. Finally, a Google map is displayed. This attempts to use the geolocation service of the device, and if a location is available, it will center the map on the users current location. Otherwise it will center the map on a stop in Newark. </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; main_route.php - This is displayed after a route is found. It contains a collapsible list of stops. The header element is the stop name and the details of the stop are hidden <span class="br0">&#40;</span>until clicked<span class="br0">&#41;</span> elements. &nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">includes directory:</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; all of the 'includes' from pset <span class="nu0">7</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; mongo_functions.php - Returns all of the stops to populate the stop selectors.</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; transit_node.php - My implementation of a linked list <span class="br0">&#40;</span>discussed in detail below<span class="br0">&#41;</span>.</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; route.php - This is the workhorse of the entire project and took the bulk of my time. This handles everything necessary to work with the transit data and build routings.</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; </div></li>
<li class="li1"><div class="de1">Those are the details of individual files and overall structure of the site. The core of the project is 'how to get from station A to station B', which is a complex problem which I attempt to tackle with this project. There are several commonly used algorithms for finding optimal routes in a <span class="nu0">2</span>-d grid <span class="br0">&#40;</span>Djikstra, A*, etc<span class="br0">&#41;</span>. However there are not many algorithms that specifically deal with the complexities of finding an optimal route within a transit system. I primarily studied the A* algorithm and implemented many of the facets in my project.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">To help solve this problem I created my own implementation of a double-linked list. The list is simply a 'train trip' and each node contains details of each stop as well as the details of that specific trip. An important factor in determining an optimal route is the distance to the destination, which is calculated for each node. Mongo includes many useful geospatial features, but lacks a function to directly calculate the distance between two locations. However it does have a function that will return a list of locations NEAR a given location, along with the distance. To calculate the distance between each node and the destination, I wrote a function that will query the 'stops' collection for all locations NEAR the origin station, but filter the result with the destination station, thus retrieving the exact distance between two stations. </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">All of this is simply prep work to figure out an actual route. This ended up being an extremely complex problem to tackle <span class="br0">&#40;</span>which is probably why it is famously missing from Apple Maps<span class="br0">&#41;</span> and took up an enormous amount of time. Due to performance constraints my implementation may not always return a route, even if there is one available. </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">Here are the steps of my implementation to determine a route:</div></li>
<li class="li1"><div class="de1"><span class="nu0">1</span><span class="br0">&#41;</span> Query for the next <span class="nu0">35</span> trains stopping within a close geographical proximity of a station*. This is done from the 'stop_times' data but includes trains going in either direction as well as trains terminating at that stop. I tried decreasing and increasing that number and that is the most optimal. At a busy station like Secaucus Junction or New York Penn, <span class="nu0">35</span> trains will only allow you to look at the next half hour or so, but a distant station might not have <span class="nu0">35</span> trains in a day. &nbsp;*This function uses the geographical coordinates of the selected origin. In this example, Secaucus Junction is listed as two distinct station stops because it has trains arriving on two different levels. Simply filtering by station id would exclude all of the necassary transfers here. This also allows for cross-line transfers <span class="br0">&#40;</span>like commuter rail to light rail<span class="br0">&#41;</span> at the same station.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="nu0">2</span><span class="br0">&#41;</span> For each train <span class="br0">&#40;</span>all <span class="nu0">35</span><span class="br0">&#41;</span> create a linked list of every stop remaining on that trip. This includes calculating the distance to the destination for each stop, which is used as an 'hCost'.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="nu0">3</span><span class="br0">&#41;</span> Add each list to an array <span class="br0">&#40;</span>open_list<span class="br0">&#41;</span>.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="nu0">4</span><span class="br0">&#41;</span> If this stop is the last stop, remove from list.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="nu0">5</span><span class="br0">&#41;</span> Looking at the 'cost' <span class="br0">&#40;</span>distance<span class="br0">&#41;</span> of the NEXT STOP in the list to the DESTINATION, sort the list. This uses a custom php 'usort' function I wrote. I wrote it to sort the list 'backwards' so that I could easily use the 'pop' function on the 'cheapest' trip.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="nu0">6</span><span class="br0">&#41;</span> Check each list for the destination - if found, return the list.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="nu0">7</span><span class="br0">&#41;</span> Otherwise, we store the current 'cost' to the destination. At this point I recursively check each stop from the list IF it's 'cost' is less than our known 'cost' </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="nu0">8</span><span class="br0">&#41;</span> If a trip is not found, discard that list and move to the next one. </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1"><span class="nu0">9</span><span class="br0">&#41;</span> Repeat until found, or return false if not found.</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">As you can imagine, recursively checking every single trip from every single station can very quickly eat up resources. I use the <span class="nu0">35</span> train limit and ost to try and keep it managable and optimized. This works well for more suburban areas. However when we get to urban areas with many stops close together, that are served by multiple lines, this algorithm will sometimes skip over routes and choose routes that will never reach the destination. In this case, NJ Transit combines commuter rail and light rail systems in one data feed. </div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
</ol></div>


        </p>
    </div>
    
    <!-- main -->
    <a href="main.php" data-role="button">Home</a>

</div><!-- /content --

</div><!-- /page -->

</form>
</body>
</html>
