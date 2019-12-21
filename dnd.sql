CREATE DATABASE dnd;
USE dnd;

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `damage` int(11) DEFAULT NULL,
  `dice` int(11) DEFAULT NULL,
  `nodice` int(11) DEFAULT NULL,
  `ranger` varchar(80) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `dmgtype` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `cost` varchar(100) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `items` (`id`, `name`, `damage`, `dice`, `nodice`, `ranger`, `description`, `dmgtype`, `material`, `cost`, `weight`) VALUES
(1, 'mace', 1, 6, 2, '50ft', 'big mace thingy', 'silver', 'silver', '50coins', '50kilos');

INSERT INTO `items` (`id`, `name`, `damage`, `dice`, `nodice`, `ranger`, `description`, `dmgtype`, `material`, `cost`, `weight`) VALUES
(2, 'sword', 1, 4, 2, '2ft', 'sword,very deadly', 'none', 'none', '50coins', '5kilos');

INSERT INTO `items` (`id`, `name`, `damage`, `dice`, `nodice`, `ranger`, `description`, `dmgtype`, `material`, `cost`, `weight`) VALUES
(3, 'bow', 1, 8, 2, '50ft', 'Shoots far', 'none', 'none', '50coins', '45kilos');

INSERT INTO `items` (`id`, `name`, `damage`, `dice`, `nodice`, `ranger`, `description`, `dmgtype`, `material`, `cost`, `weight`) VALUES
(4, 'machette', 4, 6, 2, '6ft', 'kitchen utility', 'none', 'none', '50coins', '12kilos');

INSERT INTO `items` (`id`, `name`, `damage`, `dice`, `nodice`, `ranger`, `description`, `dmgtype`, `material`, `cost`, `weight`) VALUES
(5, 'shuriken', 1, 4, 5, '10ft', 'Ninja stars', 'none', 'none', '50coins', '20kilos');



CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `classs` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `background` varchar(40) DEFAULT NULL,
  `charname` varchar(100) DEFAULT NULL,
  `race` varchar(100) DEFAULT NULL,
  `alignment` varchar(100) DEFAULT NULL,
  `stre` varchar(50) DEFAULT NULL,
  `dex` varchar(50) DEFAULT NULL,
  `const` varchar(50) DEFAULT NULL,
  `inte` varchar(50) DEFAULT NULL,
  `wisd` varchar(50) DEFAULT NULL,
  `chari` varchar(50) DEFAULT NULL,
  `strem` varchar(50) DEFAULT NULL,
  `dexm` varchar(50) DEFAULT NULL,
  `constm` varchar(50) DEFAULT NULL,
  `intem` varchar(50) DEFAULT NULL,
  `wisdm` varchar(50) DEFAULT NULL,
  `charim` varchar(50) DEFAULT NULL,
  `stres` varchar(50) DEFAULT NULL,
  `dexs` varchar(50) DEFAULT NULL,
  `consts` varchar(50) DEFAULT NULL,
  `intes` varchar(50) DEFAULT NULL,
  `wisds` varchar(50) DEFAULT NULL,
  `charis` varchar(50) DEFAULT NULL,
  `inspiration` varchar(50) DEFAULT NULL,
  `proficiency` varchar(50) DEFAULT NULL,
  `acrob` varchar(50) DEFAULT NULL,
  `anima` varchar(50) DEFAULT NULL,
  `arcan` varchar(50) DEFAULT NULL,
  `athlet` varchar(50) DEFAULT NULL,
  `decep` varchar(50) DEFAULT NULL,
  `histo` varchar(50) DEFAULT NULL,
  `insig` varchar(50) DEFAULT NULL,
  `intimi` varchar(50) DEFAULT NULL,
  `inve` varchar(50) DEFAULT NULL,
  `medi` varchar(50) DEFAULT NULL,
  `natu` varchar(50) DEFAULT NULL,
  `perce` varchar(50) DEFAULT NULL,
  `perf` varchar(50) DEFAULT NULL,
  `persu` varchar(50) DEFAULT NULL,
  `relig` varchar(50) DEFAULT NULL,
  `sleig` varchar(50) DEFAULT NULL,
  `stea` varchar(50) DEFAULT NULL,
  `survi` varchar(50) DEFAULT NULL,
  `passwis` varchar(50) DEFAULT NULL,
  `armor` varchar(50) DEFAULT NULL,
  `init` varchar(50) DEFAULT NULL,
  `speed` varchar(50) DEFAULT NULL,
  `maxhit` varchar(50) DEFAULT NULL,
  `hit` varchar(50) DEFAULT NULL,
  `temphit` varchar(50) DEFAULT NULL,
  `savsuc` varchar(50) DEFAULT NULL,
  `savfail` varchar(50) DEFAULT NULL,
  `hitdice` varchar(50) DEFAULT NULL,
  `thitdice` varchar(50) DEFAULT NULL,
  `proflang` varchar(500) DEFAULT NULL,
  `personal` varchar(500) DEFAULT NULL,
  `ideal` varchar(500) DEFAULT NULL,
  `bond` varchar(500) DEFAULT NULL,
  `flaws` varchar(500) DEFAULT NULL,
  `featstrait` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `players` (`id`, `name`, `classs`, `level`, `experience`, `background`, `charname`, `race`, `alignment`, `stre`, `dex`, `const`, `inte`, `wisd`, `chari`, `strem`, `dexm`, `constm`, `intem`, `wisdm`, `charim`, `stres`, `dexs`, `consts`, `intes`, `wisds`, `charis`, `inspiration`, `proficiency`, `acrob`, `anima`, `arcan`, `athlet`, `decep`, `histo`, `insig`, `intimi`, `inve`, `medi`, `natu`, `perce`, `perf`, `persu`, `relig`, `sleig`, `stea`, `survi`, `passwis`, `armor`, `init`, `speed`, `maxhit`, `hit`, `temphit`, `savsuc`, `savfail`, `hitdice`, `thitdice`, `proflang`, `personal`, `ideal`, `bond`, `flaws`, `featstrait`) VALUES
