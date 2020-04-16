<?php 

function setActive($Routename){
	return request()->routeIs($Routename) ? 'active' : '';
}
