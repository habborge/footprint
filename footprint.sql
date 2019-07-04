/*
 Navicat Premium Data Transfer

 Source Server         : Bases de datos locales
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3306
 Source Schema         : footprint

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 04/07/2019 13:23:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dbpcn_transaction
-- ----------------------------
DROP TABLE IF EXISTS `dbpcn_transaction`;
CREATE TABLE `dbpcn_transaction`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(30) UNSIGNED NOT NULL,
  `type` enum('egreso','ingreso') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `transaction_date` date NOT NULL,
  `concept_id` int(11) NOT NULL,
  `bonus_id` int(11) NOT NULL,
  `amount_cop` decimal(30, 2) NOT NULL,
  `current_balance` decimal(30, 2) NOT NULL,
  `total_earning` decimal(30, 2) NOT NULL,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('Pending','Approved','Rejected') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `transaction_hash` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `withdrawal_id` int(11) NULL DEFAULT NULL,
  `withdrawal_status` enum('pending','paid') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `transaction`(`user_id`, `concept_id`, `bonus_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `type`(`type`) USING BTREE,
  INDEX `fk_transaction_concept_id`(`concept_id`) USING BTREE,
  CONSTRAINT `fk_transaction_concept_id` FOREIGN KEY (`concept_id`) REFERENCES `general_concepts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 406 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dbpcn_transaction
-- ----------------------------
INSERT INTO `dbpcn_transaction` VALUES (177, 1, 'ingreso', '2019-05-10', 2, 158, 920040.00, 920040.00, 920040.00, 'Pago de Directo :: (pasal)', 'Approved', '8a963ceb3c97d42219d6a1242e8e4b5ed823dd5491a6de7571a11eaf4afa4303', 19, 'paid', '2019-05-10 17:22:49', '2019-06-12 19:26:32');
INSERT INTO `dbpcn_transaction` VALUES (178, 1, 'ingreso', '2019-05-13', 2, 159, 920040.00, 1840080.00, 1840080.00, 'Pago de Directo :: (luhercar)', 'Approved', 'b6c3f77703e99702de74f4d1f7977a0ed823dd5491a6de7571a11eaf4afa4303', 19, 'paid', '2019-05-13 20:01:48', '2019-06-12 19:26:32');
INSERT INTO `dbpcn_transaction` VALUES (271, 1, 'ingreso', '2019-05-28', 3, 93, 920040.00, 2760120.00, 2760120.00, 'Pago de Comisión por Venta de Equipo Unilevel', 'Approved', 'gfdsfdgf', 13, 'paid', '2019-05-28 20:30:55', '2019-06-07 16:45:02');
INSERT INTO `dbpcn_transaction` VALUES (272, 1, 'ingreso', '2019-05-28', 3, 95, 1380060.00, 5980260.00, 5980260.00, 'Pago de Comisión por Venta de Equipo Unilevel', 'Approved', 'gfdsfdgf', 8, 'paid', '2019-05-28 22:53:22', '2019-06-07 16:43:15');
INSERT INTO `dbpcn_transaction` VALUES (273, 1, 'ingreso', '2019-05-29', 3, 96, 920040.00, 2760120.00, 2760120.00, 'Pago de Comisión por Venta de Equipo Unilevel', 'Approved', 'gfdsfdgf', 6, 'paid', '2019-05-29 07:10:42', '2019-06-07 16:42:00');
INSERT INTO `dbpcn_transaction` VALUES (377, 1, 'ingreso', '2019-06-18', 2, 261, 920040.00, 1380060.00, 6440280.00, 'Pago de Directo :: (jcampos1)', 'Approved', 'd19cd0a28086dabf83283cff3e23a5d9d823dd5491a6de7571a11eaf4afa4303', NULL, 'pending', '2019-06-18 20:12:14', '2019-06-19 12:13:17');

-- ----------------------------
-- Table structure for general_concepts
-- ----------------------------
DROP TABLE IF EXISTS `general_concepts`;
CREATE TABLE `general_concepts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name_table` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of general_concepts
-- ----------------------------
INSERT INTO `general_concepts` VALUES (1, 'Register of member (pago cuota inicial)', NULL, 1);
INSERT INTO `general_concepts` VALUES (2, 'Venta Directa', NULL, 1);
INSERT INTO `general_concepts` VALUES (3, 'Venta de Equipo', NULL, 1);
INSERT INTO `general_concepts` VALUES (4, 'Solicitud de cobro rechazada', NULL, 1);
INSERT INTO `general_concepts` VALUES (7, 'Venta Residual', NULL, 1);
INSERT INTO `general_concepts` VALUES (8, 'Cobro a cuenta Bancaria', NULL, 1);
INSERT INTO `general_concepts` VALUES (9, 'Solicitud de retiro ', 'dbpcn_withdrawal', 1);
INSERT INTO `general_concepts` VALUES (10, 'Solicitud de retiro comision', 'dbpcn_withdrawal', 1);
INSERT INTO `general_concepts` VALUES (11, 'Pago de cuota mensual', 'dbpcn_invoices', 1);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'alexander', 'alexanderpedrozo6619@gmail.com', NULL, '$2y$12$NfIvLerYnQiSnIkSVQD.Reu2I3BhbLcacSuywK4Uq2ZSv0UhQE3jW', NULL, '2019-07-03 21:56:03', '2019-07-03 21:56:03');

SET FOREIGN_KEY_CHECKS = 1;
