CREATE TABLE IF NOT EXISTS `cafecham_ticket`.`events_tickets` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ticket id',
  `event_id` int(11) NOT NULL COMMENT 'event id',
  `ticket_name` VARCHAR(255) NOT NULL COMMENT 'name of ticket',
  `ticket_price` DECIMAL(6,2) NOT NULL COMMENT 'ticket price up to 9999.99',
  PRIMARY KEY (`ticket_id`),
  FOREIGN KEY (`event_id`) REFERENCES events(`event_id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='events_tickets data';