(1, 'David', 'Archerboi', 3, 0, '', 'Davidus', 'elfoid', '', '15', '20', '15', '12', '16', '10', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '2', '1', '', '', '', '', '', '', '', '');



CREATE TABLE `playitems` (
  `pid` int(11) DEFAULT NULL,
  `iid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `playitems` (`pid`, `iid`) VALUES
(1, 1),
(1, 1);




CREATE TABLE `playspells` (
  `pid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `spells` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `levell` int(11) DEFAULT NULL,
  `castingtime` varchar(100) DEFAULT NULL,
  `spellrange` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `dice` int(11) DEFAULT NULL,
  `nodice` int(11) DEFAULT NULL,
  `concentration` varchar(100) DEFAULT NULL,
  `ritual` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `higher_level` varchar(1000) DEFAULT NULL,
  `material` varchar(1000) DEFAULT NULL,
  `school` varchar(100) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `somatic` varchar(100) DEFAULT NULL,
  `verbal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `spells` (`id`, `name`, `levell`, `castingtime`, `spellrange`, `duration`, `dice`, `nodice`, `concentration`, `ritual`, `description`, `higher_level`, `material`, `school`, `source`, `somatic`, `verbal`) VALUES
(1, 'Fire', 2, '5 turns', '50ft ', '5 turns', 6, 2, 'yes', 'yes', 'Fire missile that burns', 'none', 'none', 'none', 'here', 'none', 'none');
INSERT INTO `spells` (`id`, `name`, `levell`, `castingtime`, `spellrange`, `duration`, `dice`, `nodice`, `concentration`, `ritual`, `description`, `higher_level`, `material`, `school`, `source`, `somatic`, `verbal`) VALUES
(2, 'Thunderwave', 10, '5 turns', '50ft ', '5 turns', 6, 2, 'yes', 'yes', 'Damages and knocks back', 'none', 'none', 'none', 'here', 'none', 'none');
INSERT INTO `spells` (`id`, `name`, `levell`, `castingtime`, `spellrange`, `duration`, `dice`, `nodice`, `concentration`, `ritual`, `description`, `higher_level`, `material`, `school`, `source`, `somatic`, `verbal`) VALUES
(3, 'Charm', 5, '5 turns', '50ft ', '5 turns', 6, 2, 'yes', 'yes', 'Charms a person', 'none', 'none', 'none', 'here', 'none', 'none');
INSERT INTO `spells` (`id`, `name`, `levell`, `castingtime`, `spellrange`, `duration`, `dice`, `nodice`, `concentration`, `ritual`, `description`, `higher_level`, `material`, `school`, `source`, `somatic`, `verbal`) VALUES
(4, 'Magic Missile', 3, '5 turns', '50ft ', '5 turns', 6, 2, 'yes', 'yes', 'Shoot an accurate missile', 'none', 'none', 'none', 'here', 'none', 'none');



ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `playitems`
  ADD KEY `pid` (`pid`),
  ADD KEY `iid` (`iid`);

ALTER TABLE `playspells`
  ADD KEY `pid` (`pid`),
  ADD KEY `sid` (`sid`);

ALTER TABLE `spells`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `spells`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `playitems`
  ADD CONSTRAINT `playitems_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `players` (`id`),
  ADD CONSTRAINT `playitems_ibfk_2` FOREIGN KEY (`iid`) REFERENCES `items` (`id`);

ALTER TABLE `playspells`
  ADD CONSTRAINT `playspells_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `players` (`id`),
  ADD CONSTRAINT `playspells_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `spells` (`id`);
COMMIT;

