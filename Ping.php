<?php
//Note: Because it is based on Korea, errors can occur outside of Korea.

/**
 * @name Ping
 * @main Ping\Ping
 * @author 플그러
 * @api 1.0.0
 * @version 1.0.0
*/

namespace Ping;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerMoveEvent;

class Ping extends PluginBase implements Listener {

public function onEnable (){
$this->getServer()->getPluginManager()->registerEvents ($this, $this);
}
public function onMove(PlayerMoveEvent $ev){
$p = $ev->getPlayer();
$ping = $p->getPing();
if ($ping > 120){//Write more than your country basic ping
$p->kick("Ping is too high and has been expelled from the server.\nPlease re-connect.",false);
}
}
}
