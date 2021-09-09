-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 12:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uriexamples`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercicio`
--

CREATE TABLE `exercicio` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `class` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `level2pc` int(2) NOT NULL,
  `level` int(2) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `Observation` varchar(255) NOT NULL,
  `source` text NOT NULL,
  `uploader` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercicio`
--

INSERT INTO `exercicio` (`id`, `name`, `class`, `description`, `type`, `level2pc`, `level`, `status`, `Observation`, `source`, `uploader`) VALUES
(0, 'uno', 'Iniciante', '', 'E/S', 1, 1, 0, '', '\r\n dsg\r\n dsg\r\n dsg dsg\r\n\r\n dsg\r\n dsg\r\n dsg dsg\r\n\r\n dsg\r\n dsg\r\n dsg dsg\r\n\r\n dsg\r\n dsg\r\n dsg dsg\r\n\r\n dsg\r\n dsg\r\n dsg dsg\r\n\r\n dsg\r\n dsg\r\n dsg dsg\r\n dsg\r\n dsg\r\n dsg dsg\r\n dsg\r\n dsg\r\n dsg dsg\r\n\r\n dsg\r\n dsg\r\n dsg dsg\r\n dsg\r\n dsg\r\n dsg dsg\r\n\r\n', 'admin4'),
(1, '', 'Nível Iniciante.', '', 'Vetores e matrizes.', 0, 0, 0, '', ' ', ''),
(1002, 'soma impossivel', 'Geometria Comp.', 'muito dificil', 'E/S', 10, 10, 0, '', 'muito\\n\r\ndificil ', ''),
(1004, 'Produto Simples', 'Iniciante', 'Produto de 2 valores', 'E/S', 1, 1, 0, '', 'dsfgdgdteste\r\nteste\r\nteste\r\nteste\r\nteste\r\nteste', ''),
(1005, 'sem nome', 'Iniciante', 'sem descrição', 'E/S', 1, 2, 0, '', ' cdbdfbdf\r\ndfhdfj', ''),
(1007, 'Bubble Sort', 'AEd', 'forma de ordenação', 'Repetição', 5, 7, 0, '', ' #include <stdio.h>\r\n#include <stdlib.h>\r\n\r\nint main()\r\n{\r\n    const int N = 5;\r\n    int v[]= {9, 8, 4, 6, 3}, i, j, aux = 0;\r\n\r\n    for(i = 0; i < N; i++)\r\n        printf(\"%d\\n	\", v[i]);\r\n\r\n     printf(\"\r\n\");\r\n\r\n    for(i = 0; i < N-1; i++)\r\n    {\r\n\r\n        for(j = 0; j < N-1- i; j++)\r\n        {\r\n            if(v[j] > v[j+1])\r\n            {\r\n                aux = v[j];\r\n                v[j] = v[j+1];\r\n                v[j+1] = aux;\r\n            }\r\n        }\r\n    }\r\n\r\n    for(i = 0; i < N; i++)\r\n        printf(\"%d	\", v[i]);\r\n}', ''),
(1010, 'bvbsd', 'Grafo', 'bdfzbdf', 'Repetição', 0, 0, 0, '', ' bfdhfdhdf\r\nfdgdfhfdh\r\nfdhdfhdfhdf\r\nhfdhfdhfdhdfh\r\nfdhfdhdf\r\nhfdhdfhdf\r\nhfdhdfhdfhdfhfd\r\n', ''),
(1050, 'NomeNome', 'Alg & data struct.', 'hahaha', 'Repetição', 5, 3, 0, 'sem muitas observações', ' codigo\r\nlinha2\r\nhahaha', ''),
(1423, 'dfndfndfnfddffm', 'Nível Iniciante.', '', '', 0, 0, 0, '', '\n\r\nsim \n\n', 'admin4'),
(2355, '', 'Nível Iniciante.', '', '', 0, 0, 0, '', 'dssdh', 'admin4'),
(3246, '34567', 'Nível Iniciante.', '', '', 1, 1, 0, '', '<span style=\"color: #00aaaa\">int</span> <span style=\"color: #00aa00\">main</span>(){\r\n  <span style=\"color: #00aaaa\">int</span> var;\r\n\n\r\n}\r\n\r\n', 'admin4'),
(3450, 'dbbxcbcxbxc', 'D-HOC Program.', 'bcxbc', 'cxbcxb', 5, 5, 0, 'xbcxb', '<!-- HTML generated using hilite.me --><div style=\"background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;\"><pre style=\"margin: 0; line-height: 125%\"><span style=\"color: #007020\">print</span> <span style=\"background-color: #fff0f0\">&#39;hello world!&#39;</span>\r\n<span style=\"color: #007020\">print</span> <span style=\"background-color: #fff0f0\">&#39;hello world!&#39;</span>\r\n<span style=\"color: #007020\">print</span> <span style=\"background-color: #fff0f0\">&#39;hello world!&#39;</span>\r\n</pre></div>\r\n', ''),
(4565, 'asdfghjkloinmbv', 'Iniciante', 'asdfghjkloinmbvasdfghjkloinmbvkjgrtmljht', 'E/S', 7, 2, 0, '', ' asdfghjkloinmbv', ''),
(4584, '', 'Nível Iniciante.', '', '', 1, 1, 0, '', 'int main(){}\r\nprintf(\"%d\r\n\", sim)', ''),
(4685, 'gfjfgkgffgk', 'Nível Iniciante.', '', '', 0, 0, 0, '', '', 'admin4'),
(5465, 'fdndgnncvbn', 'Iniciante', 'vcncvnvcn', 'E/S', 6, 6, 0, '', ' hgfjhgfj\r\ngfjgfjfg\r\njgfjgfgf\r\njgfgfjsfg\r\nggncvbnxvcn\r\ncvmnbcmxbv', ''),
(5568, '', 'Nível Iniciante.', '', '', 0, 0, 0, '', '', 'admin4'),
(6489, 'Python', 'Nível Iniciante.', '', '', 0, 0, 0, '', '<span style=\"color: #0000aa\">import</span> <span style=\"color: #00aaaa; text-decoration: underline\">threading</span>\r\n<span style=\"color: #0000aa\">import</span> <span style=\"color: #00aaaa; text-decoration: underline\">time</span>\r\n<span style=\"color: #0000aa\">import</span> <span style=\"color: #00aaaa; text-decoration: underline\">random</span>\r\n<span style=\"color: #0000aa\">from</span> <span style=\"color: #00aaaa; text-decoration: underline\">multiprocessing</span> <span style=\"color: #0000aa\">import</span> Process, Queue, cpu_count\r\n\r\n<span style=\"color: #aaaaaa; font-style: italic\">#Barbeiro</span>\r\n<span style=\"color: #0000aa\">def</span> <span style=\"color: #00aa00\">barber</span>(queue):\r\n    <span style=\"color: #0000aa\">while</span> <span style=\"color: #0000aa\">True</span>:\r\n        queue.get()\r\n        <span style=\"color: #00aaaa\">print</span>(<span style=\"color: #aa5500\">&quot;Barbeiro Esta Cortando Cabelo&quot;</span>)\r\n        time.sleep(random.randint(<span style=\"color: #009999\">10</span>, <span style=\"color: #009999\">25</span>))\r\n\r\n<span style=\"color: #aaaaaa; font-style: italic\">#Cliente</span>\r\n<span style=\"color: #0000aa\">def</span> <span style=\"color: #00aa00\">customer</span>(queue):\r\n	<span style=\"color: #0000aa\">while</span> <span style=\"color: #0000aa\">True</span>:\r\n	    <span style=\"color: #00aaaa\">print</span>(<span style=\"color: #aa5500\">&quot;Cliente Esta em Espera&quot;</span>)\r\n	    queue.put(<span style=\"color: #aa5500\">&#39;Trabalhando&#39;</span>)\r\n	    time.sleep(random.randint(<span style=\"color: #009999\">1</span>, <span style=\"color: #009999\">3</span>)) \r\n\r\n<span style=\"color: #aaaaaa; font-style: italic\">#Classe de gerenciamento</span>\r\n<span style=\"color: #0000aa\">class</span> <span style=\"color: #00aa00; text-decoration: underline\">Manager</span>:\r\n    <span style=\"color: #0000aa\">def</span> <span style=\"color: #00aa00\">__init__</span>(<span style=\"color: #00aaaa\">self</span>):\r\n        <span style=\"color: #00aaaa\">self</span>.queue = Q', ''),
(6585, '548e986358648', 'Nível Iniciante.', '', '', 0, 0, 0, '', '\n', 'admin4'),
(6666, 're666666', 'Nível Iniciante.', '', '', 0, 0, 0, '', '', 'admin4'),
(7576, 'asdfghjkloiuytr', 'Geometria Comp.', 'asdfghjkloiuytrasdfghjkloiuytrjhytbcfepk', 'Vetores e matrizes', 10, 10, 0, '', 'asdfghjkloiuytr\r\nasdfghjkloiuytr\r\nasdfghjkloiuytr\r\nasdfghjkloiuytr\r\nasdfghjkloiuytr\r\nasdfghjkloiuytr\r\nasdfghjkloiuytr\r\nasdfghjkloiuytr\r\nasdfghjkloiuytr\r\nasdfghjkloiuytr\r\n; ', ''),
(7722, 'TESTE SUPREMO', 'Trat de String.', 'TESTE 1', 'sim', 2, 3, 0, 'testando...', '<html> oi\n </html>', ''),
(8765, 'sim e nãp', 'Nível Iniciante.', '', '', 1, 1, 0, '', '#include<stdio.h>\r\n#include<math.h>\r\n\r\n/** Função A Ser Executada **/\r\nfloat Funcao(float x){\r\n    return cos(x) - x*exp(x);\r\n}\r\n\r\n/** Método Regula Falsi **/\r\nvoid regulaFalsi(float *x, float x0, float x1, float fx0, float fx1, int *Interacoes){\r\n    *x = x0 - ((x1 - x0) / (fx1 - fx0))*fx0;\r\n    ++(*Interacoes);\r\n\r\n    printf(\"%d Intecacao, Valor = %7.5f \n\", *Interacoes, *x);\r\n}\r\n\r\nvoid main(){\r\n    int Interacoes = 0, MaxIteracoes;\r\n    float x0,x1,x2,x3,Erro;\r\n\r\n    printf(\"Entre com os Valores x0 & x1,Erro Maximo e Maximo de Interacoes:\n\");\r\n    scanf(\"%f %f %f %d\", &x0, &x1, &Erro, &MaxIteracoes);\r\n    regulaFalsi(&x2, x0, x1, Funcao(x0), Funcao(x1), &Interacoes);\r\n\r\n    do{\r\n        if(Funcao(x0)*Funcao(x2) < 0)\r\n            x1=x2;\r\n        else\r\n            x0=x2;\r\n\r\n        regulaFalsi(&x3, x0, x1, Funcao(x0), Funcao(x1), &Interacoes);\r\n\r\n        if(fabs(x3-x2) < Erro){\r\n            printf(\"\nApos %d Interacoes, Raiz = %6.4f\n\", Interacoes, x3);\r\n            return 0;\r\n        }\r\n\r\n        x2=x3;\r\n    }while (Interacoes < MaxIteracoes);\r\n\r\n    printf(\"\nSolucao nao converge, ou numero de iteracoes insuficiente.\\n\");\r\n    return 1;\r\n}', ''),
(8842, 'teste barra ene', 'Nível Iniciante.', '', '', 1, 1, 0, '', 'int main(){\r\nprintf(\"%d\\n\", oi);\r\n}', 'admin4'),
(57458, '', 'Nível Iniciante.', '', '', 0, 0, 0, '', '', 'admin4'),
(65658, '', 'Nível Iniciante.', '', '', 0, 0, 0, '', '\n', 'admin4');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`) VALUES
(0000000001, 'admin', '123'),
(0000000002, 'admin2', '202cb962ac59075b964b07152d234b70'),
(0000000003, 'admin4', '202cb962ac59075b964b07152d234b70'),
(0000000004, 'Admin 5', '81dc9bdb52d04dc20036dbd8313ed055'),
(0000000005, 'Admin 7', '202cb962ac59075b964b07152d234b70'),
(0000000006, 'USER1', '827ccb0eea8a706c4c34a16891f84e7b'),
(0000000007, 'USER2', '202cb962ac59075b964b07152d234b70'),
(0000000008, 'admin04', '202cb962ac59075b964b07152d234b70'),
(0000000009, 'Teste123', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
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
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
