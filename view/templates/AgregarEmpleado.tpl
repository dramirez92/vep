{extends file="base.tpl"}

{block name="content"}
  

  <marquee  scrolldelay="1" scrollamount="2" direction="left" loop="infinite" onmouseout="this.start()" onmouseover="this.stop()"><a href="{$img}logo.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada" src="{$img}logo.jpg" height ="200px" width="200px"/></a><a href="{$img}ferrari.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="{$img}ferrari.jpg" height ="200px" width="200px" /></a></marquee>

{/block}



