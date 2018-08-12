-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2017 às 17:44
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compartilhagram`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `idfotos` int(11) NOT NULL,
  `caminho` varchar(45) NOT NULL,
  `legenda` varchar(45) DEFAULT NULL,
  `nomefoto` varchar(45) DEFAULT NULL,
  `usuarios_coduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`idfotos`, `caminho`, `legenda`, `nomefoto`, `usuarios_coduser`) VALUES
(6, '../fotos/ronan/unifeiDocs.png', 'unifei alguma coisa', 'unifeiDocs.png', 20),
(7, '../fotos/eu/download.jpg', 'cedaf', 'download.jpg', 15),
(8, '../fotos/eu/t.png', 'alguma coisa', 't.png', 15),
(9, '../fotos/nil/20170328_132217.jpg', 'ghjk', '20170328_132217.jpg', 21),
(10, '../fotos/nilza/i1.jpg', 'pensamento', 'i1.jpg', 22),
(11, '../fotos/tf/i1.jpg', 'algo', 'i1.jpg', 16),
(12, '../fotos/op/i1.jpg', 'olhos', 'i1.jpg', 34),
(13, '../fotos/ronan1/nova.png', 'olÃ¡', 'nova.png', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `idmensagens` int(11) NOT NULL,
  `mensagem` varchar(288) CHARACTER SET utf8 NOT NULL,
  `hora` datetime NOT NULL,
  `remetente` int(11) NOT NULL,
  `destinatario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`idmensagens`, `mensagem`, `hora`, `remetente`, `destinatario`) VALUES
(20, 'mensagem de eu para ronan, teste 1', '2017-11-29 22:40:30', 15, 20),
(21, 'mensagem de eu para tf, teste 1', '2017-11-29 22:40:42', 15, 16),
(22, 'mensagem de eu para as, teste 1', '2017-11-29 22:40:50', 15, 17),
(23, 'mensagem de eu para sd, teste 1', '2017-11-29 22:40:55', 15, 18),
(24, 'mensagem de eu para thiago, teste 1', '2017-11-29 22:41:05', 15, 19),
(25, 'mensagem de tf para eu, teste 1', '2017-11-29 22:41:31', 16, 15),
(26, 'mensagem de tf para as, teste 1', '2017-11-29 22:41:37', 16, 17),
(27, 'mensagem de tf para sd, teste 1', '2017-11-29 22:41:43', 16, 18),
(28, 'mensagem de tf para thiago, teste 1', '2017-11-29 22:41:53', 16, 19),
(29, 'mensagem de tf para ronan, teste 1', '2017-11-29 22:42:01', 16, 20),
(30, 'olÃ¡', '2017-11-29 22:51:15', 21, 15),
(31, 'tudo bem?', '2017-11-29 22:52:01', 15, 21),
(32, 'asdfg', '2017-11-29 22:52:59', 21, 15),
(33, 'sds\r\n', '2017-11-29 23:09:14', 21, 15),
(34, 'olÃ¡', '2017-11-30 00:10:29', 22, 21),
(35, 'oi, tudo jÃ³ia?', '2017-11-30 00:12:33', 15, 22),
(36, 'ASDFG', '2017-11-30 00:29:28', 15, 15),
(37, '25898', '2017-11-30 00:36:55', 15, 17),
(38, 'olÃ¡', '2017-11-30 08:38:34', 15, 18),
(39, 'Os formulÃ¡rios podem ser mais simples e rÃ¡pidos de serem construÃ­dos. Esse post visa dar algumas dicas Ãºteis no desenvolvimento de formulÃ¡rios variados, usando uma base versÃ¡til de HTML e CSS, com base na minha experiÃªncia no desenvolvimento de sites para clientes.', '2017-11-30 08:51:03', 15, 19),
(40, 'Eu te amo meu tudo', '2017-11-30 14:30:29', 25, 19),
(41, 'aloe', '2017-11-30 16:28:57', 16, 22),
(42, 'aloe', '2017-11-30 16:29:48', 16, 22),
(43, 'aloe', '2017-11-30 16:30:26', 16, 22),
(44, 'asas', '2017-11-30 16:31:41', 15, 18),
(45, 'asas', '2017-11-30 16:31:49', 15, 18),
(46, 'asas', '2017-11-30 16:32:08', 15, 18),
(47, 'vgrfvfegvrvrrvgb', '2017-11-30 17:14:56', 34, 18),
(48, 'me dÃ¡ ponto de graÃ§a', '2017-11-30 17:25:39', 34, 20),
(49, 'Para quem nÃ£o conhece, a tag label Ã© a tag mais apropriada para justamente \"rotular\" os campos de um formulÃ¡rio. O seu atributo for serve para associar o rÃ³tulo ao campo desejado. Assim, ao clicar no label, muitos navegadores tem como comportamento padrÃ£o focar no campo associado. A', '2017-11-30 17:30:16', 15, 18),
(50, 'Para botÃµes tipo \"radio\" e \"checkbox\", uso um label com a classe \"checkbox\". Assim, todo o campo, incluindo o rÃ³tulo e o botÃ£o, fica automaticamente clicÃ¡vel, melhorando a sua usabilidade (neste caso nÃ£o precisamos do atributo for):', '2017-11-30 17:30:29', 15, 23),
(51, 'Finalmente, para botÃµes de envio, gosto de usar a um pouco desconhecida tag button. Ela Ã© mais fÃ¡cil de trabalhar e de aplicar estilos que, por exemplo, uma tag input tipo \"submit\". Suas vantagens incluem uma aparÃªncia mais consistente entre navegadores e a possibilidade de inserir c', '2017-11-30 17:30:40', 15, 30),
(52, 'venda e troca', '2017-11-30 17:30:51', 15, 31),
(53, 'Finalmente, para botÃµes de envio, gosto de usar a um pouco desconhecida tag button. Ela Ã© mais fÃ¡cil de trabalhar e de aplicar estilos que, por exemplo, uma tag input tipo \"submit\". Suas vantagens incluem uma aparÃªncia mais consistente entre navegadores e a possibilidade de inserir c', '2017-11-30 17:31:32', 26, 15),
(54, '<form action=\"#\" method=\"post\">\r\n    <fieldset>\r\n        <fieldset class=\"grupo\">\r\n            <div class=\"campo\">\r\n                <label for=\"nome\">Nome</label>\r\n                <input type=\"text\" id=\"nome\" name=\"nome\" style=\"width: 10em\" value=\"\">\r\n            </div>\r\n            <div', '2017-11-30 17:31:45', 26, 15),
(55, 'olÃ¡', '2017-11-30 17:37:54', 35, 15),
(56, 'olÃ¡ rt', '2017-11-30 17:38:31', 35, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `coduser` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`coduser`, `usuario`, `nome`, `senha`) VALUES
(15, 'eu', 'EU', 'xxC9TW3tQXUUk'),
(16, 'tf', 'TF', 'xxC9TW3tQXUUk'),
(17, 'as', 'AS', 'xxC9TW3tQXUUk'),
(18, 'sd', 'SD', 'xxC9TW3tQXUUk'),
(19, 'thiago', 'THIAGO', 'xxC9TW3tQXUUk'),
(20, 'ronan', 'RONAN', 'xxC9TW3tQXUUk'),
(21, 'nil', 'NILSON', 'xxDTPhGgr.ffA'),
(22, 'nilza', 'NILZA', 'xxC9TW3tQXUUk'),
(23, 'amanda', 'AMANDA', 'xxC9TW3tQXUUk'),
(24, 'chinbinha', 'CHIBINHA', 'xxC9TW3tQXUUk'),
(25, 'princesa', 'LORENLAY', 'xxHBLj2hoWqfw'),
(26, 'sonia', 'SONIA HARUMI', 'xxC9TW3tQXUUk'),
(27, 'sun', 'SHE2000', 'xxC9TW3tQXUUk'),
(28, 'agm', 'ALGEUM', 'xxC9TW3tQXUUk'),
(29, 'asde', 'ASDFGHJU', 'xxC9TW3tQXUUk'),
(30, 'ola', 'OLA', 'xxC9TW3tQXUUk'),
(31, 'olx', 'OLX', 'xxiEtwSr1OTRE'),
(32, 'oli', 'OLI', 'xxC9TW3tQXUUk'),
(33, 'tr', 'TR', 'xxC9TW3tQXUUk'),
(34, 'op', 'OP', 'xxC9TW3tQXUUk'),
(35, 'ronan1', 'RONAN', 'xxC9TW3tQXUUk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`idfotos`,`usuarios_coduser`),
  ADD KEY `fk_fotos_usuarios1_idx` (`usuarios_coduser`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`idmensagens`,`remetente`,`destinatario`),
  ADD KEY `fk_mensagens_usuarios1_idx` (`remetente`),
  ADD KEY `fk_mensagens_usuarios2_idx` (`destinatario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`coduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `idfotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `idmensagens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `coduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_fotos_usuarios1` FOREIGN KEY (`usuarios_coduser`) REFERENCES `usuarios` (`coduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `fk_mensagens_usuarios1` FOREIGN KEY (`remetente`) REFERENCES `usuarios` (`coduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mensagens_usuarios2` FOREIGN KEY (`destinatario`) REFERENCES `usuarios` (`coduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
