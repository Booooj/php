
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `favorite` varchar(100) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
