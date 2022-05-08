-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2022 a las 17:35:50
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartelera_pw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id_entrada` int(11) NOT NULL,
  `id_sesion` int(11) NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_04_26_145206_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `estreno` date NOT NULL,
  `director` varchar(50) NOT NULL,
  `portada` text NOT NULL,
  `sinopsis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `duracion`, `titulo`, `genero`, `estreno`, `director`, `portada`, `sinopsis`) VALUES
(1, 126, 'Doctor Strange en el Multiverso de la Locura\n', 'Fantasía', '2022-05-05', 'Sam Raimi', 'https://i.ibb.co/ZgJ26RR/doctor-strange-in-the-multiverse-of-madness-4pjr.png', 'En esta nueva aventura, el Doctor Strange (Benedict Cumberbatch) va a poner a prueba los límites de sus poderes y esto le llevará a explorar una nueva dimensión de sus capacidades. Tras haber fallado su hechizo, cuando trataba de ayudar a Spider-Man (Tom Holland) con su identidad secreta,  tiene que recurrir a una vieja amiga, Wanda Maximoff (Elizabeth Olsen) para enmendar su error. Como nunca antes, el famoso hechicero de Marvel explorará los oscuros rincones del Multiverso, donde deberá contar con nuevos y viejos aliados si quiere sobrevivir a las peligrosas realidades alternativas del universo y enfrentarse a un nuevo misterioso enemigo.'),
(2, 144, 'Animales Fantásticos: Los Secretos de Dumbledore\n', 'Aventura', '2022-04-08', 'David Yates', 'https://i.ibb.co/s5zrR23/0138242.jpg', 'En Animales Fantásticos: Los Secretos de Dumbledore el malvado y poderoso mago Grindelwald sigue buscando adeptos a su causa, pero esta vez se transportará a todos los rincones y mundos mágicos existentes para obtener lo que quiere. Por otra parte, Dumbledore unirá a su propio ejército formado por Newt y Theseus Scamander, Jacob, entre otros, para poner fin a la guerra que está a punto de comenzar Grindelwald en su nombre. \n\nMientras encuentran aliados y la manera de poner fin a esta oscura edad, el pasado de Dumbledore irá cada vez tomando más presencia en la historia entre él y su antiguo amigo Grindelwald, con quien le unen otros grandes lazos más allá de la enemistad.'),
(3, 105, 'Morbius', 'Accion', '2022-04-01', 'Daniel Espinosa', 'https://i.ibb.co/t45tNWg/MRBS-INTL-On-Line-6072x9000-Montage-06-traducido.jpg', 'El Doctor Michael Morbius (Jared Leto) es un bioquímico que sufre una extraña enfermedad en la sangre. Para curarse y dar una respuesta a su trastorno, en el proceso, se infecta sin darse cuenta con una forma de vampirismo. Aunque debería haber muerto, tras la cura, Michael se siente más vivo que nunca y adquiere dones como fuerza, velocidad, capacidad de ecolocalización, además de una necesidad irresistible de consumir sangre. Trágicamente convertido en un imperfecto antihéroe, el Doctor Morbius tendrá una última oportunidad, pero ¿a qué precio?\n\nSpin-off de uno de los villanos más conocidos de Spider-Man, creado por Roy Thomas y Gil Kane, el filme lo producen los responsables de Spider-Man: Homecoming (2017), Venom (2018) y Spider-Man: Lejos de casa (2019).'),
(4, 99, 'Sonic: La película', 'Aventura', '2022-05-06', 'Jeff Fowler', 'https://i.ibb.co/BTF5XmT/0815514.jpg', 'Sonic, el famoso erizo azul de SEGA vivirá su primera aventura en la pantalla grande en esta película, que incluirá tanto acción real como animación creada por ordenador. En esta adaptación cinematográfica basada en la conocida saga de videojuegos descubriremos a su protagonista: Sonic, el erizo con la habilidad de correr a la velocidad del sonido. En esta nueva aventura, el erizo azul deberá viajar hasta nuestro mundo para poder salvar el suyo. En su misión no estará solo, pues contará con la ayuda de su amigo humano Tom Wachowski (James Marsden), con quien intentará escapar del gobierno que quiere capturarlo, además de huir de las artimañas del villano Doctor Ivo Robonik (Jim Carrey).'),
(5, 116, 'Uncharted: Fuera del Mapa', 'Aventura / Acción', '2022-02-11', 'Ruben Fleischer', 'https://i.ibb.co/ccyTjDg/UNCH-LAS-On-Line-TSR-1400x2100-Daisy-Chain-07.jpg', 'Basado en uno de los juegos más aclamados por la critica y que más ha vendido en la historia, Uncharted: Fuera del mapa, narra la historia de Nathan Drake y la primer aventura con su socio-rival Victor “Sully” Sullivan. Estelarizada por Tom Holland como Nathan Drake y Mark Wahlberg como el bromista de intelecto rápido Sully. Uncharted: Fuera del mapa presenta al público la manera en que Nathan Drake se convierte en un cazador de tesoros mientras que resuelve los más grandes misterios en una aventura llena de aventura y acción épica alrededor del mundo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id_sala` int(11) NOT NULL,
  `aforo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id_sala`, `aforo`) VALUES
(1, 50),
(2, 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id_sesion` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `dia` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`id_sesion`, `id_sala`, `id_pelicula`, `hora_inicio`, `hora_fin`, `dia`) VALUES
(4, 1, 1, '15:00:00', '17:00:06', '2022-05-10'),
(5, 2, 1, '20:00:00', '22:00:06', '2022-05-10'),
(6, 1, 2, '12:00:00', '14:24:00', '2022-05-11'),
(7, 2, 2, '17:00:00', '19:24:17', '2022-05-11'),
(8, 1, 3, '17:00:54', '18:40:54', '2022-05-17'),
(9, 1, 3, '19:00:54', '20:40:54', '2022-05-18'),
(10, 1, 4, '15:00:14', '16:30:14', '2022-05-13'),
(11, 2, 4, '17:30:14', '19:00:14', '2022-05-20'),
(12, 1, 5, '17:31:14', '19:41:14', '2022-05-23'),
(13, 2, 5, '20:31:14', '22:40:14', '2022-05-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WI5X8FpvcP50lAhDCFlIWye7srLOFu2sw8xdlZJR', 6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicmVFeTJzV0I0ckdEbTBKSDl5UDdZTEpsdTlKeVRGTnFHODR5enp4UiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wZXJmaWwiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O30=', 1652024076);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(6, 'UsuarioPrueba', 'usuario@prueba.com', NULL, '$2y$10$.nKFU7qLvSalFoErsr/Ui.CFSI0bsGpEOr51ck42BL8NhEB11Av3K', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-08 13:23:30', '2022-05-08 13:23:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_entrada`),
  ADD KEY `id_sesion` (`id_sesion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id_sesion`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`id_sesion`) REFERENCES `sesiones` (`id_sesion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entrada_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `salas` (`id_sala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sesiones_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
