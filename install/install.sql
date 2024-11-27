/**
 *  2Moons
 *   by Jan-Otto Kröpke 2009-2016
 *
 * For the full copyright and license information, please view the LICENSE
 *
 * @package 2Moons
 * @author Jan-Otto Kröpke <slaver7@gmail.com>
 * @copyright 2009 Lucky
 * @copyright 2016 Jan-Otto Kröpke <slaver7@gmail.com>
 * @licence MIT
 * @version 1.8.0
 * @link https://github.com/jkroepke/2Moons
 */


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE `%PREFIX%aks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `target` int(11) unsigned NOT NULL,
  `ankunft` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%alliance` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ally_name` varchar(50) DEFAULT '',
  `ally_tag` varchar(20) DEFAULT '',
  `ally_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `ally_register_time` int(11) NOT NULL DEFAULT '0',
  `ally_description` text,
  `ally_web` varchar(255) DEFAULT '',
  `ally_text` text,
  `ally_image` varchar(255) DEFAULT '',
  `ally_request` varchar(1000) DEFAULT NULL,
  `ally_request_notallow` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ally_request_min_points` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ally_owner_range` varchar(32) DEFAULT '',
  `ally_members` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ally_stats` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ally_diplo` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ally_universe` tinyint(3) unsigned NOT NULL,
  `ally_max_members` int(5) unsigned NOT NULL DEFAULT 20,
  `ally_events` varchar(55) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `ally_tag` (`ally_tag`),
  KEY `ally_name` (`ally_name`),
  KEY `ally_universe` (`ally_universe`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%alliance_ranks` (
  `rankID` int(11) NOT NULL AUTO_INCREMENT,
  `rankName` varchar(32) NOT NULL,
  `allianceID` int(10) unsigned NOT NULL,
  `MEMBERLIST` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ONLINESTATE` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `TRANSFER` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `SEEAPPLY` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `MANAGEAPPLY` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ROUNDMAIL` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ADMIN` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `KICK` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `DIPLOMATIC` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `RANKS` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `MANAGEUSERS` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `EVENTS` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rankID`),
  KEY `allianceID` (`allianceID`,`rankID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `%PREFIX%alliance_request` (
  `applyID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  `allianceID` int(10) unsigned NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`applyID`),
  KEY `allianceID` (`allianceID`,`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%banned` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `who` varchar(64) NOT NULL DEFAULT '',
  `theme` varchar(500) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  `longer` int(11) NOT NULL DEFAULT '0',
  `author` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `universe` tinyint(3) unsigned NOT NULL,
  KEY `ID` (`id`),
  KEY `universe` (`universe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%buddy` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sender` int(11) unsigned NOT NULL DEFAULT '0',
  `owner` int(11) unsigned NOT NULL DEFAULT '0',
  `universe` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `universe` (`universe`),
  KEY `sender` (`sender`,`owner`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%buddy_request` (
  `id` int(11) unsigned NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%chat_bans` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%chat_invitations` (
  `userID` int(11) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `userName` varchar(64) NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%chat_online` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  KEY `dateTime` (`dateTime`,`channel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%cronjobs` (
  `cronjobID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `min` varchar(32) NOT NULL,
  `hours` varchar(32) NOT NULL,
  `dom` varchar(32) NOT NULL,
  `month` varchar(32) NOT NULL,
  `dow` varchar(32) NOT NULL,
  `class` varchar(32) NOT NULL,
  `nextTime` int(11) DEFAULT NULL,
  `lock` varchar(32) DEFAULT NULL,
  UNIQUE KEY `cronjobID` (`cronjobID`),
  KEY `isActive` (`isActive`,`nextTime`,`lock`,`cronjobID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%cronjobs_log` (
 `cronjobId` int(11) unsigned NOT NULL,
 `executionTime` datetime NOT NULL,
 `lockToken` varchar(32) NOT NULL,
 KEY `cronjobId` (`cronjobId`,`executionTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `%PREFIX%diplo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `owner_1` int(11) unsigned NOT NULL,
  `owner_2` int(11) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `accept` tinyint(1) unsigned NOT NULL,
  `accept_text` varchar(255) NOT NULL,
  `universe` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `universe` (`universe`),
  KEY `owner_1` (`owner_1`,`owner_2`,`accept`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%fleets` (
  `fleet_id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `fleet_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_mission` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `fleet_amount` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fleet_array` text,
  `fleet_universe` tinyint(3) unsigned NOT NULL,
  `fleet_start_time` int(11) NOT NULL DEFAULT '0',
  `fleet_start_id` int(11) unsigned NOT NULL,
  `fleet_start_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_start_system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fleet_start_planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_start_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fleet_end_time` int(11) NOT NULL DEFAULT '0',
  `fleet_end_stay` int(11) NOT NULL DEFAULT '0',
  `fleet_end_id` int(11) unsigned NOT NULL,
  `fleet_end_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_end_system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fleet_end_planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_end_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fleet_target_obj` smallint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_metal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_crystal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_deuterium` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_darkmatter` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_target_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_group` int(10) unsigned NOT NULL DEFAULT '0',
  `fleet_mess` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `start_time` int(11) DEFAULT NULL,
  `fleet_busy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hasCanceled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fleet_id`),
  KEY `fleet_target_owner` (`fleet_target_owner`,`fleet_mission`),
  KEY `fleet_owner` (`fleet_owner`,`fleet_mission`),
  KEY `fleet_group` (`fleet_group`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%fleet_event` (
  `fleetID` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `lock` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`fleetID`),
  KEY `lock` (`lock`,`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mode` tinyint(3) unsigned NOT NULL,
  `admin` int(11) unsigned NOT NULL,
  `target` int(11) NOT NULL,
  `time` int(11) unsigned NOT NULL,
  `data` text NOT NULL,
  `universe` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mode` (`mode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%log_fleets` (
  `fleet_id` bigint(11) unsigned NOT NULL,
  `fleet_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_mission` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `fleet_amount` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fleet_array` text,
  `fleet_universe` tinyint(3) unsigned NOT NULL,
  `fleet_start_time` int(11) NOT NULL DEFAULT '0',
  `fleet_start_id` int(11) unsigned NOT NULL,
  `fleet_start_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_start_system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fleet_start_planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_start_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fleet_end_time` int(11) NOT NULL DEFAULT '0',
  `fleet_end_stay` int(11) NOT NULL DEFAULT '0',
  `fleet_end_id` int(11) unsigned NOT NULL,
  `fleet_end_galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_end_system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fleet_end_planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_end_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fleet_target_obj` smallint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_metal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_crystal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_deuterium` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_resource_darkmatter` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_target_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_group` varchar(15) NOT NULL DEFAULT '0',
  `fleet_mess` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `start_time` int(11) DEFAULT NULL,
  `fleet_busy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fleet_state` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fleet_id`),
  KEY `BashRule` (`fleet_owner`,`fleet_end_id`,`fleet_start_time`,`fleet_mission`,`fleet_state`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%lostpassword` (
  `userID` int(10) unsigned NOT NULL,
  `key` varchar(32) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `hasChanged` tinyint(1) NOT NULL DEFAULT '0',
  `fromIP` varchar(40) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE KEY `userID` (`userID`,`key`,`time`,`hasChanged`),
  KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%messages` (
  `message_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `message_sender` int(11) unsigned NOT NULL DEFAULT '0',
  `message_time` int(11) NOT NULL DEFAULT '0',
  `message_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `message_from` varchar(128) DEFAULT NULL,
  `message_subject` varchar(255) DEFAULT NULL,
  `message_text` text,
  `message_unread` tinyint(4) NOT NULL DEFAULT '1',
  `message_universe` tinyint(3) unsigned NOT NULL,
  `message_deleted` int(11) unsigned NULL DEFAULT NULL,
  PRIMARY KEY (`message_id`),
  KEY `message_sender` (`message_sender`),
  KEY `message_deleted` (`message_deleted`),
  KEY `message_owner` (`message_owner`,`message_type`,`message_unread`,`message_deleted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%multi` (
  `multiID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`multiID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(64) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) unsigned DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `priority` tinyint(1) unsigned DEFAULT '1',
  `title` varchar(32) DEFAULT NULL,
  `text` text,
  `universe` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `universe` (`universe`),
  KEY `owner` (`owner`,`time`,`priority`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%planets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT 'Hauptplanet',
  `id_owner` int(11) unsigned DEFAULT NULL,
  `universe` tinyint(3) unsigned NOT NULL,
  `galaxy` tinyint(3) NOT NULL DEFAULT '0',
  `system` smallint(5) NOT NULL DEFAULT '0',
  `planet` tinyint(3) NOT NULL DEFAULT '0',
  `last_update` int(11) DEFAULT NULL,
  `planet_type` enum('1','3') NOT NULL DEFAULT '1',
  `destruyed` int(11) NOT NULL DEFAULT '0',
  `b_building` int(11) NOT NULL DEFAULT '0',
  `b_building_id` text,
  `b_hangar` int(11) NOT NULL DEFAULT '0',
  `b_hangar_id` text,
  `b_hangar_plus` int(11) NOT NULL DEFAULT '0',
  `image` varchar(32) NOT NULL DEFAULT 'normaltempplanet01',
  `diameter` int(11) unsigned NOT NULL DEFAULT '12800',
  `field_current` smallint(5) unsigned NOT NULL DEFAULT '0',
  `field_max` smallint(5) unsigned NOT NULL DEFAULT '163',
  `temp_min` int(3) NOT NULL DEFAULT '-17',
  `temp_max` int(3) NOT NULL DEFAULT '23',
  `eco_hash` varchar(32) NOT NULL DEFAULT '',
  `metal` double(50,6) unsigned NOT NULL DEFAULT '0.000000',
  `metal_perhour` double(50,6) NOT NULL DEFAULT '0.000000',
  `metal_max` double(50,0) unsigned DEFAULT '100000',
  `crystal` double(50,6) unsigned NOT NULL DEFAULT '0.000000',
  `crystal_perhour` double(50,6) NOT NULL DEFAULT '0.000000',
  `crystal_max` double(50,0) unsigned DEFAULT '100000',
  `deuterium` double(50,6) unsigned NOT NULL DEFAULT '0.000000',
  `deuterium_perhour` double(50,6) NOT NULL DEFAULT '0.000000',
  `deuterium_max` double(50,0) unsigned DEFAULT '100000',
  `energy_used` double(50,0) NOT NULL DEFAULT '0',
  `energy` double(50,0) unsigned NOT NULL DEFAULT '0',
  `metal_mine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `crystal_mine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `deuterium_sintetizer` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `solar_plant` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `fusion_plant` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `robot_factory` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `nano_factory` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hangar` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `metal_store` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `crystal_store` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `deuterium_store` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `laboratory` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `terraformer` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `university` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ally_deposit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `silo` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `mondbasis` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `phalanx` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `sprungtor` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `small_ship_cargo` bigint(20) unsigned NOT NULL DEFAULT '0',
  `big_ship_cargo` bigint(20) unsigned NOT NULL DEFAULT '0',
  `light_hunter` bigint(20) unsigned NOT NULL DEFAULT '0',
  `heavy_hunter` bigint(20) unsigned NOT NULL DEFAULT '0',
  `crusher` bigint(20) unsigned NOT NULL DEFAULT '0',
  `battle_ship` bigint(20) unsigned NOT NULL DEFAULT '0',
  `colonizer` bigint(20) unsigned NOT NULL DEFAULT '0',
  `recycler` bigint(20) unsigned NOT NULL DEFAULT '0',
  `spy_sonde` bigint(20) unsigned NOT NULL DEFAULT '0',
  `bomber_ship` bigint(20) unsigned NOT NULL DEFAULT '0',
  `solar_satelit` bigint(20) unsigned NOT NULL DEFAULT '0',
  `destructor` bigint(20) unsigned NOT NULL DEFAULT '0',
  `dearth_star` bigint(20) unsigned NOT NULL DEFAULT '0',
  `battleship` bigint(20) unsigned NOT NULL DEFAULT '0',
  `lune_noir` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ev_transporter` bigint(20) unsigned NOT NULL DEFAULT '0',
  `star_crasher` bigint(20) unsigned NOT NULL DEFAULT '0',
  `giga_recykler` bigint(20) unsigned NOT NULL DEFAULT '0',
  `dm_ship` bigint(20) NOT NULL DEFAULT '0',
  `orbital_station` bigint(20) unsigned NOT NULL DEFAULT '0',
  `misil_launcher` bigint(20) unsigned NOT NULL DEFAULT '0',
  `small_laser` bigint(20) unsigned NOT NULL DEFAULT '0',
  `big_laser` bigint(20) unsigned NOT NULL DEFAULT '0',
  `gauss_canyon` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ionic_canyon` bigint(20) unsigned NOT NULL DEFAULT '0',
  `buster_canyon` bigint(20) unsigned NOT NULL DEFAULT '0',
  `small_protection_shield` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `planet_protector` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `big_protection_shield` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `graviton_canyon` bigint(20) unsigned NOT NULL DEFAULT '0',
  `interceptor_misil` bigint(20) unsigned NOT NULL DEFAULT '0',
  `interplanetary_misil` bigint(20) unsigned NOT NULL DEFAULT '0',
  `metal_mine_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `crystal_mine_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `deuterium_sintetizer_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `solar_plant_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `fusion_plant_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `solar_satelit_porcent` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '10',
  `last_jump_time` int(11) NOT NULL DEFAULT '0',
  `der_metal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `der_crystal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `id_luna` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_luna` (`id_luna`),
  KEY `id_owner` (`id_owner`),
  KEY `destruyed` (`destruyed`),
  KEY `universe` (`universe`,`galaxy`,`system`,`planet`,`planet_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%raports` (
  `rid` varchar(32) NOT NULL,
  `raport` text NOT NULL,
  `time` int(11) NOT NULL,
  `attacker` varchar(255) NOT NULL DEFAULT '',
  `defender` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `time` (`time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%records` (
  `userID` int(10) unsigned NOT NULL,
  `elementID` smallint(5) unsigned NOT NULL,
  `level` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%session` (
  `sessionID` varchar(32) NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  `userIP` varchar(40) NOT NULL,
  `lastonline` int(11) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `sessionID` (`sessionID`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%shortcuts` (
  `shortcutID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ownerID` int(10) unsigned NOT NULL,
  `name` varchar(32) NOT NULL,
  `galaxy` tinyint(3) unsigned NOT NULL,
  `system` smallint(5) unsigned NOT NULL,
  `planet` tinyint(3) unsigned NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`shortcutID`),
  KEY `ownerID` (`ownerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%statpoints` (
  `id_owner` int(11) unsigned NOT NULL DEFAULT '0',
  `id_ally` int(11) unsigned NOT NULL DEFAULT '0',
  `stat_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `universe` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `tech_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `tech_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `tech_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `tech_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `build_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `build_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `build_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `build_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `defs_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `defs_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `defs_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `defs_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fleet_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `fleet_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `fleet_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `total_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `total_old_rank` int(11) unsigned NOT NULL DEFAULT '0',
  `total_points` double(50,0) unsigned NOT NULL DEFAULT '0',
  `total_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  KEY `id_owner` (`id_owner`),
  KEY `universe` (`universe`),
  KEY `stat_type` (`stat_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%system` (
  `dbVersion` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%ticket` (
  `ticketID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `universe` tinyint(3) unsigned NOT NULL,
  `ownerID` int(10) unsigned NOT NULL,
  `categoryID` tinyint(1) unsigned NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ticketID`),
  KEY `ownerID` (`ownerID`),
  KEY `universe` (`universe`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%ticket_answer` (
  `answerID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ownerID` int(10) unsigned NOT NULL,
  `ownerName` varchar(32) NOT NULL,
  `ticketID` int(10) unsigned NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  PRIMARY KEY (`answerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%ticket_category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%topkb` (
  `rid` varchar(32) NOT NULL,
  `units` double(50,0) unsigned NOT NULL,
  `result` varchar(1) NOT NULL,
  `time` int(11) NOT NULL,
  `universe` tinyint(3) unsigned NOT NULL,
  KEY `time` (`universe`,`rid`,`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `email_2` varchar(64) NOT NULL DEFAULT '',
  `lang` varchar(2) NOT NULL DEFAULT 'de',
  `authattack` tinyint(1) NOT NULL DEFAULT '0',
  `authlevel` tinyint(1) NOT NULL DEFAULT '0',
  `rights` text,
  `id_planet` int(11) unsigned NOT NULL DEFAULT '0',
  `universe` tinyint(3) unsigned NOT NULL,
  `galaxy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `system` smallint(5) unsigned NOT NULL DEFAULT '0',
  `planet` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `darkmatter` double(50,0) NOT NULL DEFAULT '0',
  `user_lastip` varchar(40) NOT NULL DEFAULT '',
  `ip_at_reg` varchar(40) NOT NULL DEFAULT '',
  `register_time` int(11) NOT NULL DEFAULT '0',
  `onlinetime` int(11) NOT NULL DEFAULT '0',
  `dpath` varchar(20) NOT NULL DEFAULT 'gow',
  `timezone` varchar(32) NOT NULL DEFAULT 'Europe/London',
  `planet_sort` tinyint(1) NOT NULL DEFAULT '0',
  `planet_sort_order` tinyint(1) NOT NULL DEFAULT '0',
  `spio_anz` int(10) unsigned NOT NULL DEFAULT '1',
  `settings_fleetactions` tinyint(2) unsigned NOT NULL DEFAULT '3',
  `settings_esp` tinyint(1) NOT NULL DEFAULT '1',
  `settings_wri` tinyint(1) NOT NULL DEFAULT '1',
  `settings_bud` tinyint(1) NOT NULL DEFAULT '1',
  `settings_mis` tinyint(1) NOT NULL DEFAULT '1',
  `settings_blockPM` tinyint(1) NOT NULL DEFAULT '0',
  `urlaubs_modus` tinyint(1) NOT NULL DEFAULT '0',
  `urlaubs_until` int(11) NOT NULL DEFAULT '0',
  `db_deaktjava` int(11) NOT NULL DEFAULT '0',
  `b_tech_planet` int(11) unsigned NOT NULL DEFAULT '0',
  `b_tech` int(11) unsigned NOT NULL DEFAULT '0',
  `b_tech_id` smallint(2) unsigned NOT NULL DEFAULT '0',
  `b_tech_queue` text,
  `spy_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `computer_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `military_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `defence_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `shield_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `energy_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hyperspace_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `combustion_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `impulse_motor_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hyperspace_motor_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `laser_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ionic_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `buster_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `intergalactic_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `expedition_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `metal_proc_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `crystal_proc_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `deuterium_proc_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `graviton_tech` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ally_id` int(11) unsigned NOT NULL DEFAULT '0',
  `ally_register_time` int(11) NOT NULL DEFAULT '0',
  `ally_rank_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `rpg_geologue` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `rpg_amiral` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_ingenieur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_technocrate` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_espion` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_constructeur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_scientifique` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_commandant` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_stockeur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_defenseur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_destructeur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_general` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_bunker` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_raideur` tinyint(2) NOT NULL DEFAULT '0',
  `rpg_empereur` tinyint(22) NOT NULL DEFAULT '0',
  `bana` tinyint(1) NOT NULL DEFAULT '0',
  `banaday` int(11) NOT NULL DEFAULT '0',
  `hof` tinyint(1) NOT NULL DEFAULT '1',
  `spyMessagesMode` tinyint(1) NOT NULL DEFAULT '0',
  `wons` int(11) unsigned NOT NULL DEFAULT '0',
  `loos` int(11) unsigned NOT NULL DEFAULT '0',
  `draws` int(11) unsigned NOT NULL DEFAULT '0',
  `kbmetal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `kbcrystal` double(50,0) unsigned NOT NULL DEFAULT '0',
  `lostunits` double(50,0) unsigned NOT NULL DEFAULT '0',
  `desunits` double(50,0) unsigned NOT NULL DEFAULT '0',
  `uctime` int(11) NOT NULL DEFAULT '0',
  `setmail` int(11) NOT NULL DEFAULT '0',
  `dm_attack` int(11) NOT NULL DEFAULT '0',
  `dm_defensive` int(11) NOT NULL DEFAULT '0',
  `dm_buildtime` int(11) NOT NULL DEFAULT '0',
  `dm_researchtime` int(11) NOT NULL DEFAULT '0',
  `dm_resource` int(11) NOT NULL DEFAULT '0',
  `dm_energie` int(11) NOT NULL DEFAULT '0',
  `dm_fleettime` int(11) NOT NULL DEFAULT '0',
  `ref_id` int(11) NOT NULL DEFAULT '0',
  `ref_bonus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `inactive_mail` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `authlevel` (`authlevel`),
  KEY `ref_bonus` (`ref_bonus`),
  KEY `universe` (`universe`,`username`,`password`,`onlinetime`,`authlevel`),
  KEY `ally_id` (`ally_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%users_to_acs` (
  `userID` int(10) unsigned NOT NULL,
  `acsID` int(10) unsigned NOT NULL,
  KEY `userID` (`userID`),
  KEY `acsID` (`acsID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%users_to_extauth` (
  `id` int(11) NOT NULL,
  `account` varchar(64) NOT NULL,
  `mode` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `account` (`account`,`mode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%users_to_topkb` (
  `rid` varchar(32) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `role` tinyint(1) NOT NULL,
  KEY `rid` (`rid`,`role`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `%PREFIX%users_valid` (
 `validationID` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `userName` varchar(64) NOT NULL,
 `validationKey` varchar(32) NOT NULL,
 `password` varchar(60) NOT NULL,
 `email` varchar(64) NOT NULL,
 `date` int(11) NOT NULL,
 `ip` varchar(40) NOT NULL,
 `language` varchar(3) NOT NULL,
 `universe` tinyint(3) unsigned NOT NULL,
 `referralID` int(11) DEFAULT NULL,
 `externalAuthUID` varchar(128) DEFAULT NULL,
 `externalAuthMethod` varchar(32) DEFAULT NULL,
 PRIMARY KEY (`validationID`,`validationKey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `%PREFIX%cronjobs` (`cronjobID`, `name`, `isActive`, `min`, `hours`, `dom`, `month`, `dow`, `class`, `nextTime`, `lock`) VALUES
(NULL, 'referral', 1, '0,30', '*', '*', '*', '*', 'ReferralCronjob', 0, NULL),
(NULL, 'statistic', 1, '0,30', '*', '*', '*', '*', 'StatisticCronjob', 0, NULL),
(NULL, 'daily', 1, '25', '2', '*', '*', '*', 'DailyCronjob', 0, NULL),
(NULL, 'cleaner', 1, '45', '2', '*', '*', '6', 'CleanerCronjob', 0, NULL),
(NULL, 'inactive', 1, '30', '1', '*', '*', '0,3,6', 'InactiveMailCronjob', 0, NULL),
(NULL, 'teamspeak', 0, '*/3', '*', '*', '*', '*', 'TeamSpeakCronjob', 0, NULL),
(NULL, 'databasedump', 1, '30', '1', '*', '*', '1', 'DumpCronjob', 0, NULL),
(NULL, 'tracking', 1, FLOOR(RAND() * 60), FLOOR(RAND() * 24), '*', '*', '0', 'TrackingCronjob', 0, NULL);

INSERT INTO `%PREFIX%system` (`dbVersion`) VALUES
(%DB_VERSION%);

INSERT INTO `%PREFIX%ticket_category` (`categoryID`, `name`) VALUES
(1, 'Support');






/*
Navicat MariaDB Data Transfer

Source Server         : pkland
Source Server Version : 110102
Source Host           : www.pkland.lol:3306
Source Database       : pkland

Target Server Type    : MariaDB
Target Server Version : 110102
File Encoding         : 65001

Date: 2023-10-15 01:13:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for uni1_config
-- ----------------------------
DROP TABLE IF EXISTS `uni1_config`;
CREATE TABLE `uni1_config` (
  `uni` int(11) NOT NULL AUTO_INCREMENT,
  `VERSION` varchar(8) NOT NULL,
  `sql_revision` int(11) NOT NULL DEFAULT 0,
  `users_amount` int(11) unsigned NOT NULL DEFAULT 1,
  `game_speed` bigint(20) unsigned NOT NULL DEFAULT 2500,
  `fleet_speed` bigint(20) unsigned NOT NULL DEFAULT 2500,
  `resource_multiplier` smallint(5) unsigned NOT NULL DEFAULT 1,
  `storage_multiplier` smallint(5) unsigned NOT NULL DEFAULT 1,
  `message_delete_behavior` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `message_delete_days` tinyint(3) unsigned NOT NULL DEFAULT 7,
  `halt_speed` smallint(5) unsigned NOT NULL DEFAULT 1,
  `Fleet_Cdr` tinyint(3) unsigned NOT NULL DEFAULT 30,
  `Defs_Cdr` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `initial_fields` smallint(10) unsigned NOT NULL DEFAULT 163,
  `uni_name` varchar(30) NOT NULL,
  `game_name` varchar(30) NOT NULL,
  `game_disable` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `close_reason` text NOT NULL,
  `metal_basic_income` int(11) NOT NULL DEFAULT 20,
  `crystal_basic_income` int(11) NOT NULL DEFAULT 10,
  `deuterium_basic_income` int(11) NOT NULL DEFAULT 0,
  `energy_basic_income` int(11) NOT NULL DEFAULT 0,
  `LastSettedGalaxyPos` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `LastSettedSystemPos` smallint(5) unsigned NOT NULL DEFAULT 1,
  `LastSettedPlanetPos` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `noobprotection` int(11) NOT NULL DEFAULT 0,
  `noobprotectiontime` int(11) NOT NULL DEFAULT 5000,
  `noobprotectionmulti` int(11) NOT NULL DEFAULT 5,
  `forum_url` varchar(128) NOT NULL DEFAULT 'http://2moons.cc',
  `adm_attack` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `debug` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `lang` varchar(2) NOT NULL DEFAULT '',
  `stat` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `stat_level` tinyint(3) unsigned NOT NULL DEFAULT 2,
  `stat_last_update` int(11) NOT NULL DEFAULT 0,
  `stat_settings` int(11) unsigned NOT NULL DEFAULT 1000,
  `stat_update_time` tinyint(3) unsigned NOT NULL DEFAULT 25,
  `stat_last_db_update` int(11) NOT NULL DEFAULT 0,
  `stats_fly_lock` int(11) NOT NULL DEFAULT 0,
  `cron_lock` int(11) NOT NULL DEFAULT 0,
  `ts_modon` tinyint(1) NOT NULL DEFAULT 0,
  `ts_server` varchar(64) NOT NULL DEFAULT '',
  `ts_tcpport` smallint(5) unsigned NOT NULL DEFAULT 0,
  `ts_udpport` smallint(5) unsigned NOT NULL DEFAULT 0,
  `ts_timeout` tinyint(1) NOT NULL DEFAULT 1,
  `ts_version` tinyint(1) NOT NULL DEFAULT 2,
  `ts_cron_last` int(11) NOT NULL DEFAULT 0,
  `ts_cron_interval` smallint(5) NOT NULL DEFAULT 5,
  `ts_login` varchar(32) NOT NULL DEFAULT '',
  `ts_password` varchar(32) NOT NULL DEFAULT '',
  `reg_closed` tinyint(1) NOT NULL DEFAULT 0,
  `OverviewNewsFrame` tinyint(1) NOT NULL DEFAULT 1,
  `OverviewNewsText` text NOT NULL,
  `capaktiv` tinyint(1) NOT NULL DEFAULT 0,
  `cappublic` varchar(42) NOT NULL DEFAULT '',
  `capprivate` varchar(42) NOT NULL DEFAULT '',
  `min_build_time` tinyint(2) NOT NULL DEFAULT 1,
  `mail_active` tinyint(1) NOT NULL DEFAULT 0,
  `mail_use` tinyint(1) NOT NULL DEFAULT 0,
  `smtp_host` varchar(64) NOT NULL DEFAULT '',
  `smtp_port` smallint(5) NOT NULL DEFAULT 0,
  `smtp_user` varchar(64) NOT NULL DEFAULT '',
  `smtp_pass` varchar(32) NOT NULL DEFAULT '',
  `smtp_ssl` enum('','ssl','tls') NOT NULL DEFAULT '',
  `smtp_sendmail` varchar(64) NOT NULL DEFAULT '',
  `smail_path` varchar(30) NOT NULL DEFAULT '/usr/sbin/sendmail',
  `user_valid` tinyint(1) NOT NULL DEFAULT 0,
  `fb_on` tinyint(1) NOT NULL DEFAULT 0,
  `fb_apikey` varchar(42) NOT NULL DEFAULT '',
  `fb_skey` varchar(42) NOT NULL DEFAULT '',
  `ga_active` varchar(42) NOT NULL DEFAULT '0',
  `ga_key` varchar(42) NOT NULL DEFAULT '',
  `moduls` varchar(100) NOT NULL DEFAULT '',
  `trade_allowed_ships` varchar(255) NOT NULL DEFAULT '202,401',
  `trade_charge` varchar(5) NOT NULL DEFAULT '30',
  `chat_closed` tinyint(1) NOT NULL DEFAULT 0,
  `chat_allowchan` tinyint(1) NOT NULL DEFAULT 1,
  `chat_allowmes` tinyint(1) NOT NULL DEFAULT 1,
  `chat_allowdelmes` tinyint(1) NOT NULL DEFAULT 1,
  `chat_logmessage` tinyint(1) NOT NULL DEFAULT 1,
  `chat_nickchange` tinyint(1) NOT NULL DEFAULT 1,
  `chat_botname` varchar(15) NOT NULL DEFAULT '2Moons',
  `chat_channelname` varchar(15) NOT NULL DEFAULT '2Moons',
  `chat_socket_active` tinyint(1) NOT NULL DEFAULT 0,
  `chat_socket_host` varchar(64) NOT NULL DEFAULT '',
  `chat_socket_ip` varchar(40) NOT NULL DEFAULT '',
  `chat_socket_port` smallint(5) NOT NULL DEFAULT 0,
  `chat_socket_chatid` tinyint(1) NOT NULL DEFAULT 1,
  `max_galaxy` int(10) unsigned NOT NULL DEFAULT 9,
  `max_system` int(10) unsigned NOT NULL DEFAULT 400,
  `max_planets` int(10) unsigned NOT NULL DEFAULT 15,
  `planet_factor` float(2,1) NOT NULL DEFAULT 1.0,
  `max_elements_build` tinyint(3) unsigned NOT NULL DEFAULT 5,
  `max_elements_tech` tinyint(3) unsigned NOT NULL DEFAULT 2,
  `max_elements_ships` tinyint(3) unsigned NOT NULL DEFAULT 10,
  `min_player_planets` tinyint(3) unsigned NOT NULL DEFAULT 9,
  `planets_tech` tinyint(4) NOT NULL DEFAULT 11,
  `planets_officier` tinyint(4) NOT NULL DEFAULT 5,
  `planets_per_tech` float(2,1) NOT NULL DEFAULT 0.5,
  `max_fleet_per_build` bigint(20) unsigned NOT NULL DEFAULT 1000000,
  `deuterium_cost_galaxy` int(11) unsigned NOT NULL DEFAULT 10,
  `max_dm_missions` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `max_overflow` float(2,1) NOT NULL DEFAULT 1.0,
  `moon_factor` float(2,1) NOT NULL DEFAULT 1.0,
  `moon_chance` tinyint(3) unsigned NOT NULL DEFAULT 20,
  `darkmatter_cost_trader` int(11) unsigned NOT NULL DEFAULT 750,
  `factor_university` tinyint(3) unsigned NOT NULL DEFAULT 8,
  `max_fleets_per_acs` tinyint(3) unsigned NOT NULL DEFAULT 16,
  `debris_moon` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `vmode_min_time` int(11) NOT NULL DEFAULT 259200,
  `gate_wait_time` int(11) NOT NULL DEFAULT 3600,
  `metal_start` int(11) unsigned NOT NULL DEFAULT 500,
  `crystal_start` int(11) unsigned NOT NULL DEFAULT 500,
  `deuterium_start` int(11) unsigned NOT NULL DEFAULT 0,
  `darkmatter_start` int(11) unsigned NOT NULL DEFAULT 0,
  `ttf_file` varchar(128) NOT NULL DEFAULT 'styles/resource/fonts/DroidSansMono.ttf',
  `ref_active` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `ref_bonus` int(11) unsigned NOT NULL DEFAULT 1000,
  `ref_minpoints` bigint(20) unsigned NOT NULL DEFAULT 2000,
  `ref_max_referals` tinyint(1) unsigned NOT NULL DEFAULT 5,
  `del_oldstuff` tinyint(3) unsigned NOT NULL DEFAULT 3,
  `del_user_manually` tinyint(3) unsigned NOT NULL DEFAULT 7,
  `del_user_automatic` tinyint(3) unsigned NOT NULL DEFAULT 30,
  `del_user_sendmail` tinyint(3) unsigned NOT NULL DEFAULT 21,
  `sendmail_inactive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `silo_factor` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `timezone` varchar(32) NOT NULL DEFAULT 'Europe/London',
  `dst` enum('0','1','2') NOT NULL DEFAULT '2',
  `energySpeed` smallint(6) NOT NULL DEFAULT 1,
  `disclamerAddress` text NOT NULL,
  `disclamerPhone` text NOT NULL,
  `disclamerMail` text NOT NULL,
  `disclamerNotice` text NOT NULL,
  `alliance_create_min_points` bigint(20) unsigned NOT NULL DEFAULT 0,
  `speed_up_seconds` int(9) DEFAULT 60,
  `energy_speed_produce` int(9) DEFAULT 1,
  `energy_speed_consume` int(9) DEFAULT 1,
  PRIMARY KEY (`uni`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- ----------------------------
-- Records of uni1_config
-- ----------------------------
INSERT INTO `uni1_config` VALUES ('1', '1.8.git', '0', '50', '12500', '1250000', '5', '5', '0', '7', '50', '0', '0', '60000', '地球', 'pkland', '1', '', '100', '100', '100', '0', '2', '7', '3', '0', '5000', '5', 'http://www.pkland.lol', '1', '0', 'cn', '0', '2', '0', '1000', '25', '0', '0', '0', '0', '', '0', '0', '1', '2', '0', '5', '', '', '0', '1', '欢迎来到疯狂大陆2.0', '0', '', '', '1', '1', '0', 'mail.privateemail.com', '465', 'admin@pkland.lol', 'pkland', 'ssl', 'admin@pkland.lol', '/usr/sbin/sendmail', '0', '0', '', '', '0', '', '1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;0;1;1;1;1;1;1;1;1;1;1;1;1;1;1', '202,203,204,205,206,207,208,209,210,212,213,214,215,216,217,218,219,220,401,402,403,404,405,406,407,408,409,410,411', '-1', '0', '1', '1', '1', '1', '1', '2Moons', '2Moons', '0', '', '', '0', '1', '6000', '9', '9', '1.0', '10', '10', '10', '9', '11', '5', '1.0', '1000000', '10', '1', '1.0', '0.0', '0', '0', '8', '16', '0', '259200', '3600', '50000', '50000', '50000', '20000', 'styles/resource/fonts/DroidSansMono.ttf', '0', '1000', '2000', '5', '3', '7', '30', '21', '0', '1', 'America/Adak', '0', '0', '', '', '', '', '0', '60', '4', '1');





/*
Navicat MariaDB Data Transfer

Source Server         : pkland
Source Server Version : 110102
Source Host           : www.pkland.lol:3306
Source Database       : pkland

Target Server Type    : MariaDB
Target Server Version : 110102
File Encoding         : 65001

Date: 2023-10-15 01:11:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for uni1_vars
-- ----------------------------
DROP TABLE IF EXISTS `uni1_vars`;
CREATE TABLE `uni1_vars` (
  `elementID` smallint(5) unsigned NOT NULL,
  `name` varchar(32) NOT NULL,
  `class` int(11) NOT NULL,
  `onPlanetType` set('1','3') NOT NULL,
  `onePerPlanet` tinyint(4) NOT NULL,
  `factor` float(4,2) NOT NULL,
  `maxLevel` int(11) DEFAULT NULL,
  `cost901` bigint(20) unsigned NOT NULL DEFAULT 0,
  `cost902` bigint(20) unsigned NOT NULL DEFAULT 0,
  `cost903` bigint(20) unsigned NOT NULL DEFAULT 0,
  `cost911` bigint(20) unsigned NOT NULL DEFAULT 0,
  `cost921` bigint(20) unsigned NOT NULL DEFAULT 0,
  `consumption1` int(11) unsigned DEFAULT NULL,
  `consumption2` int(11) unsigned DEFAULT NULL,
  `speedTech` int(11) unsigned DEFAULT NULL,
  `speed1` int(11) unsigned DEFAULT NULL,
  `speed2` int(11) unsigned DEFAULT NULL,
  `speed2Tech` int(10) unsigned DEFAULT NULL,
  `speed2onLevel` int(10) unsigned DEFAULT NULL,
  `speed3Tech` int(10) unsigned DEFAULT NULL,
  `speed3onLevel` int(10) unsigned DEFAULT NULL,
  `capacity` int(11) unsigned DEFAULT NULL,
  `attack` int(10) unsigned DEFAULT NULL,
  `defend` int(10) unsigned DEFAULT NULL,
  `timeBonus` int(11) unsigned DEFAULT NULL,
  `bonusAttack` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusDefensive` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusShield` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusBuildTime` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusResearchTime` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusShipTime` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusDefensiveTime` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusResource` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusEnergy` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusResourceStorage` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusShipStorage` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusFlyTime` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusFleetSlots` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusPlanets` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusSpyPower` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusExpedition` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusGateCoolTime` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusMoreFound` float(4,2) NOT NULL DEFAULT 0.00,
  `bonusAttackUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusDefensiveUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusShieldUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusBuildTimeUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusResearchTimeUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusShipTimeUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusDefensiveTimeUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusResourceUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusEnergyUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusResourceStorageUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusShipStorageUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusFlyTimeUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusFleetSlotsUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusPlanetsUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusSpyPowerUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusExpeditionUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusGateCoolTimeUnit` smallint(1) NOT NULL DEFAULT 0,
  `bonusMoreFoundUnit` smallint(1) NOT NULL DEFAULT 0,
  `speedFleetFactor` float(4,2) DEFAULT NULL,
  `production901` varchar(255) DEFAULT NULL,
  `production902` varchar(255) DEFAULT NULL,
  `production903` varchar(255) DEFAULT NULL,
  `production911` varchar(255) DEFAULT NULL,
  `production921` varchar(255) DEFAULT NULL,
  `storage901` varchar(255) DEFAULT NULL,
  `storage902` varchar(255) DEFAULT NULL,
  `storage903` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`elementID`),
  KEY `class` (`class`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- ----------------------------
-- Records of uni1_vars
-- ----------------------------
INSERT INTO `uni1_vars` VALUES ('1', 'metal_mine', '0', '1', '0', '1.50', '255', '15', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '(30 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', '', '', '-(10 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('2', 'crystal_mine', '0', '1', '0', '1.50', '255', '15', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '(20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', '', '-(10 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('3', 'deuterium_sintetizer', '0', '1', '0', '1.50', '255', '15', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '(10 * $BuildLevel * pow((1.1), $BuildLevel) * (-0.002 * $BuildTemp + 1.28) * (0.1 * $BuildLevelFactor))', '- (30 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('4', 'solar_plant', '0', '1', '0', '1.50', '255', '75', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '(20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor)', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('6', 'university', '0', '1', '0', '2.00', '255', '10000000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('12', 'fusion_plant', '0', '1', '0', '2.00', '255', '900', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '- (10 * $BuildLevel * pow(1.1,$BuildLevel) * (0.1 * $BuildLevelFactor))', '(30 * $BuildLevel * pow((1.05 + $BuildEnergy * 0.01), $BuildLevel)) * (0.1 * $BuildLevelFactor)', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('14', 'robot_factory', '0', '1', '0', '2.00', '255', '400', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('15', 'nano_factory', '0', '1', '0', '2.00', '255', '1000000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('21', 'hangar', '0', '1', '0', '2.00', '255', '800', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('22', 'metal_store', '0', '1', '0', '2.00', '255', '2000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', 'floor(2.5 * pow(1.8331954764, $BuildLevel)) * 5000', '', '');
INSERT INTO `uni1_vars` VALUES ('23', 'crystal_store', '0', '1', '0', '2.00', '255', '2000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', 'floor(2.5 * pow(1.8331954764, $BuildLevel)) * 5000', '');
INSERT INTO `uni1_vars` VALUES ('24', 'deuterium_store', '0', '1', '0', '2.00', '255', '2000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', 'floor(2.5 * pow(1.8331954764, $BuildLevel)) * 5000');
INSERT INTO `uni1_vars` VALUES ('31', 'laboratory', '0', '1', '0', '2.00', '255', '800', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('33', 'terraformer', '0', '1', '0', '2.00', '255', '100000', '0', '0', '1000', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('34', 'ally_deposit', '0', '1', '0', '2.00', '255', '60000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('41', 'mondbasis', '0', '1', '0', '2.00', '10', '40000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('42', 'phalanx', '0', '1', '0', '2.00', '10', '40000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('43', 'sprungtor', '0', '1', '0', '2.00', '10', '40000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('44', 'silo', '0', '1', '0', '2.00', '255', '20000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('106', 'spy_tech', '100', '1,3', '0', '2.00', '255', '1000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('108', 'computer_tech', '100', '1,3', '0', '2.00', '255', '600', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('109', 'military_tech', '100', '1,3', '0', '2.00', '255', '800', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('110', 'defence_tech', '100', '1,3', '0', '2.00', '255', '800', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('111', 'shield_tech', '100', '1,3', '0', '2.00', '255', '1000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('113', 'energy_tech', '100', '1,3', '0', '2.00', '255', '1200', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('114', 'hyperspace_tech', '100', '1,3', '0', '2.00', '255', '6000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('115', 'combustion_tech', '100', '1,3', '0', '2.00', '255', '1000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('117', 'impulse_motor_tech', '100', '1,3', '0', '2.00', '255', '7000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('118', 'hyperspace_motor_tech', '100', '1,3', '0', '2.00', '255', '30000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('120', 'laser_tech', '100', '1,3', '0', '2.00', '255', '300', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('121', 'ionic_tech', '100', '1,3', '0', '2.00', '255', '1500', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('122', 'buster_tech', '100', '1,3', '0', '2.00', '255', '6000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('123', 'intergalactic_tech', '100', '1,3', '0', '2.00', '255', '500000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('124', 'expedition_tech', '100', '1,3', '0', '1.75', '255', '20000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('131', 'metal_proc_tech', '100', '1,3', '0', '2.00', '255', '2000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('132', 'crystal_proc_tech', '100', '1,3', '0', '2.00', '255', '2000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('133', 'deuterium_proc_tech', '100', '1,3', '0', '2.00', '255', '2000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('199', 'graviton_tech', '100', '1,3', '0', '2.00', '255', '300000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('202', 'infantry_dog', '200', '1,3', '0', '1.00', null, '400', '0', '0', '0', '0', '0', '0', '1', '500', '500', null, null, null, null, '10', '1', '5', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('203', 'infantry_missile', '200', '1,3', '0', '1.00', null, '1000', '0', '0', '0', '0', '0', '0', '1', '100', '100', null, null, null, null, '100', '1', '30', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('204', 'infantry_sniper', '200', '1,3', '0', '1.00', null, '500', '0', '0', '0', '0', '0', '0', '1', '100', '100', null, null, null, null, '100', '1', '40', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('205', 'infantry_rocket', '200', '1,3', '0', '1.00', null, '900', '0', '0', '0', '0', '0', '0', '1', '100', '100', null, null, null, null, '100', '1', '25', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('206', 'infantry_tesla', '200', '1,3', '0', '1.00', null, '1200', '0', '0', '0', '0', '1', '1', '1', '70', '70', null, null, null, null, '100', '1', '50', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('207', 'tank_transport', '200', '1,3', '0', '1.00', null, '4000', '0', '0', '0', '0', '25', '50', '2', '1000', '2000', null, null, null, null, '20000', '1', '20', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('208', 'tank_MCV', '200', '1,3', '0', '1.00', null, '8000', '0', '0', '0', '0', '100', '200', '2', '2500', '2500', null, null, null, null, '7500', '1', '10', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('209', 'tank_panther', '200', '1,3', '0', '1.00', null, '3000', '0', '0', '0', '0', '30', '60', '2', '1000', '2000', null, null, null, null, '2000', '1', '20', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('210', 'tank_tiger', '200', '1,3', '0', '1.00', null, '7500', '0', '0', '0', '0', '60', '120', '2', '800', '1600', null, null, null, null, '5000', '1', '50', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('211', 'tank_aa', '200', '1,3', '0', '1.00', null, '6000', '0', '0', '0', '0', '50', '50', '2', '2500', '2500', null, null, null, null, '2500', '1', '20', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('212', 'solar_satelit', '200', '1,3', '0', '1.00', null, '6500', '0', '0', '0', '0', '60', '60', '2', '2500', '2500', null, null, null, null, '2500', '1', '30', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('213', 'tank_mirage', '200', '1,3', '0', '1.00', null, '5500', '0', '0', '0', '0', '100', '200', '2', '5000', '5000', null, null, null, null, '2500', '1', '40', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('214', 'air_spy', '200', '1,3', '0', '1.00', null, '2500', '0', '0', '0', '0', '1', '1', '3', '200000', '200000', null, null, null, null, '500', '1', '10', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('215', 'air_cargo', '200', '1,3', '0', '1.00', null, '10000', '0', '0', '0', '0', '100', '100', '3', '10000', '10000', null, null, null, null, '50000', '1', '40', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('216', 'air_apache', '200', '1,3', '0', '1.00', null, '10000', '0', '0', '0', '0', '100', '100', '3', '10000', '10000', null, null, null, null, '550', '1', '30', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('217', 'air_torpedo', '200', '1,3', '0', '1.00', null, '7500', '0', '0', '0', '0', '100', '100', '3', '10000', '10000', null, null, null, null, '2500', '1', '40', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('218', 'air_raptor', '200', '1,3', '0', '1.00', null, '10000', '0', '0', '0', '0', '100', '100', '3', '10000', '10000', null, null, null, null, '2500', '1', '50', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('219', 'air_stealth', '200', '1,3', '0', '1.00', null, '9000', '0', '0', '0', '0', '100', '100', '3', '10000', '10000', null, null, null, null, '2500', '1', '40', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('220', 'air_dragon', '200', '1,3', '0', '1.00', null, '50000', '0', '0', '0', '0', '1000', '1000', '3', '100', '100', null, null, null, null, '20000', '1', '40', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('401', 'navy_transport', '200', '1,3', '0', '1.00', null, '20000', '0', '0', '0', '0', '200', '400', '5', '500', '1000', null, null, null, null, '100000', '1', '10', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('402', 'navy_frigate', '200', '1,3', '0', '1.00', null, '1200', '0', '0', '0', '0', '200', '400', '5', '1000', '2000', null, null, null, null, '20000', '1', '20', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('403', 'navy_destroyer', '200', '1,3', '0', '1.00', null, '3200', '0', '0', '0', '0', '200', '400', '5', '500', '1000', null, null, null, null, '20000', '1', '30', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('404', 'navy_cruiser', '200', '1,3', '0', '1.00', null, '5000', '0', '0', '0', '0', '200', '400', '5', '500', '1000', null, null, null, null, '20000', '1', '40', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('405', 'navy_battleship', '200', '1,3', '0', '1.00', null, '7000', '0', '0', '0', '0', '200', '400', '5', '400', '800', null, null, null, null, '20000', '1', '40', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('406', 'navy_submarine', '200', '1,3', '0', '1.00', null, '3000', '0', '0', '0', '0', '200', '400', '5', '500', '1000', null, null, null, null, '20000', '1', '50', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('407', 'def_shield', '400', '1,3', '1', '1.00', null, '0', '0', '0', '200000', '0', null, null, null, null, null, null, null, null, null, '0', '0', '200000', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('408', 'def_light', '400', '1,3', '0', '1.00', null, '750', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, '0', '1', '10', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('409', 'def_heavy', '400', '1,3', '0', '1.00', null, '5000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, '0', '1', '30', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('410', 'def_prism', '400', '1,3', '0', '1.00', null, '9000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, '0', '1', '10', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('411', 'def_aa', '400', '1,3', '0', '1.00', null, '10000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, '0', '1', '10', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('502', 'interceptor_misil', '500', '1,3', '0', '1.00', null, '8000', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, '0', '1', '1', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('503', 'interplanetary_misil', '500', '1,3', '0', '1.00', null, '12500', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, '0', '12000', '1', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('601', 'rpg_geologue', '600', '1,3', '0', '1.00', '20', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('602', 'rpg_amiral', '600', '1,3', '0', '1.00', '20', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.05', '0.05', '0.05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('603', 'rpg_ingenieur', '600', '1,3', '0', '1.00', '10', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.05', '0.05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('604', 'rpg_technocrate', '600', '1,3', '0', '1.00', '10', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '-0.05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('605', 'rpg_constructeur', '600', '1,3', '0', '1.00', '3', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '-0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('606', 'rpg_scientifique', '600', '1,3', '0', '1.00', '3', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '-0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('607', 'rpg_stockeur', '600', '1,3', '0', '1.00', '2', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('608', 'rpg_defenseur', '600', '1,3', '0', '1.00', '2', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '-0.25', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('609', 'rpg_bunker', '600', '1,3', '0', '1.00', '1', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('610', 'rpg_espion', '600', '1,3', '0', '1.00', '2', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.35', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('611', 'rpg_commandant', '600', '1,3', '0', '1.00', '3', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('612', 'rpg_destructeur', '600', '1,3', '0', '1.00', '1', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('613', 'rpg_general', '600', '1,3', '0', '1.00', '3', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '-0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('614', 'rpg_raideur', '600', '1,3', '0', '1.00', '1', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('615', 'rpg_empereur', '600', '1,3', '0', '1.00', '1', '0', '0', '0', '0', '1000', null, null, null, null, null, null, null, null, null, null, null, null, null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('701', 'dm_attack', '700', '1,3', '0', '1.00', null, '0', '0', '0', '0', '1500', null, null, null, null, null, null, null, null, null, null, null, null, '86400', '0.10', '0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('702', 'dm_defensive', '700', '1,3', '0', '1.00', null, '0', '0', '0', '0', '1500', null, null, null, null, null, null, null, null, null, null, null, null, '86400', '0.00', '0.00', '0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('703', 'dm_buildtime', '700', '1,3', '0', '1.00', null, '0', '0', '0', '0', '750', null, null, null, null, null, null, null, null, null, null, null, null, '86400', '0.00', '0.00', '0.00', '-0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('704', 'dm_resource', '700', '1,3', '0', '1.00', null, '0', '0', '0', '0', '2500', null, null, null, null, null, null, null, null, null, null, null, null, '86400', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('705', 'dm_energie', '700', '1,3', '0', '1.00', null, '0', '0', '0', '0', '2000', null, null, null, null, null, null, null, null, null, null, null, null, '86400', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('706', 'dm_researchtime', '700', '1,3', '0', '1.00', null, '0', '0', '0', '0', '1250', null, null, null, null, null, null, null, null, null, null, null, null, '86400', '0.00', '0.00', '0.00', '0.00', '-0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');
INSERT INTO `uni1_vars` VALUES ('707', 'dm_fleettime', '700', '1,3', '0', '1.00', null, '0', '0', '0', '0', '3000', null, null, null, null, null, null, null, null, null, null, null, null, '86400', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '-0.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '', '', '', '', '', '', '', '');



/*
Navicat MariaDB Data Transfer

Source Server         : pkland
Source Server Version : 110102
Source Host           : www.pkland.lol:3306
Source Database       : pkland

Target Server Type    : MariaDB
Target Server Version : 110102
File Encoding         : 65001

Date: 2023-10-15 01:13:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for uni1_vars_rapidfire
-- ----------------------------
DROP TABLE IF EXISTS `uni1_vars_rapidfire`;
CREATE TABLE `uni1_vars_rapidfire` (
  `elementID` int(11) NOT NULL,
  `rapidfireID` int(11) NOT NULL,
  `shoots` int(11) NOT NULL,
  KEY `elementID` (`elementID`),
  KEY `rapidfireID` (`rapidfireID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- ----------------------------
-- Records of uni1_vars_rapidfire
-- ----------------------------
INSERT INTO `uni1_vars_rapidfire` VALUES ('202', '202', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('202', '203', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('202', '204', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('202', '205', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('202', '206', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '202', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '203', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '204', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '205', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '206', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '207', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '208', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '209', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '210', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '211', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '212', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '213', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '214', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '215', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '216', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '217', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '218', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '219', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('203', '220', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('204', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('204', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('204', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('204', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('204', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '202', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '203', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '204', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '205', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '206', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '207', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '208', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '209', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '210', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '211', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '212', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '213', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '401', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '402', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '403', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '404', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '405', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '406', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '214', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '215', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '216', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '217', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '218', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '219', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('205', '220', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '202', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '203', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '204', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '205', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '206', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '207', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '208', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '209', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '210', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '211', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '212', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('206', '213', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('207', '202', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('207', '203', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('207', '204', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('207', '205', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('207', '206', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '202', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '203', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '204', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '205', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '206', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '207', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '208', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '209', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '210', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '211', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '212', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('208', '213', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '207', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '208', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '209', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '210', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '211', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '212', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '213', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '401', '600');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '402', '600');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '403', '600');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '404', '600');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '405', '600');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '406', '600');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '214', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '215', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '216', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '217', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '218', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '219', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '220', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '407', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '408', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '409', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '410', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('209', '411', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '202', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '203', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '204', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '205', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '206', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '207', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '208', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '209', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '210', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '211', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '212', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '213', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '401', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '402', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '403', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '404', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '405', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '406', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '214', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '215', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '216', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '217', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '218', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '219', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '220', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '407', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '408', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '409', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '410', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('210', '411', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '202', '220');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '203', '220');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '204', '220');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '205', '220');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '206', '220');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '207', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '208', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '209', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '210', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '211', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '212', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '213', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '401', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '402', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '403', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '404', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '405', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '406', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '214', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '215', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '216', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '217', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '218', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '219', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '220', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '407', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '408', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '409', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '410', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('211', '411', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '202', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '203', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '204', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '205', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '206', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '207', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '208', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '209', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '210', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '211', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '212', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '213', '1200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '401', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '402', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '403', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '404', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '405', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '406', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '214', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '215', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '216', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '217', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '218', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '219', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '220', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '407', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '408', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '409', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '410', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('212', '411', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '202', '270');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '203', '270');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '204', '270');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '205', '270');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '206', '270');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '207', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '208', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '209', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '210', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '211', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '212', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '213', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '401', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '402', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '403', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '404', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '405', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '406', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '214', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '215', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '216', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '217', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '218', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '219', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '220', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '407', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '408', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '409', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '410', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('213', '411', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '202', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '203', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '204', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '205', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '206', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '207', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '208', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '209', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '210', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '211', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '212', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '213', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '401', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '402', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '403', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '404', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '405', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '406', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '214', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '215', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '216', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '217', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '218', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '219', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('214', '220', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '202', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '203', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '204', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '205', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '206', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '207', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '208', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '209', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '210', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '211', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '212', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '213', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '401', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '402', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '403', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '404', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '405', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '406', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '214', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '215', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '216', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '217', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '218', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '219', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('215', '220', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '207', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '208', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '209', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '210', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '211', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '212', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '213', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '401', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '402', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '403', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '404', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '405', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '406', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '214', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '215', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '216', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '217', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '218', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '219', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '220', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '407', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '408', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '409', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '410', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('216', '411', '800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '202', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '203', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '204', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '205', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '206', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '207', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '208', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '209', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '210', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '211', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '212', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '213', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '401', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '402', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '403', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '404', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '405', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '406', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '214', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '215', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '216', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '217', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '218', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '219', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '220', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '407', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '408', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '409', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '410', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('217', '411', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '207', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '208', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '209', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '210', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '211', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '212', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '213', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '401', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '402', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '403', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '404', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '405', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '406', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '214', '8000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '215', '8000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '216', '8000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '217', '8000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '218', '8000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '219', '8000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '220', '8000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '407', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '408', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '409', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '410', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('218', '411', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '202', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '203', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '204', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '205', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '206', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '207', '1500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '208', '1500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '209', '1500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '210', '1500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '211', '1500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '212', '1500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '213', '1500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '401', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '402', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '403', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '404', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '405', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '406', '2500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '214', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '215', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '216', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '217', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '218', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '219', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '220', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '407', '1800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '408', '1800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '409', '1800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '410', '1800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('219', '411', '1800');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '207', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '208', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '209', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '210', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '211', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '212', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '213', '6000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '401', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '402', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '403', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '404', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '405', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '406', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '214', '15000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '215', '15000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '216', '15000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '217', '15000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '218', '15000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '219', '15000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '220', '15000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '407', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '408', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '409', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '410', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('220', '411', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '202', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '203', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '204', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '205', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '206', '100');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '207', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '208', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '209', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '210', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '211', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '212', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '213', '20');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '401', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '402', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '403', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '404', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '405', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '406', '50');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '407', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '408', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '409', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '410', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('401', '411', '10');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '207', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '208', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '209', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '210', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '211', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '212', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '213', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '401', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '402', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '403', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '404', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '405', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '406', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '214', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '215', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '216', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '217', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '218', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '219', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '220', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '407', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '408', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '409', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '410', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('402', '411', '500');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '202', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '203', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '204', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '205', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '206', '260');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '207', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '208', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '209', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '210', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '211', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '212', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '213', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '401', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '402', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '403', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '404', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '405', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '406', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '214', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '215', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '216', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '217', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '218', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '219', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '220', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '407', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '408', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '409', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '410', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('403', '411', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '202', '280');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '203', '280');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '204', '280');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '205', '280');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '206', '280');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '207', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '208', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '209', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '210', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '211', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '212', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '213', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '401', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '402', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '403', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '404', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '405', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '406', '4000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '214', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '215', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '216', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '217', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '218', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '219', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '220', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '407', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '408', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '409', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '410', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('404', '411', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '202', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '203', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '204', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '205', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '206', '200');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '207', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '208', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '209', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '210', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '211', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '212', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '213', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '401', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '402', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '403', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '404', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '405', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '406', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '214', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '215', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '216', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '217', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '218', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '219', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '220', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '407', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '408', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '409', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '410', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('405', '411', '2000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('406', '401', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('406', '402', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('406', '403', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('406', '404', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('406', '405', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('406', '406', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '207', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '208', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '209', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '210', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '211', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '212', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '213', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '401', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '402', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '403', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '404', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '405', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '406', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '214', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '215', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '216', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '217', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '218', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '219', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('408', '220', '400');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '207', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '208', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '209', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '210', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '211', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '212', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '213', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '401', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '402', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '403', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '404', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '405', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '406', '3000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '214', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '215', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '216', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '217', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '218', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '219', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('409', '220', '1000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '202', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '203', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '204', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '205', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '206', '300');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '207', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '208', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '209', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '210', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '211', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '212', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '213', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '401', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '402', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '403', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '404', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '405', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '406', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '214', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '215', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '216', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '217', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '218', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '219', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('410', '220', '5000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('411', '214', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('411', '215', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('411', '216', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('411', '217', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('411', '218', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('411', '219', '10000');
INSERT INTO `uni1_vars_rapidfire` VALUES ('411', '220', '10000');


/*
Navicat MariaDB Data Transfer

Source Server         : pkland
Source Server Version : 110102
Source Host           : www.pkland.lol:3306
Source Database       : pkland

Target Server Type    : MariaDB
Target Server Version : 110102
File Encoding         : 65001

Date: 2023-10-15 01:13:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for uni1_vars_requriements
-- ----------------------------
DROP TABLE IF EXISTS `uni1_vars_requriements`;
CREATE TABLE `uni1_vars_requriements` (
  `elementID` int(11) NOT NULL,
  `requireID` int(11) NOT NULL,
  `requireLevel` int(11) NOT NULL,
  KEY `elementID` (`elementID`),
  KEY `requireID` (`requireID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- ----------------------------
-- Records of uni1_vars_requriements
-- ----------------------------
INSERT INTO `uni1_vars_requriements` VALUES ('6', '123', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('6', '123', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('6', '123', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('6', '123', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('6', '123', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('12', '113', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('12', '113', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('15', '108', '10');
INSERT INTO `uni1_vars_requriements` VALUES ('15', '108', '10');
INSERT INTO `uni1_vars_requriements` VALUES ('21', '14', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('33', '113', '12');
INSERT INTO `uni1_vars_requriements` VALUES ('33', '113', '12');
INSERT INTO `uni1_vars_requriements` VALUES ('41', '21', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('42', '21', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('43', '21', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('44', '21', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('106', '31', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('108', '31', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('109', '31', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('110', '31', '6');
INSERT INTO `uni1_vars_requriements` VALUES ('110', '31', '6');
INSERT INTO `uni1_vars_requriements` VALUES ('111', '31', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('113', '31', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('114', '31', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('114', '31', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('114', '31', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('115', '31', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('115', '31', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('117', '31', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('117', '31', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('118', '31', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('118', '31', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('120', '113', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('120', '113', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('121', '113', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('121', '113', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('121', '113', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('122', '121', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('122', '121', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('122', '121', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('122', '121', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('123', '114', '8');
INSERT INTO `uni1_vars_requriements` VALUES ('123', '114', '8');
INSERT INTO `uni1_vars_requriements` VALUES ('123', '114', '8');
INSERT INTO `uni1_vars_requriements` VALUES ('124', '31', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('124', '31', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('124', '31', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('131', '113', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('131', '113', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('132', '113', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('132', '113', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('133', '113', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('133', '113', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('199', '31', '12');
INSERT INTO `uni1_vars_requriements` VALUES ('202', '21', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('202', '106', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('203', '21', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('203', '109', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('204', '21', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('205', '21', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('205', '109', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('206', '21', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('206', '120', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('207', '41', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('208', '41', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('209', '41', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('210', '41', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('210', '109', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('211', '41', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('211', '109', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('212', '41', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('212', '120', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('213', '41', '6');
INSERT INTO `uni1_vars_requriements` VALUES ('214', '43', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('214', '106', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('214', '118', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('215', '43', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('215', '118', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('216', '43', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('216', '118', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('216', '109', '6');
INSERT INTO `uni1_vars_requriements` VALUES ('217', '43', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('217', '118', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('217', '109', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('218', '43', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('218', '118', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('218', '109', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('219', '43', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('219', '118', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('219', '109', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('220', '43', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('220', '118', '6');
INSERT INTO `uni1_vars_requriements` VALUES ('220', '109', '8');
INSERT INTO `uni1_vars_requriements` VALUES ('401', '42', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('401', '114', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('402', '42', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('402', '114', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('403', '42', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('403', '114', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('404', '42', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('404', '114', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('404', '120', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('405', '42', '6');
INSERT INTO `uni1_vars_requriements` VALUES ('405', '114', '6');
INSERT INTO `uni1_vars_requriements` VALUES ('405', '120', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('406', '42', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('406', '114', '7');
INSERT INTO `uni1_vars_requriements` VALUES ('406', '120', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('407', '14', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('407', '113', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('408', '14', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('408', '111', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('409', '14', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('409', '111', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('410', '14', '4');
INSERT INTO `uni1_vars_requriements` VALUES ('410', '120', '6');
INSERT INTO `uni1_vars_requriements` VALUES ('411', '15', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('411', '111', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('502', '44', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('502', '109', '10');
INSERT INTO `uni1_vars_requriements` VALUES ('503', '44', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('503', '109', '10');
INSERT INTO `uni1_vars_requriements` VALUES ('603', '601', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('604', '602', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('605', '603', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('605', '603', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('606', '603', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('606', '603', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('607', '605', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('608', '606', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('609', '608', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('609', '608', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('609', '608', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('609', '608', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('609', '608', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('609', '608', '2');
INSERT INTO `uni1_vars_requriements` VALUES ('610', '604', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('610', '604', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('611', '604', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('611', '604', '5');
INSERT INTO `uni1_vars_requriements` VALUES ('612', '610', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('613', '611', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('614', '613', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('614', '613', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('614', '613', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('614', '613', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('614', '613', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('614', '613', '3');
INSERT INTO `uni1_vars_requriements` VALUES ('615', '609', '1');
INSERT INTO `uni1_vars_requriements` VALUES ('615', '609', '1');

