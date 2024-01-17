-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2024 pada 08.48
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apli_ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `menu` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(60) NOT NULL DEFAULT '',
  `mod` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `menu`, `url`, `mod`) VALUES
(1, 'Halaman Utama', 'admin.php', 0),
(3, 'Pengaturan Menu', 'admin_menu.php', 0),
(4, 'Pengaturan Halaman', 'admin_pages.php', 0),
(23, 'Penyimpanan File', 'admin_files.php', 0),
(155, 'Keluar', '?aksi=logout', 0),
(22, 'Konfigurasi Website', 'admin_setting', 0),
(26, 'Database Pendaftar', 'alumnia&modul=yes', 0),
(2, 'Edit Password', 'admin_info.php', 0),
(6, 'Pengaturan Jurusan', 'jurusan&modul=yes', 0),
(27, 'Eksport Data Excel', 'cetak', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelombang_reg`
--

CREATE TABLE `gelombang_reg` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gelombang_reg`
--

INSERT INTO `gelombang_reg` (`id`, `nama`, `dari`, `sampai`) VALUES
(1, 'Gelombang 1 (Khusus Ketrampilan dan Boarding)', '2024-02-01', '2024-02-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(80) NOT NULL DEFAULT '',
  `konten` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `konten`) VALUES
(6, 'Tentang PPDB', '<p><!--[if gte mso 9]><xml> <w:WordDocument> <w:View>Normal</w:View> <w:Zoom>0</w:Zoom> <w:TrackMoves /> <w:TrackFormatting /> <w:PunctuationKerning /> <w:ValidateAgainstSchemas /> <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid> <w:IgnoreMixedContent>false</w:IgnoreMixedContent> <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText> <w:DoNotPromoteQF /> <w:LidThemeOther>EN-US</w:LidThemeOther> <w:LidThemeAsian>X-NONE</w:LidThemeAsian> <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript> <w:Compatibility> <w:BreakWrappedTables /> <w:SnapToGridInCell /> <w:WrapTextWithPunct /> <w:UseAsianBreakRules /> <w:DontGrowAutofit /> <w:SplitPgBreakAndParaMark /> <w:DontVertAlignCellWithSp /> <w:DontBreakConstrainedForcedTables /> <w:DontVertAlignInTxbx /> <w:Word11KerningPairs /> <w:CachedColBalance /> </w:Compatibility> <m:mathPr> <m:mathFont m:val=\"Cambria Math\" /> <m:brkBin m:val=\"before\" /> <m:brkBinSub m:val=\"--\" /> <m:smallFrac m:val=\"off\" /> <m:dispDef /> <m:lMargin m:val=\"0\" /> <m:rMargin m:val=\"0\" /> <m:defJc m:val=\"centerGroup\" /> <m:wrapIndent m:val=\"1440\" /> <m:intLim m:val=\"subSup\" /> <m:naryLim m:val=\"undOvr\" /> </m:mathPr></w:WordDocument> </xml><![endif]--></p>\r\n<p><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"\r\n  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"\r\n  LatentStyleCount=\"267\"> <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\" /> <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 7\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 8\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 9\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 1\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 2\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 3\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 4\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 5\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 6\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 7\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 8\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 9\" /> <w:LsdException Locked=\"false\" Priority=\"35\" QFormat=\"true\" Name=\"caption\" /> <w:LsdException Locked=\"false\" Priority=\"10\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Title\" /> <w:LsdException Locked=\"false\" Priority=\"1\" Name=\"Default Paragraph Font\" /> <w:LsdException Locked=\"false\" Priority=\"11\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtitle\" /> <w:LsdException Locked=\"false\" Priority=\"22\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Strong\" /> <w:LsdException Locked=\"false\" Priority=\"20\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Emphasis\" /> <w:LsdException Locked=\"false\" Priority=\"59\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Table Grid\" /> <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Placeholder Text\" /> <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"No Spacing\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 1\" /> <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Revision\" /> <w:LsdException Locked=\"false\" Priority=\"34\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"List Paragraph\" /> <w:LsdException Locked=\"false\" Priority=\"29\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Quote\" /> <w:LsdException Locked=\"false\" Priority=\"30\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Quote\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"19\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Emphasis\" /> <w:LsdException Locked=\"false\" Priority=\"21\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Emphasis\" /> <w:LsdException Locked=\"false\" Priority=\"31\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Reference\" /> <w:LsdException Locked=\"false\" Priority=\"32\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Reference\" /> <w:LsdException Locked=\"false\" Priority=\"33\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Book Title\" /> <w:LsdException Locked=\"false\" Priority=\"37\" Name=\"Bibliography\" /> <w:LsdException Locked=\"false\" Priority=\"39\" QFormat=\"true\" Name=\"TOC Heading\" /> </w:LatentStyles> </xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:\"Table Normal\";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-qformat:yes;\r\n	mso-style-parent:\"\";\r\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n	mso-para-margin-top:0cm;\r\n	mso-para-margin-right:0cm;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0cm;\r\n	line-height:115%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:\"Calibri\",\"sans-serif\";\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:\"Times New Roman\";\r\n	mso-bidi-theme-font:minor-bidi;}\r\n</style>\r\n<![endif]--></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: arial; font-size: medium;\">Situs ini dipersiapkan sebagai pengganti pusat informasi dan\r\npengolahan seleksi data siswa PPDB <span class=\"js-kota-lengkap\">SMK\r\nBhakti Mulia Wonogiri</span> Tahun Pelajaran <span class=\"js-tahun-ajaran\">2016/2017</span> secara online real time process. Informasi lengkap seputar pelaksanaan PPDB\r\nakan di update di situs ini.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial;\">&nbsp;</span></p>'),
(30, 'Info Pembukaan PPDB', '<p><span style=\"font-size: medium;\">&nbsp;&nbsp; SYARAT PERLENGKAPAN :</span></p>\r\n<p><span style=\"font-size: medium;\"> </span></p>\r\n<ol>\r\n<li><span style=\"font-size: medium;\">Warga Negara Indonesia</span></li>\r\n<li><span style=\"font-size: medium;\">Umur maksimal 21 tahun</span></li>\r\n<li><span style=\"font-size: medium;\">Berbadan sehat, tidak cacat fisik</span></li>\r\n<li><span style=\"font-size: medium;\">Belum menikah dan tidak boleh menikah selama pendidikan.</span></li>\r\n<li><span style=\"font-size: medium;\">Biaya Pendaftaran Rp.100.000,- (serta membawa registrasi PPDB Online masing-masing calon pendaftar)</span></li>\r\n<li><span style=\"font-size: medium;\">Mengisi/mengentri formulir pendaftaran secara Online.</span></li>\r\n<li><span style=\"font-size: medium;\">menyerahkan fotocoy ijazah/STTB SLTP/MTs yang telah dilegalisir atau fotocopy Raport Semester 1 - 5 yang dilegalisir sekolah.</span></li>\r\n<li><span style=\"font-size: medium;\">Menyerahkan foto hitam putih 3 x 4 = 3 lembar</span></li>\r\n<li><span style=\"font-size: medium;\">Surat Keterangan Berbadan sehat dari dokter RSUD/Puskesmas Setempat </span></li>\r\n<li><span style=\"font-size: medium;\">Surat Keterangan TIDAK BUTA WARNA dari dokter </span></li>\r\n</ol>\r\n<p><span style=\"font-size: medium;\"> </span></p>\r\n<p><span style=\"font-size: medium;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size: medium;\">WAKTU PENDAFTARAN :</span></p>\r\n<p><span style=\"font-size: medium;\"> </span></p>\r\n<p><span style=\"font-size: medium;\"><br /></span></p>\r\n<p><span style=\"font-size: medium;\"> </span></p>\r\n<p><span style=\"font-size: medium;\"><br /></span></p>\r\n<p><span style=\"font-size: medium;\"> </span></p>\r\n<p><span style=\"font-size: medium;\">&nbsp;&nbsp;&nbsp; ALUR PELAKSANAAN TEST</span></p>\r\n<p><span style=\"font-size: medium;\"> </span></p>\r\n<ol>\r\n<li><span style=\"font-size: medium;\">Test Tertulis = jam 08.00 - selesai</span></li>\r\n<li><span style=\"font-size: medium;\">Wawancara/interview</span></li>\r\n<li><span style=\"font-size: medium;\">Pengumuman</span></li>\r\n<li><span style=\"font-size: medium;\">Daftar Ulang</span><span style=\"font-size: medium;\"><br /></span></li>\r\n</ol>\r\n<p><span style=\"font-size: medium;\"> </span></p>\r\n<p><span style=\"font-size: medium;\">&nbsp;</span></p>\r\n<p><span style=\"font-size: medium;\"> </span></p>\r\n<div class=\"frame-foot\">\r\n<table style=\"height: 18px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"462\">\r\n<tbody>\r\n<tr>\r\n<td><span style=\"font-size: medium;\">&nbsp;</span></td>\r\n<td align=\"right\" valign=\"middle\"><span style=\"font-size: medium;\"><br /></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>'),
(1, 'PPDB Online SMK Bhakti Mulia', '<table id=\"_mc_tmp\" style=\"text-align: right; height: 181px;\" border=\"0\" width=\"127\" align=\"right\">\r\n<tbody>\r\n<tr>\r\n<td><img style=\"float: right; margin-left: 5px; margin-right: 5px;\" src=\"simpan/Sutardi S.Pd.MM.JPG\" alt=\"\" width=\"129\" height=\"173\" /></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\"><span style=\"font-size: xx-small;\"><strong>Sutardi S.Pd.MM</strong></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Puji syukur Kami Panjatkan Kehadirat Allah SWT atas selesainya Web Site ini. Saya ucapkan terima kasih kepada team pembuat web site&nbsp; yang telah menuangkan ide pembuatan dan dengan susah payah telah menyelesaikannya. Walaupun web ini masih sangat sederhana, namun semoga dapat&nbsp; memberikan sedikit informasi kepada orang tua/wali murid khususnya dan masyarakat pada umumnya, di samping itu semoga akan memberikan manfaat bagi guru, siswa, alumni,&nbsp; serta siapa saja yang ingin mendapatkan segala sesuatu informasi yang ada di dalam website ini. Jika diinginkan Anda bisa mendownload dari apa yang Anda perlukan dalam web ini. Tak lupa kami ucapkan terima kasih kepada dewan guru dan semua yang memiliki kepedulian terhadap perkembangan Sekolah yang telah mensuport pembuatan web ini, semua karya, artikel atau apa saja dari guru ataupun siswa akan dimuat dalam web ini. Harapan semoga web ini semakin lama akan semakin berkembang sesuai tuntutan sekarang ini.</p>\r\n<p style=\"text-align: justify;\"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian kata sambutan dari Kami, Marilah Kita Belajar dan belajar terus untuk pengembangan</p>\r\n<p style=\"text-align: justify;\">diri demi peningkatan kualitas Pendidikan di Negeri ini.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(31, 'Persyaratan dan Biaya', '<p>PERSYARATAN DAFTAR ULANG</p>\r\n<p>TIDAK BUTA WARNA</p>\r\n<p>SANGGUP MEMATUHI ADMINISTRASI SMK BHAKTI MULIA WONOGIRI</p>');
INSERT INTO `halaman` (`id`, `judul`, `konten`) VALUES
(32, 'Alur Proses Pendaftaran', '<p><!--[if gte mso 9]><xml> <w:WordDocument> <w:View>Normal</w:View> <w:Zoom>0</w:Zoom> <w:TrackMoves /> <w:TrackFormatting /> <w:PunctuationKerning /> <w:ValidateAgainstSchemas /> <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid> <w:IgnoreMixedContent>false</w:IgnoreMixedContent> <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText> <w:DoNotPromoteQF /> <w:LidThemeOther>EN-US</w:LidThemeOther> <w:LidThemeAsian>X-NONE</w:LidThemeAsian> <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript> <w:Compatibility> <w:BreakWrappedTables /> <w:SnapToGridInCell /> <w:WrapTextWithPunct /> <w:UseAsianBreakRules /> <w:DontGrowAutofit /> <w:SplitPgBreakAndParaMark /> <w:DontVertAlignCellWithSp /> <w:DontBreakConstrainedForcedTables /> <w:DontVertAlignInTxbx /> <w:Word11KerningPairs /> <w:CachedColBalance /> </w:Compatibility> <m:mathPr> <m:mathFont m:val=\"Cambria Math\" /> <m:brkBin m:val=\"before\" /> <m:brkBinSub m:val=\"--\" /> <m:smallFrac m:val=\"off\" /> <m:dispDef /> <m:lMargin m:val=\"0\" /> <m:rMargin m:val=\"0\" /> <m:defJc m:val=\"centerGroup\" /> <m:wrapIndent m:val=\"1440\" /> <m:intLim m:val=\"subSup\" /> <m:naryLim m:val=\"undOvr\" /> </m:mathPr></w:WordDocument> </xml><![endif]--></p>\r\n<p><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"\r\n  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"\r\n  LatentStyleCount=\"267\"> <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\" /> <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 7\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 8\" /> <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 9\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 1\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 2\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 3\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 4\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 5\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 6\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 7\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 8\" /> <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 9\" /> <w:LsdException Locked=\"false\" Priority=\"35\" QFormat=\"true\" Name=\"caption\" /> <w:LsdException Locked=\"false\" Priority=\"10\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Title\" /> <w:LsdException Locked=\"false\" Priority=\"1\" Name=\"Default Paragraph Font\" /> <w:LsdException Locked=\"false\" Priority=\"11\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtitle\" /> <w:LsdException Locked=\"false\" Priority=\"22\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Strong\" /> <w:LsdException Locked=\"false\" Priority=\"20\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Emphasis\" /> <w:LsdException Locked=\"false\" Priority=\"59\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Table Grid\" /> <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Placeholder Text\" /> <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"No Spacing\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 1\" /> <w:LsdException Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Revision\" /> <w:LsdException Locked=\"false\" Priority=\"34\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"List Paragraph\" /> <w:LsdException Locked=\"false\" Priority=\"29\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Quote\" /> <w:LsdException Locked=\"false\" Priority=\"30\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Quote\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 1\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 2\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 3\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 4\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 5\" /> <w:LsdException Locked=\"false\" Priority=\"60\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"61\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light List Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"62\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"63\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"64\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"65\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"66\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"67\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"68\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"69\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"70\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Dark List Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"71\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"72\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"73\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 6\" /> <w:LsdException Locked=\"false\" Priority=\"19\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Emphasis\" /> <w:LsdException Locked=\"false\" Priority=\"21\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Emphasis\" /> <w:LsdException Locked=\"false\" Priority=\"31\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Reference\" /> <w:LsdException Locked=\"false\" Priority=\"32\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Reference\" /> <w:LsdException Locked=\"false\" Priority=\"33\" SemiHidden=\"false\"\r\n   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Book Title\" /> <w:LsdException Locked=\"false\" Priority=\"37\" Name=\"Bibliography\" /> <w:LsdException Locked=\"false\" Priority=\"39\" QFormat=\"true\" Name=\"TOC Heading\" /> </w:LatentStyles> </xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:\"Table Normal\";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-qformat:yes;\r\n	mso-style-parent:\"\";\r\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n	mso-para-margin-top:0cm;\r\n	mso-para-margin-right:0cm;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0cm;\r\n	line-height:115%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:\"Calibri\",\"sans-serif\";\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:\"Times New Roman\";\r\n	mso-bidi-theme-font:minor-bidi;}\r\n</style>\r\n<![endif]--></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Calon peserta yang akan mengisi\r\nBiodata online harus memperhatikan beberapa hal sebagai berikut : </span></p>\r\n<ol type=\"1\">\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; margin-bottom: 12.0pt; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">No Peserta PPDB didapat setelah siswa login menggunakan\r\n     NO NISN dan PASSWORD <span style=\"mso-spacerun: yes;\">&nbsp;</span><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"text-decoration: underline;\">harus diingat</span></strong> <span style=\"mso-spacerun: yes;\">&nbsp;</span>(untuk login pada Daftar Sekarang klik\r\n     tombol <span style=\"mso-spacerun: yes;\">&nbsp;</span>&ldquo;Register\" di sebelah\r\n     kanan) kemudian login lagi untuk mengisi biodata/Kelengkapan formulir\r\n     pendaftaran secara online .</span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; margin-bottom: 12.0pt; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Simpan baik-baik <strong>No Peserta, No Jurnal/No Tagihan,\r\n     dan PIN </strong>yang Anda dapatkan. Ketiga hal tersebut merupakan identitas\r\n     peserta PPDB SMK BHAKTI MULIA untuk digunakan pada seluruh proses seleksi PPDB\r\n     SMK BHAKTI MULIA, seperti Pengisian Biodata Online, Pencetakan Kartu\r\n     Peserta Ujian, dan Sebagai bukti tanda peserta ketika melakukan registrasi\r\n     siswa baru apabila Anda diterima</span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; margin-bottom: 12.0pt; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Pengisian Biodata hanya diijinkan SATU KALI saja, dan\r\n     tidak diberikan fasilitas untuk melakukan perubahan/perbaikan (EDIT) isian\r\n     Biodata terhadap data yang sudah diisikan secara online. </span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Terkait point 4 di atas, sebelum melakukan pengisian\r\n     Biodata online sebaiknya calon peserta sudah mempersiapkan dokumen sebagai\r\n     berikut : </span><ol type=\"a\">\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level2 lfo1; tab-stops: list 72.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Biodata pribadi lengkap </span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level2 lfo1; tab-stops: list 72.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Data asal pendidikan (Ijasah &amp; SKHU, Nilai UN, Matematika, Bhs.Inggris, Bhs.Indonesia )</span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level2 lfo1; tab-stops: list 72.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Data pribadi orangtua/wali (alamat, penghasilan)</span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level2 lfo1; tab-stops: list 72.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Pilihan program studi dan kemampuan besaran biaya Dana\r\n      Pengembangan Pendidikan</span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level2 lfo1; tab-stops: list 72.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Hasil scan atau file pas foto berwarna 3x4 dengan\r\n      ukuran maksimal 100 kbyte dan format JPG. <strong>Pas foto harus menggunakan\r\n      pakaian dan pose formal untuk kebutuhan akademik.</strong> Tata cara mengubah\r\n      ukuran foto ada pada penjelasan selanjutnya.</span></li>\r\n</ol></li>\r\n</ol>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 36.0pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">&nbsp;</span></p>\r\n<ol type=\"1\">\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; margin-bottom: 12.0pt; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Untuk dapat mengikuti ujian, peserta harus dapat\r\n     menunjukkan KARTU PESERTA Registrasi Online PPDB yang tercetak sebagai persyaratan. Kartu peserta PPDB\r\n     bisa dapat dengan cara di download kemudian di cetak. </span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; margin-bottom: 12.0pt; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Bagi calon peserta seleksi <strong><span style=\"text-decoration: underline;\">wajib mencetak KARTU\r\n     BUKTI PENDAFTARAN</span></strong>. KARTU BUKTI PENDAFTARAN dapat didownload dan\r\n     dicetak.</span></li>\r\n<li class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">Informasi lebih lanjut : <br /> <strong>Sekertariat SMK BHAKTI MULIA WONOGIRI</strong><br /> Jl. Gunung Gandul Joho Lor Rt.02/05 Giriwono Wonogiri <br /> Telp. 0273-322235, Fax.</span><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\"><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">0273-322235</span></span> </span><br /><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;\">&nbsp;http://www.ppdb.smkbhaktimuliawng.sch.id. <br />&nbsp;Email : bhaktimulia@ymail.com </span></li>\r\n</ol>\r\n<p>.</p>\r\n<p>&nbsp;</p>'),
(33, 'Pengumuman Lulus', '<p>PENGUMUMAN CALON SISWA BARU TAHUN DIKLAT 2016/2017</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_tes`
--

CREATE TABLE `jadwal_tes` (
  `id` int(11) NOT NULL,
  `sesi` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(100) NOT NULL,
  `id_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal_tes`
--

INSERT INTO `jadwal_tes` (`id`, `sesi`, `tanggal`, `jam`, `id_ruangan`) VALUES
(11, 1, '2024-02-24', '10.00 - 12.00', 1),
(12, 2, '2024-02-24', '13.00 - 15.00', 1),
(13, 1, '2024-02-24', '10.00 - 12.00', 2),
(14, 2, '2024-02-24', '13.00 - 15.00', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(30) NOT NULL,
  `kode` varchar(60) NOT NULL DEFAULT '',
  `nama` varchar(60) NOT NULL DEFAULT '',
  `tampung` int(60) NOT NULL,
  `rekap` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode`, `nama`, `tampung`, `rekap`) VALUES
(4, 'TB', 'Tata Busana', 72, ''),
(6, 'DIPF', 'Desain Interior dan Produk Furniture', 54, ''),
(7, 'OTO', 'Teknik dan Bisnis Sepeda Motor', 18, ''),
(8, 'TPL', 'Teknik Pemesinan dan Pengelasan', 36, ''),
(10, 'MUL', 'Multimedia', 36, ''),
(11, 'SBS', 'Science Boarding School (Khusus Putri)', 36, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kuota` int(50) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `kuota`, `create_at`) VALUES
(1, 'Ruangan Komputer 1', 25, '2024-01-15 15:51:45'),
(2, 'Ruangan Komputer 2', 25, '2024-01-15 15:52:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_bayar`
--

CREATE TABLE `konfirmasi_bayar` (
  `id_kon` int(255) NOT NULL,
  `nisn_siswa` varchar(22) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `nominal` int(255) NOT NULL,
  `bank_asal` varchar(500) NOT NULL,
  `an_asal` varchar(500) NOT NULL,
  `bank_tujuan` varchar(500) NOT NULL DEFAULT 'BPD JATENG No Rek 2011047966',
  `status_bayar` int(5) NOT NULL,
  `tgl_inp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `konfirmasi_bayar`
--

INSERT INTO `konfirmasi_bayar` (`id_kon`, `nisn_siswa`, `tanggal`, `jam`, `nominal`, `bank_asal`, `an_asal`, `bank_tujuan`, `status_bayar`, `tgl_inp`) VALUES
(2, '256256', '2020-04-09', '17:42:00', 200000, 'BCA', 'okky', 'BPD JATENG No Rek 2011047966', 1, '2020-04-09 17:43:56'),
(3, '123456', '2020-04-09', '12:22:00', 300000, 'Mandiri', 'Yose', 'BPD JATENG No Rek 2011047966', 1, '2020-04-09 18:02:57'),
(4, '0046033924', '2020-06-08', '11:23:00', 2900000, '', '', 'BPD JATENG No Rek 2011047966', 1, '2020-06-08 11:44:20'),
(6, '0057002978', '2021-06-30', '19:11:00', 2900000, 'maybank', 'angga kusmanto', 'BPD JATENG No Rek 2011047966', 0, '2021-06-30 19:15:02'),
(7, '212212', '2022-11-09', '08:07:00', 25000000, 'Maybank', 'Pandu', 'BPD JATENG No Rek 2011047966', 1, '2022-11-17 15:42:05'),
(8, '123', '2022-11-16', '05:04:00', 2000000, 'maybank', 'panduu', 'BPD JATENG No Rek 2011047966', 1, '2022-11-18 08:58:10'),
(9, '0081322453', '2022-11-18', '08:47:00', 2500000, 'BRI', 'Weda setyawan', 'BPD JATENG No Rek 2011047966', 1, '2022-11-18 09:36:06'),
(10, '22', '2022-11-21', '03:15:00', 2000000, 'bri', 'pandu', 'BPD JATENG No Rek 2011047966', 1, '2022-11-21 15:23:28'),
(11, '11223345', '2022-11-22', '15:04:00', 25000000, 'bri', 'Pandu', 'BPD JATENG No Rek 2011047966', 1, '2022-11-23 17:02:50'),
(12, '909090', '2022-11-22', '15:04:00', 250000000, 'bri', 'Panduu', 'BPD JATENG No Rek 2011047966', 1, '2022-11-23 17:28:09'),
(13, '55555', '2022-12-01', '12:30:00', 250000000, 'bri', 'nira saja', 'BPD JATENG No Rek 2011047966', 0, '2022-12-01 13:27:56'),
(14, '5555555555', '2022-12-01', '00:00:00', 2500000, 'bni', 'a', 'BPD JATENG No Rek 2011047966', 1, '2022-12-01 13:58:07'),
(15, '19861997', '2022-12-01', '16:40:00', 2500000, 'BRI', 'Muhammad abdul rahman', 'BPD JATENG No Rek 2011047966', 1, '2022-12-01 16:33:58'),
(16, '44', '2022-12-10', '15:15:00', 200000, 'bri', 'p', 'BPD JATENG No Rek 2011047966', 0, '2022-12-08 11:14:44'),
(17, '0089881424', '2022-12-17', '01:02:00', 2500000, 'bri', 'Muhammad Fardhan', 'BPD JATENG No Rek 2011047966', 1, '2022-12-20 22:11:34'),
(19, '0073263559', '2022-12-20', '10:10:00', 2500000, 'bri', 'Bunga', 'BPD JATENG No Rek 2011047966', 1, '2022-12-20 22:26:30'),
(20, '0088732757', '2023-06-01', '19:23:00', 250000000, 'Bank BRI', 'NUNIEK YULIASTUTI', 'BPD JATENG No Rek 2011047966', 1, '2023-06-01 19:35:14'),
(21, '0083882560', '2023-06-23', '19:35:00', 2500000, 'BSI', 'Sintin Khotijah Pribadi', 'BPD JATENG No Rek 2011047966', 0, '2023-06-23 19:45:15'),
(22, '0065481010', '2023-06-23', '19:48:00', 2500000, 'BSI', 'Sintin Khotijah Pribadi', 'BPD JATENG No Rek 2011047966', 0, '2023-06-23 19:49:26'),
(23, '0088458407', '2023-06-28', '14:52:00', 2500000, 'Bank Central Asia ( BCA)', 'Widya Cahyanti', 'BPD JATENG No Rek 2011047966', 0, '2023-06-28 14:56:28'),
(24, '0075052056', '2023-07-03', '17:30:00', 2500000, 'Bank Jateng', 'Sutrono', 'BPD JATENG No Rek 2011047966', 0, '2023-07-01 12:14:13'),
(25, '2098847', '2023-11-08', '05:05:00', 100000, 'Btn', 'Gaja', 'BPD JATENG No Rek 2011047966', 0, '2023-11-08 23:15:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(2) NOT NULL,
  `menu` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(127) NOT NULL DEFAULT '',
  `published` int(1) NOT NULL DEFAULT 1,
  `ordering` int(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `menu`, `url`, `published`, `ordering`) VALUES
(1, 'Beranda', 'index.php', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_users`
--

CREATE TABLE `menu_users` (
  `id` int(6) NOT NULL,
  `menu` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `menu_users`
--

INSERT INTO `menu_users` (`id`, `menu`, `url`) VALUES
(111, 'Keluar', 'index.php?aksi=logout'),
(2, 'Ubah Password', 'index.php?pilih=user&amp;aksi=change'),
(12, 'Jumlah Pendaftar', 'index.php?pilih=jurusan&modul=yes'),
(13, 'Daftar Sekarang', 'index.php?pilih=alumnia&modul=yes&action=edit&user=\'.$user.\''),
(24, 'Rangking Sementara', '#'),
(25, 'Pengumuman Lulus', '#'),
(16, 'Status Pendaftaran', '?pilih=nilai&modul=yes&act=nilai&sid=5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mod_data_alumnia`
--

CREATE TABLE `mod_data_alumnia` (
  `id` bigint(11) NOT NULL,
  `nisn` varchar(26) NOT NULL,
  `jurusan` varchar(60) NOT NULL DEFAULT '''Belum dipilih''',
  `nama` varchar(60) NOT NULL DEFAULT '',
  `lahir` varchar(20) NOT NULL DEFAULT '''''',
  `tgl` varchar(22) NOT NULL,
  `bln` varchar(22) NOT NULL,
  `thn` varchar(22) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nok` varchar(30) NOT NULL,
  `kip` varchar(30) NOT NULL,
  `kelamin` varchar(20) NOT NULL DEFAULT '''''',
  `akta` varchar(25) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `tinggi` varchar(15) NOT NULL,
  `berat` varchar(15) NOT NULL,
  `tato` varchar(15) NOT NULL,
  `penyakit` varchar(15) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL DEFAULT '',
  `sem_i` varchar(22) NOT NULL,
  `rata_i` varchar(22) NOT NULL,
  `sem_ii` varchar(22) NOT NULL,
  `rata_ii` varchar(22) NOT NULL,
  `sem_iii` varchar(22) NOT NULL,
  `rata_iii` varchar(22) NOT NULL,
  `sem_iv` varchar(22) NOT NULL,
  `rata_iv` varchar(22) NOT NULL,
  `sem_v` varchar(22) NOT NULL,
  `rata_v` varchar(22) NOT NULL,
  `indo` varchar(22) NOT NULL,
  `ing` varchar(22) NOT NULL,
  `mat` varchar(22) NOT NULL,
  `ipa` varchar(22) NOT NULL,
  `alamat` varchar(255) NOT NULL DEFAULT '',
  `rt` varchar(15) NOT NULL,
  `rw` varchar(15) NOT NULL,
  `dusun` varchar(22) NOT NULL,
  `kelurahan` varchar(22) NOT NULL,
  `kecamatan` varchar(22) NOT NULL,
  `kabupaten` varchar(22) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `kerja_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `kerja_ibu` varchar(50) NOT NULL,
  `gaji_dr` varchar(20) NOT NULL,
  `gaji_sm` varchar(20) NOT NULL,
  `hp` varchar(15) NOT NULL DEFAULT '',
  `pretasi` enum('','Ya','Tidak') NOT NULL,
  `peringkat` enum('','1','2','3') NOT NULL,
  `hafal` enum('','Ya','Tidak') NOT NULL,
  `jmljuz` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `lulus` varchar(22) NOT NULL DEFAULT 'Tidak Lulus',
  `valid` varchar(20) NOT NULL DEFAULT 'Belum Diverifikasi',
  `tahap` varchar(1) NOT NULL DEFAULT '1',
  `date_add` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `mod_data_alumnia`
--

INSERT INTO `mod_data_alumnia` (`id`, `nisn`, `jurusan`, `nama`, `lahir`, `tgl`, `bln`, `thn`, `nik`, `nok`, `kip`, `kelamin`, `akta`, `agama`, `tinggi`, `berat`, `tato`, `penyakit`, `asal_sekolah`, `sem_i`, `rata_i`, `sem_ii`, `rata_ii`, `sem_iii`, `rata_iii`, `sem_iv`, `rata_iv`, `sem_v`, `rata_v`, `indo`, `ing`, `mat`, `ipa`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kabupaten`, `nama_ayah`, `kerja_ayah`, `nama_ibu`, `kerja_ibu`, `gaji_dr`, `gaji_sm`, `hp`, `pretasi`, `peringkat`, `hafal`, `jmljuz`, `foto`, `lulus`, `valid`, `tahap`, `date_add`) VALUES
(1705305981, '456456', 'Desain Interior dan Produk Furniture', 'Okky Hernanto', 'Kediri', '20', 'Oktober', '2001', '331122112222111', '3313122548771', '', 'Laki-laki', '112233665845', 'Kristen', '123', '23', 'Tidak Ada', '-', 'Sekolah Asal', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Kedungjeruk', '02', '15', 'Kedungjeruk', 'Kedungjeruk', 'Mojogedang', 'Karanganyar', 'Bapak', 'fghfgh', 'Ibu', 'asdad', '10000000', '1000000000', '082136273055', 'Ya', '1', 'Ya', 'Lebih dari 5 juz', 'uploads/65a4e81229459.png', 'Sudah Diterima', 'Sudah Diverifikasi', '3', '2024-01-15'),
(1705308818, '888888', '\'Belum dipilih\'', 'ichwan media', '\'\'', '', '', '', '', '', '', '\'\'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tidak Lulus', 'Belum Diverifikasi', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `UserId` bigint(11) NOT NULL,
  `user` varchar(26) NOT NULL DEFAULT '',
  `password` text NOT NULL,
  `email` varchar(250) NOT NULL DEFAULT 'user@websitedemo.com',
  `level` enum('Administrator','Editor','User') NOT NULL DEFAULT 'User',
  `tipe` varchar(250) NOT NULL DEFAULT 'aktif',
  `lastlog` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`UserId`, `user`, `password`, `email`, `level`, `tipe`, `lastlog`) VALUES
(1, 'adminsmk', '$2y$10$MRsQ4YrLxM8Jo13SGKXCguQzR8ZXh.MT9vGQsgmti/Whrg1DZ2z4a', 'user@websitedemo.com', 'Administrator', 'aktif', '2024-01-17 07:30:05'),
(1705305981, '456456', '$2y$10$fmsL4eJ1R12NLKyn1Eh.iukgdE/0Ev4.De4ZLQXEQY8BlEA6iEtbe', 'user@websitedemo.com', 'User', 'aktif', '2024-01-17 08:46:37'),
(1705308818, '888888', '$2y$10$MTl22eYiI.Yf/nTteikYQ.5dZIzQnHr2X0OYkj9D3tQ21saNIx9yS', 'user@websitedemo.com', 'User', 'aktif', '2024-01-17 03:30:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pendaftaran` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `nis` varchar(26) NOT NULL,
  `nisn` varchar(26) NOT NULL,
  `nama_siswa` varchar(60) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `kelulusan` enum('Lulus','Tidak Lulus') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posted_ip`
--

CREATE TABLE `posted_ip` (
  `id` bigint(21) NOT NULL,
  `file` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(100) NOT NULL DEFAULT '',
  `time` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `posted_ip`
--

INSERT INTO `posted_ip` (`id`, `file`, `ip`, `time`) VALUES
(103, 'alumni', '188.143.232.70', 1483722301),
(102, 'alumni', '188.143.232.37', 1471003334),
(101, 'alumni', '120.169.255.77', 1470329894),
(100, 'alumni', '114.120.237.252', 1466049885),
(99, 'contact', '202.67.46.25', 1464782103),
(104, 'alumni', '120.188.78.81', 1586067462),
(105, 'alumni', '36.81.5.177', 1586150934);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor`
--

CREATE TABLE `sensor` (
  `id` bigint(20) NOT NULL,
  `word` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `sensor`
--

INSERT INTO `sensor` (`id`, `word`) VALUES
(1, 'Kontol'),
(2, 'Anjing'),
(3, 'Anjeng'),
(4, 'anjrit'),
(5, 'memek'),
(6, 'tempek'),
(7, 'Bangsat'),
(8, 'fuck'),
(9, 'eSDeCe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stat_browse`
--

CREATE TABLE `stat_browse` (
  `pjudul` varchar(255) NOT NULL DEFAULT '',
  `ppilihan` text NOT NULL,
  `pjawaban` text NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `stat_browse`
--

INSERT INTO `stat_browse` (`pjudul`, `ppilihan`, `pjawaban`, `id`) VALUES
('Browser yang sering digunakan dalam mengakses halaman ini', 'Netscape#Opera#MSIE 4.0#MSIE 5.0#MSIE 6.0#Lynx#WebTV#Konqueror#bot#Other', '15766#396#0#2#366#0#0#0#1712#678', 1),
('Operating system', 'Windows#Mac#Linux#FreeBSD#SunOS#IRIX#BeOS#OS/2#AIX#Other', '8562#370#1052#0#0#0#0#0#0#8935', 2),
('Pengunjung berdasarkan hari', 'Minggu#Senin#Selasa#Rabu#Kamis#Jumat#Sabtu', '2364#2532#3345#2728#2227#3464#2261', 3),
('Pengunjung berdasarkan bulan', 'Januari#Februari#Maret#April#Mei#Juni#Juli#Agustus#September#Oktober#November#Desember', '1222#829#1899#899#1044#2440#4645#2392#1782#592#570#606', 4),
('Pengunjung berdasarkan jam', '0:00 - 0:59#1:00 - 1:59#2:00 - 2:59#3:00 - 3:59#4:00 - 4:59#5:00 - 5:59#6:00 - 6:59#7:00 - 7:59#8:00 - 8:59#9:00 - 9:59#10:00 - 10:59#11:00 - 11:59#12:00 - 12:59#13:00 - 13:59#14:00 - 14:59#15:00 - 15:59#16:00 - 16:59#17:00 - 17:59#18:00 - 18:59#19:00 - 19:59#20:00 - 20:59#21:00 - 21:59#22:00 - 22:59#23:00 - 23:59', '416#390#581#538#537#449#478#788#1762#1274#908#827#1050#741#757#969#764#677#853#871#1005#1209#490#586', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id` int(2) NOT NULL,
  `menu` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(127) NOT NULL DEFAULT '',
  `parent` int(2) NOT NULL DEFAULT 0,
  `published` int(1) NOT NULL DEFAULT 1,
  `ordering` int(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id`, `menu`, `url`, `parent`, `published`, `ordering`) VALUES
(28, 'FAQ', 'faq.html', 4, 1, 0),
(27, 'Hubungi Kami', '?pilih=contact&amp;modul=yes', 1, 1, 14),
(3, 'Buku Tamu', 'tamu.html', 2, 1, 7),
(4, 'Kontak Kami', 'kontak.html', 2, 1, 6),
(5, 'Gallery Photo', 'photo.html', 2, 1, 8),
(24, 'Tentang PPDB Online', 'index.php?pilih=hal&amp;id=6', 1, 1, 0),
(44, 'Daya Tampung Kelas', 'index.php?pilih=jurusan&amp;modul=yes', 1, 1, 6),
(9, 'About Me', 'index.php?pilih=hal&amp;id=32', 11, 1, 2),
(10, 'Site Credits', 'index.php?pilih=hal&amp;id=33', 11, 1, 1),
(29, 'Forum Diskusi', 'forum.html', 2, 1, 17),
(30, 'RSS', 'rss.html', 4, 1, 1),
(31, 'Download Area', 'download.html', 2, 1, 19),
(33, 'Form Login', 'index.php?pilih=login&amp;modul=yes', 1, 1, 4),
(34, 'Web Links', 'link.html', 2, 1, 21),
(37, 'Video Online', 'video.html', 2, 1, 20),
(40, 'Persyaratan dan Biaya', 'index.php?pilih=hal&amp;id=31', 1, 1, 7),
(41, 'E Library', 'perpustakaan.html', 2, 1, 22),
(42, 'E Learning', 'index.php', 2, 1, 23),
(45, 'ghfhugfgjk', 'uighiogiogi.vug', 5, 1, 0),
(53, 'Pertemanan', '?pilih=teman&amp;modul=yes', 2, 1, 18),
(54, 'Pengumuman Lulus', 'index.php?pilih=hal&amp;id=33', 1, 1, 13),
(58, 'Alur Proses Pendaftaran', 'index.php?pilih=hal&amp;id=32', 1, 1, 9),
(56, 'Formulir Registrasi', 'index.php?pilih=alumnia&amp;modul=yes', 1, 1, 11),
(57, 'Info Pembukaan PPDB', 'index.php?pilih=hal&amp;id=30', 1, 1, 2),
(59, 'Ranking Sementara', 'index.php?pilih=alumnia&amp;modul=yes&amp;action=reg&amp;&amp;sort=dsc&amp;order=un', 1, 1, 10),
(60, 'Halaman Utama', 'index.php', 1, 1, -1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id` int(2) NOT NULL,
  `Meta_Desc` varchar(255) NOT NULL,
  `Meta_Key` varchar(255) NOT NULL,
  `Web_Title` varchar(255) NOT NULL,
  `Web_Desc` varchar(255) NOT NULL,
  `Email_Admin` varchar(100) NOT NULL,
  `Url_Situs` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_setting`
--

INSERT INTO `tb_setting` (`id`, `Meta_Desc`, `Meta_Key`, `Web_Title`, `Web_Desc`, `Email_Admin`, `Url_Situs`) VALUES
(0, 'PPDB Online', 'PPDB Online', 'PPDB Online', 'PPDB Online', 'smkichwan@ymail.com', 'https://ppdb.imsys.my.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_buta_warna`
--

CREATE TABLE `test_buta_warna` (
  `id_soal` int(255) NOT NULL,
  `gambar_soal` varchar(500) NOT NULL,
  `soal` varchar(200) NOT NULL,
  `jawaban` varchar(25) NOT NULL,
  `pil_1` varchar(25) NOT NULL,
  `pil_2` varchar(25) NOT NULL,
  `pil_3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `test_buta_warna`
--

INSERT INTO `test_buta_warna` (`id_soal`, `gambar_soal`, `soal`, `jawaban`, `pil_1`, `pil_2`, `pil_3`) VALUES
(1101, 'img/test-buta-warna/test-no-9.png', 'Apa Yang Anda Lihat ?', 'Mobil', 'Pesiar', 'Mobil', 'Pesawat'),
(1102, 'img/test-buta-warna/test-no-1.png', 'Apa Yang Anda Lihat ?', '6', '6', '8', '9'),
(1103, 'img/test-buta-warna/test-no-7.png', 'Apa Yang Anda Lihat ?', '73', '62', '79', '73'),
(1104, 'img/test-buta-warna/test-no-5.png', 'Apa Yang Anda Lihat ?', '806', '8', '806', '06'),
(1105, 'img/test-buta-warna/test-no-4.png', 'Apa Yang Anda Lihat ?', 'Bebek', 'Bebek', 'Burung', 'Ikan'),
(1106, 'img/test-buta-warna/test-no-3.png', 'Apa Yang Anda Lihat ?', '2945', '2945', '7045', '45'),
(1107, 'img/test-buta-warna/test-no-2.png', 'Apa Yang Anda Lihat ?', 'Ungu dan garis merah', 'Ungu dan garis merah', 'Garis Ungu', 'Garis  merah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserId` int(15) UNSIGNED ZEROFILL NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserId`, `image`) VALUES
(000000000000004, 'uploads/65a0e5367cf37.png'),
(000000000000003, 'uploads/65a0e4b6ea8e5.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gelombang_reg`
--
ALTER TABLE `gelombang_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_tes`
--
ALTER TABLE `jadwal_tes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
  ADD PRIMARY KEY (`id_kon`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu_users`
--
ALTER TABLE `menu_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mod_data_alumnia`
--
ALTER TABLE `mod_data_alumnia`
  ADD KEY `jurusan` (`jurusan`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `posted_ip`
--
ALTER TABLE `posted_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stat_browse`
--
ALTER TABLE `stat_browse`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test_buta_warna`
--
ALTER TABLE `test_buta_warna`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT untuk tabel `gelombang_reg`
--
ALTER TABLE `gelombang_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `jadwal_tes`
--
ALTER TABLE `jadwal_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
  MODIFY `id_kon` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `menu_users`
--
ALTER TABLE `menu_users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `UserId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1705308819;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pendaftaran` bigint(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posted_ip`
--
ALTER TABLE `posted_ip`
  MODIFY `id` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `stat_browse`
--
ALTER TABLE `stat_browse`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `test_buta_warna`
--
ALTER TABLE `test_buta_warna`
  MODIFY `id_soal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1109;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(15) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_tes`
--
ALTER TABLE `jadwal_tes`
  ADD CONSTRAINT `jadwal_tes_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
