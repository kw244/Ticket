CREATE TABLE IF NOT EXISTS `cafecham_ticket`.`events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing id of each event, unique index',
  `event_name` VARCHAR(255) NOT NULL COMMENT 'Event name',
  `event_start` DATETIME NOT NULL COMMENT 'Start date and time of event',
  `event_end` DATETIME NOT NULL COMMENT 'End date and time of event',
  `event_blurb` VARCHAR(255) NOT NULL COMMENT 'Short description of event',
  `event_description` TEXT NOT NULL COMMENT 'Full description of event',
  `event_details` TEXT NOT NULL COMMENT 'Additional details of event',
  `event_location` VARCHAR(255) NOT NULL COMMENT 'Location of event',
  `event_image` VARCHAR(255) NOT NULL COMMENT 'path to event image',
  PRIMARY KEY (`event_id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='event data';