ALTER TABLE `characters`
  ADD COLUMN `map` VARCHAR(64) NOT NULL DEFAULT '\'\'' AFTER `gender`,
  ADD COLUMN `x` INT(11) NOT NULL DEFAULT '0' AFTER `map`,
  ADD COLUMN `y` INT(11) NOT NULL DEFAULT '0' AFTER `x`;