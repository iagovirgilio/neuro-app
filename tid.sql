-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2017 às 18:52
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tid`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` text NOT NULL,
  `alternativa` text NOT NULL,
  `data_pergunta` datetime NOT NULL,
  `resposta_correta` int(11) NOT NULL,
  `etapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`, `alternativa`, `data_pergunta`, `resposta_correta`, `etapa`) VALUES
(1, '1- De acordo com o caso clínico citado, assinale a alternativa que corresponde as condutas necessárias para evitar que o paciente desenvolva úlceras de pressão:', 'a) Mudança de decúbito de 3 em 3 horas, hidratação da pele e massagens em locais de hiperemia com proeminência óssea.', '0000-00-00 00:00:00', 0, 1),
(2, '1- De acordo com o caso clínico citado, assinale a alternativa que corresponde as condutas necessárias para evitar que o paciente desenvolva úlceras de pressão:', 'b) Mudança de 2 em 2 horas, hidratação da pele associado a massagem em locais de proeminência ósseas com hiperemia.\r\n\r\n', '0000-00-00 00:00:00', 0, 1),
(3, '1- De acordo com o caso clínico citado, assinale a alternativa que corresponde as condutas necessárias para evitar que o paciente desenvolva úlceras de pressão:', 'c) Mudanças de decúbito de 2 em 2 horas, hidratação da pele, massagens evitando locais de proeminência óssea, uso de colchão piramidal (caixa de ovo).\r\n', '0000-00-00 00:00:00', 1, 1),
(4, '1- De acordo com o caso clínico citado, assinale a alternativa que corresponde as condutas necessárias para evitar que o paciente desenvolva úlceras de pressão:', 'd) Mudança de decúbito de 3 em 3 horas, massagens evitando locais de proeminência ósseas, hidratação e uso de colchão ortopédico.\r\n', '0000-00-00 00:00:00', 0, 1),
(5, '2- Quais as condutas devem realizadas para diminuir as limitações articulares e encurtamentos musculares:<br> I. Alongamentos passivos e mobilização articular de MSD e MID.<br>\r\n II. Realizar alongamentos e evitar mobilizações articulares por  estas estimularem estresse articular.<br>\r\n III. Alongamentos ativos  e mobilização articular de MSD e MID.<br>\r\n IV. Dissociação de cinturas e mobilização escapular.   \r\n', 'a)(  ) V-F-F-V\n\n', '0000-00-00 00:00:00', 1, 1),
(6, '2- Quais as condutas devem realizadas para diminuir as limitações articulares e encurtamentos musculares:<br> I. Alongamentos passivos e mobilização articular de MSD e MID.<br>\r\n II. Realizar alongamentos e evitar mobilizações articulares por  estas estimularem estresse articular.<br>\r\n III. Alongamentos ativos  e mobilização articular de MSD e MID.<br>\r\n IV. Dissociação de cinturas e mobilização escapular.   \r\n', 'b)(  ) F-V-V-F\n\n', '0000-00-00 00:00:00', 0, 1),
(7, '2- Quais as condutas devem realizadas para diminuir as limitações articulares e encurtamentos musculares:<br> I. Alongamentos passivos e mobilização articular de MSD e MID.<br>\r\n II. Realizar alongamentos e evitar mobilizações articulares por  estas estimularem estresse articular.<br>\r\n III. Alongamentos ativos  e mobilização articular de MSD e MID.<br>\r\n IV. Dissociação de cinturas e mobilização escapular.   \r\n', 'c)(  ) V-F-V-F\n\n', '0000-00-00 00:00:00', 0, 1),
(8, '2- Quais as condutas devem realizadas para diminuir as limitações articulares e encurtamentos musculares:<br> I. Alongamentos passivos e mobilização articular de MSD e MID.<br>\r\n II. Realizar alongamentos e evitar mobilizações articulares por  estas estimularem estresse articular.<br>\r\n III. Alongamentos ativos  e mobilização articular de MSD e MID.<br>\r\n IV. Dissociação de cinturas e mobilização escapular.   \r\n', 'd)(  ) F-F-V-V\n   \n', '0000-00-00 00:00:00', 0, 1),
(9, '3- Como melhorar a capacidade respiratória desse paciente?', 'a) Manobras respiratórias que aumentam a elastância pulmonar.\r\n', '0000-00-00 00:00:00', 0, 1),
(10, '3- Como melhorar a capacidade respiratória desse paciente?', 'b)Manobras de expiração máxima.\r\n\r\n\r\n', '0000-00-00 00:00:00', 0, 1),
(11, '3- Como melhorar a capacidade respiratória desse paciente?', 'c) Manobras expiratórias que aumentem a complacência pulmonar com uso de respiron.\r\n', '0000-00-00 00:00:00', 0, 1),
(12, '3- Como melhorar a capacidade respiratória desse paciente?', 'd) Manobras inspiratórias de reexpansão pulmonar com uso de voldyne.\r\n', '0000-00-00 00:00:00', 1, 1),
(13, '4.Quais os pontos devem ser melhorados para poder colocar um paciente sentado?', 'a) Controle de cabeça, rolar no leito com ajuda do fisioterapeuta e controle de tronco superior com apoio do braço.\r\n\r\n', '0000-00-00 00:00:00', 0, 2),
(14, '4.Quais os pontos devem ser melhorados para poder colocar um paciente sentado?', 'b) Controle de cabeça, rolar sozinho no leito e controle de tronco superior e inferior sem apoio do braço.\r\n\r\n', '0000-00-00 00:00:00', 0, 2),
(15, '4.Quais os pontos devem ser melhorados para poder colocar um paciente sentado?', 'c)  Controle de cabeça, rolar no leito com ajuda do fisioterapeuta e controle de tronco superior com apoio do braço.', '0000-00-00 00:00:00', 0, 2),
(16, '4.Quais os pontos devem ser melhorados para poder colocar um paciente sentado?', 'd) Controle de cabeça, rolar no leito sozinho e controle de tronco superior e inferior com apoio do braço.\r\n\r\n', '0000-00-00 00:00:00', 1, 2),
(17, '5.Quais são as condutas fisioterapêuticas que devem ser adotadas para treinar o controle de tronco e cabeça nesse paciente acamado.<br> I.    ( )Exercícios de ponte.<br>\r\nII.   ( ) Exercícios de prancha de 1 minuto e de dorsiflexão.<br>\r\nIII.  ( ) Exercício de mergulho na bola e com uso da barra fazendo dissociação da cintura escapular.<br>\r\nIV.  ( )Exercícios com uso do voldyne.<br>\r\nV.   ( )Uso do método watsu e equoterapia. \r\n', 'a)V-V-F-V-F\r\n\r\n', '0000-00-00 00:00:00', 0, 2),
(18, '5.Quais são as condutas fisioterapêuticas que devem ser adotadas para treinar o controle de tronco e cabeça nesse paciente acamado.<br> I.    ( )Exercícios de ponte.<br>\r\nII.   ( ) Exercícios de prancha de 1 minuto e de dorsiflexão.<br>\r\nIII.  ( ) Exercício de mergulho na bola e com uso da barra fazendo dissociação da cintura escapular.<br>\r\nIV.  ( )Exercícios com uso do voldyne.<br>\r\nV.   ( )Uso do método watsu e equoterapia. \r\n', 'b)V-F-V-F-V\r\n', '0000-00-00 00:00:00', 1, 2),
(19, '5.Quais são as condutas fisioterapêuticas que devem ser adotadas para treinar o controle de tronco e cabeça nesse paciente acamado.<br> I.    ( )Exercícios de ponte.<br>\r\nII.   ( ) Exercícios de prancha de 1 minuto e de dorsiflexão.<br>\r\nIII.  ( ) Exercício de mergulho na bola e com uso da barra fazendo dissociação da cintura escapular.<br>\r\nIV.  ( )Exercícios com uso do voldyne.<br>\r\nV.   ( )Uso do método watsu e equoterapia. \r\n', 'c)F-F-V-V-F\r\n', '0000-00-00 00:00:00', 0, 2),
(20, '5.Quais são as condutas fisioterapêuticas que devem ser adotadas para treinar o controle de tronco e cabeça nesse paciente acamado.<br> I.    ( )Exercícios de ponte.<br>\r\nII.   ( ) Exercícios de prancha de 1 minuto e de dorsiflexão.<br>\r\nIII.  ( ) Exercício de mergulho na bola e com uso da barra fazendo dissociação da cintura escapular.<br>\r\nIV.  ( )Exercícios com uso do voldyne.<br>\r\nV.   ( )Uso do método watsu e equoterapia. \r\n', 'd)V-V-F-F-V\r\n', '0000-00-00 00:00:00', 0, 2),
(21, '5.Quais são as condutas fisioterapêuticas que devem ser adotadas para treinar o controle de tronco e cabeça nesse paciente acamado.<br> I.    ( )Exercícios de ponte.<br>\r\nII.   ( ) Exercícios de prancha de 1 minuto e de dorsiflexão.<br>\r\nIII.  ( ) Exercício de mergulho na bola e com uso da barra fazendo dissociação da cintura escapular.<br>\r\nIV.  ( )Exercícios com uso do voldyne.<br>\r\nV.   ( )Uso do método watsu e equoterapia. \r\n', 'e)F-F-V-V-F\n', '0000-00-00 00:00:00', 0, 2),
(22, '6.Qual as condutas fisioterapêuticas adotadas para colocar um paciente sentado em pé?', 'a) Realiza fortalecimento de MMSS, alongamentos passivos, cinesioterapia passiva e hidratação do corpo e da derme, exercícios de sair do estado de sedestação para ortostase na bola suíça, hidroterapia método de watsu, possuir controle de tronco e MMII é irrelevante pois estes são ganhos objetivos dessas fase.\r\n', '0000-00-00 00:00:00', 0, 3),
(23, '6.Qual as condutas fisioterapêuticas adotadas para colocar um paciente sentado em pé?', 'b) Eletroestimulação de MMII, barra paralela, cinesioterapia passiva, o paciente não possuir controle de tronco nessa fase, pois será adquirido ao longo  da conduta para melhor aproveitamento de tempo, realizar hidroterapia método de watsu,cinesioterapia passiva.\r\n', '0000-00-00 00:00:00', 0, 3),
(24, '6.Qual as condutas fisioterapêuticas adotadas para colocar um paciente sentado em pé?', 'c)Nessa fase é essencial o paciente possuir controle de tronco, pois são realizados treinos de transferências (de sedestação para ortostase) em bola suíça ou espaldar. É realizado eletroestimulação de MMII, descarga de peso bipodal e unipodal, uso de órtese, apoio em barras paralelas, suspensão, prancha ortostática, métodos da hidroterapia como o Bad Ragaz são bem vindos.\r\n', '0000-00-00 00:00:00', 1, 3),
(25, '6.Qual as condutas fisioterapêuticas adotadas para colocar um paciente sentado em pé?', 'd) Deve-se realizar descarga de peso bipodal e unipodal, com auxilio de barra paralela, órtese. Fazer uso de eletroestimulação em MMII , treinar a saída do sentado pra em pé em bola suíça, espaldar. Ou com utilização de suspensão e prancha ortostática. Também são bem vindos técnicas de hidroterapia como o Bad RAGAZ.Nessa fase admite-se pacientes que ainda não adquiriram controle de tronco por ser um dos objetivos dessa fase.\r\n', '0000-00-00 00:00:00', 0, 3),
(26, '7.Sobre a etapa evolutiva do paciente sentado para ficar em pé, sentencie V para verdadeiro e F para falso:<br>  ( ) Fortalecimento para MMII é importante para preparação para a deambulação e independência.<br>\r\n( ) Pacientes que possuem controle de tronco, mas não possuem grande força em MMII, conseguem evoluir de sentado para em pé.<br>\r\n( )Pacientes com força de MMII evoluem sem grandes perdas na ausência de controle de tronco.<br>\r\n( )O fortalecimento de MMII não é importante nessa fase, pois é mais efetivo na deambulação.', 'a) V-F-F-V\n', '0000-00-00 00:00:00', 0, 3),
(27, '7.Sobre a etapa evolutiva do paciente sentado para ficar em pé, sentencie V para verdadeiro e F para falso:<br>  ( ) Fortalecimento para MMII é importante para preparação para a deambulação e independência.<br>\r\n( ) Pacientes que possuem controle de tronco, mas não possuem grande força em MMII, conseguem evoluir de sentado para em pé.<br>\r\n( )Pacientes com força de MMII evoluem sem grandes perdas na ausência de controle de tronco.<br>\r\n( )O fortalecimento de MMII não é importante nessa fase, pois é mais efetivo na deambulação.', 'b) F-F-F-V\n', '0000-00-00 00:00:00', 0, 3),
(28, '7.Sobre a etapa evolutiva do paciente sentado para ficar em pé, sentencie V para verdadeiro e F para falso:<br>  ( ) Fortalecimento para MMII é importante para preparação para a deambulação e independência.<br>\r\n( ) Pacientes que possuem controle de tronco, mas não possuem grande força em MMII, conseguem evoluir de sentado para em pé.<br>\r\n( )Pacientes com força de MMII evoluem sem grandes perdas na ausência de controle de tronco.<br>\r\n( )O fortalecimento de MMII não é importante nessa fase, pois é mais efetivo na deambulação.', 'c) V-V-V-F\n', '0000-00-00 00:00:00', 0, 3),
(29, '7.Sobre a etapa evolutiva do paciente sentado para ficar em pé, sentencie V para verdadeiro e F para falso:<br>  ( ) Fortalecimento para MMII é importante para preparação para a deambulação e independência.<br>\r\n( ) Pacientes que possuem controle de tronco, mas não possuem grande força em MMII, conseguem evoluir de sentado para em pé.<br>\r\n( )Pacientes com força de MMII evoluem sem grandes perdas na ausência de controle de tronco.<br>\r\n( )O fortalecimento de MMII não é importante nessa fase, pois é mais efetivo na deambulação.', 'd) V-V-F-F\n', '0000-00-00 00:00:00', 1, 3),
(30, '8.Enumere o que deve ser feito para que o paciente tenha um bom equilíbrio e evolua para uma marcha livre.<br>( )Equilíbrio dinâmico com circuitos.<br>\r\n( )Equilíbrio de pé na prancha de equilíbrio e com apoio do terapeuta.<br>\r\n( )Equilíbrio estático sem apoio, sentado na bola suíça, eleva os MMSS e mantém a posição.\r\n', 'a) ( ) I-II-III\r\n', '0000-00-00 00:00:00', 0, 4),
(31, '8.Enumere o que deve ser feito para que o paciente tenha um bom equilíbrio e evolua para uma marcha livre.<br>( )Equilíbrio dinâmico com circuitos.<br>\r\n( )Equilíbrio de pé na prancha de equilíbrio e com apoio do terapeuta.<br>\r\n( )Equilíbrio estático sem apoio, sentado na bola suíça, eleva os MMSS e mantém a posição.\r\n', 'b) ( ) II-III-I\r\n', '0000-00-00 00:00:00', 0, 4),
(32, '8.Enumere o que deve ser feito para que o paciente tenha um bom equilíbrio e evolua para uma marcha livre.<br>( )Equilíbrio dinâmico com circuitos.<br>\r\n( )Equilíbrio de pé na prancha de equilíbrio e com apoio do terapeuta.<br>\r\n( )Equilíbrio estático sem apoio, sentado na bola suíça, eleva os MMSS e mantém a posição.\r\n', 'c) ( ) III-I-II\r\n', '0000-00-00 00:00:00', 1, 4),
(33, '8.Enumere o que deve ser feito para que o paciente tenha um bom equilíbrio e evolua para uma marcha livre.<br>( )Equilíbrio dinâmico com circuitos.<br>\r\n( )Equilíbrio de pé na prancha de equilíbrio e com apoio do terapeuta.<br>\r\n( )Equilíbrio estático sem apoio, sentado na bola suíça, eleva os MMSS e mantém a posição.\r\n', 'd) ( ) III-II-I\r\n', '0000-00-00 00:00:00', 0, 4),
(34, '9.Qual a sequência de evolução de um paciente que está evoluindo para uma marcha livre?', 'a)Barra, muleta, bengala e andador.\n', '0000-00-00 00:00:00', 0, 4),
(35, '9.Qual a sequência de evolução de um paciente que está evoluindo para uma marcha livre?', 'b)Barra, andador, muleta e bengala.\n', '0000-00-00 00:00:00', 1, 4),
(36, '9.Qual a sequência de evolução de um paciente que está evoluindo para uma marcha livre?', 'c)Muleta, barra, andador e bengala.\n', '0000-00-00 00:00:00', 0, 4),
(37, '9.Qual a sequência de evolução de um paciente que está evoluindo para uma marcha livre?', 'd)Muleta, andador, barra e bengala.\n', '0000-00-00 00:00:00', 0, 4),
(38, '10.Ao deambular, o paciente deambula o mesmo adota um padrão de marcha de extensão e rotação interna do quadril, extensão do joelho, flexão plantar, flexão dos dedos e inversão. Que tipo de marcha corresponde as características acima?', 'a) Marcha ceifante.\r\n', '0000-00-00 00:00:00', 1, 4),
(39, '10.Ao deambular, o paciente deambula o mesmo adota um padrão de marcha de extensão e rotação interna do quadril, extensão do joelho, flexão plantar, flexão dos dedos e inversão. Que tipo de marcha corresponde as características acima?', 'b) Marcha ébria.\r\n', '0000-00-00 00:00:00', 0, 4),
(40, '10.Ao deambular, o paciente deambula o mesmo adota um padrão de marcha de extensão e rotação interna do quadril, extensão do joelho, flexão plantar, flexão dos dedos e inversão. Que tipo de marcha corresponde as características acima?', 'c) Marcha atáxia vestibular.\r\n', '0000-00-00 00:00:00', 0, 4),
(41, '10.Ao deambular, o paciente deambula o mesmo adota um padrão de marcha de extensão e rotação interna do quadril, extensão do joelho, flexão plantar, flexão dos dedos e inversão. Que tipo de marcha corresponde as características acima?', 'd) Marcha vestibular.\r\n', '0000-00-00 00:00:00', 0, 4),
(42, '10.Ao deambular, o paciente deambula o mesmo adota um padrão de marcha de extensão e rotação interna do quadril, extensão do joelho, flexão plantar, flexão dos dedos e inversão. Que tipo de marcha corresponde as características acima?', 'e) Nenhuma das alternativas anteriores.\n', '0000-00-00 00:00:00', 0, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `resultado` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_resposta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `resultado`, `id_usuario`, `data_resposta`) VALUES
(1, 2, 8, 11, 16, 18, 25, 26, 32, 34, 41, 0, 2, '2017-11-28 08:00:00'),
(2, 2, 8, 11, 16, 18, 25, 26, 32, 34, 41, 0, 2, '2017-11-28 00:00:00'),
(3, 2, 7, 10, 15, 18, 23, 29, 31, 34, 40, 0, 2, '2017-12-05 00:36:57'),
(4, 3, 7, 9, 14, 18, 23, 27, 31, 36, 39, 0, 3, '2017-12-05 00:42:03'),
(5, 3, 6, 10, 15, 19, 24, 27, 32, 36, 41, 0, 4, '2017-12-05 00:49:06'),
(6, 1, 5, 10, 15, 19, 24, 28, 33, 34, 38, 0, 4, '2017-12-05 00:54:28'),
(7, 2, 5, 12, 15, 16, 21, 24, 28, 32, 36, 50, 2, '2017-12-08 00:40:01'),
(8, 2, 5, 9, 14, 18, 23, 26, 30, 37, 38, 30, 2, '2017-12-08 01:38:58'),
(9, 1, 5, 11, 15, 20, 24, 27, 32, 36, 41, 30, 2, '2017-12-08 01:41:37'),
(10, 3, 6, 10, 14, 19, 23, 26, 31, 37, 39, 10, 2, '2017-12-08 02:08:05'),
(11, 4, 8, 12, 16, 21, 25, 29, 33, 37, 42, 30, 2, '2017-12-08 16:05:53'),
(12, 1, 6, 11, 14, 19, 23, 29, 31, 36, 38, 20, 2, '2017-12-08 19:30:24'),
(13, 1, 8, 11, 14, 18, 25, 29, 33, 37, 39, 20, 2, '2017-12-09 04:48:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `data_usuario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `email`, `data_usuario`) VALUES
(1, 'leonardo reis', '2469', 'leonardoreis@gmail.com', '2017-11-20'),
(2, 'leo', '123', 'leo@gmail.com', '2017-11-28'),
(3, 'Iago Oliveira', '12345', 'iagop@gmail.com', '2017-12-05'),
(4, 'João Silva', '123', 'joao@gmail.com', '2017-12-05'),
(5, 'John Doe', '1234', 'john@email.com', '2017-12-08'),
(6, 'iago', '123', 'iago@email.com', '2017-12-09'),
(7, 'John Doe', '1234', 'john@email.com', '2017-12-09'),
(8, 'jorge', '123', 'jorge@jorge', '2017-12-09'),
(9, 'John Doe', '1234', 'jonh@gmail.com', '2017-12-09'),
(10, 'eu', '1234', 'eu@gmail.com', '2017-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
