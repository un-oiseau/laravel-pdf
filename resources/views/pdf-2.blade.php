<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="generator" content="pdf2htmlEX" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>PDF</title>

  <style>
        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        h1 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 27pt;
        }

        .s1 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s2 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 14pt;
        }

        .s3 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 14pt;
        }

        .s4 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s5 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .p,
        p {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
            margin: 0pt;
        }

        .s6 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10.5pt;
        }

        .s7 {
            color: #202020;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s8 {
            color: #C00000;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s9 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s10 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s11 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s12 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s13 {
            color: #0462C1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 10pt;
            vertical-align: 1pt;
        }

        .s14 {
            color: #0462C1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 10pt;
        }

        .s15 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s17 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 1pt;
        }

        .s18 {
            color: #0462C1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
            vertical-align: 1pt;
        }

        .s19 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s20 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
            vertical-align: 1pt;
        }

        .s21 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
            vertical-align: 1pt;
        }

        .s22 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s23 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        .s24 {
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        .s25 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s27 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s28 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9.5pt;
        }

        .s29 {
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9.5pt;
        }

        .s30 {
            color: #0563c1;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 9.5pt;
        }

        .s31 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9.5pt;
        }

        .s32 {
            color: #C00000;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s33 {
            color: #C00000;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10.5pt;
        }

        h3 {
            color: #6F2F9F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 14pt;
        }

        .s34 {
            color: #6F2F9F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 14pt;
        }

        .s35 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 1pt;
        }

        .s36 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
            vertical-align: 2pt;
        }

        .s37 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s38 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s39 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 7pt;
            vertical-align: 3pt;
        }

        .s40 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s41 {
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s42 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s43 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s44 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s45 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s46 {
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s47 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s49 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s50 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 7pt;
        }

        .s51 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s52 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s53 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s54 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s55 {
            color: #F00;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        .s57 {
            color: #F00;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s58 {
            color: #F00;
            font-family: "Segoe UI Emoji", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s59 {
            color: #4471C4;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s60 {
            color: #4471C4;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s61 {
            color: #F00;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s62 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s63 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s64 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s65 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
            vertical-align: -6pt;
        }

        .s66 {
            color: #C00000;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 10.5pt;
        }

        .s68 {
            color: #212121;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s69 {
            color: #00F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s70 {
            color: #00F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s71 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
            vertical-align: -2pt;
        }

        .s72 {
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
            vertical-align: -7pt;
        }

        .s73 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 6pt;
        }

        .s74 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 6pt;
        }

        .s75 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s77 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10.5pt;
        }

        .s79 {
            color: #00F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s80 {
            color: #001F5F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s81 {
            color: #2E5395;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s83 {
            color: #6F2F9F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 16pt;
        }

        .s84 {
            color: #6F2F9F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s85 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 14pt;
        }

        .s86 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s88 {
            color: #313D4F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 18pt;
        }

        .s90 {
            color: #313D4F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s91 {
            color: #313D4F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s92 {
            color: #313D4F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s94 {
            color: #0462C1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: underline;
            font-size: 10pt;
        }

        .s95 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s96 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        a {
            color: #0462C1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: underline;
            font-size: 9pt;
        }

        .s97 {
            color: #0462C1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        h2 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 18pt;
        }

        .s98 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s99 {
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
            vertical-align: -2pt;
        }

        .s102 {
            color: #2D74B5;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s103 {
            color: #00F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 9pt;
        }

        .s104 {
            color: #00F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s105 {
            color: #2D74B5;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s106 {
            color: #00F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 9pt;
        }

        .s107 {
            color: #2D74B5;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: underline;
            font-size: 9pt;
        }

        .s108 {
            color: #00F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8.5pt;
        }

        .s109 {
            color: #F00;
            font-family: "Segoe UI Emoji", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s110 {
            color: #F00;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s111 {
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 9pt;
        }

        .s112 {
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s113 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: underline;
            font-size: 9pt;
        }

        .s114 {
            color: #0563c1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s115 {
            color: #2F2F2F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s116 {
            color: #2F2F2F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s117 {
            color: #2F2F2F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s118 {
            color: #0462C1;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: underline;
            font-size: 11pt;
        }

        .s119 {
            color: #C00000;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s121 {
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        /* li {
            display: block;
        } */

        #l1 {
            padding-left: 0pt;
            counter-reset: c1 1;
        }

        #l1>li>*:first-child:before {
            counter-increment: c1;
            content: counter(c1, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        #l1>li:first-child>*:first-child:before {
            counter-increment: c1 0;
        }

        #l2 {
            padding-left: 0pt;
        }

        #l2>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l3 {
            padding-left: 0pt;
        }

        #l3>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l4 {
            padding-left: 0pt;
        }

        #l4>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l5 {
            padding-left: 0pt;
        }

        #l5>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l6 {
            padding-left: 0pt;
        }

        #l6>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l7 {
            padding-left: 0pt;
        }

        #l7>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l8 {
            padding-left: 0pt;
        }

        #l8>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l9 {
            padding-left: 0pt;
        }

        #l9>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l10 {
            padding-left: 0pt;
        }

        #l10>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l11 {
            padding-left: 0pt;
        }

        #l11>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l12 {
            padding-left: 0pt;
        }

        #l12>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 8pt;
        }

        #l13 {
            padding-left: 0pt;
        }

        #l13>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        #l14 {
            padding-left: 0pt;
            counter-reset: c2 10;
        }

        #l14>li>*:first-child:before {
            counter-increment: c2;
            content: "(" counter(c2, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l14>li:first-child>*:first-child:before {
            counter-increment: c2 0;
        }

        #l15 {
            padding-left: 0pt;
        }

        #l15>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        #l16 {
            padding-left: 0pt;
            counter-reset: p1 1;
        }

        #l16>li>*:first-child:before {
            counter-increment: p1;
            content: "(" counter(p1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l16>li:first-child>*:first-child:before {
            counter-increment: p1 0;
        }

        #l17 {
            padding-left: 0pt;
            counter-reset: q1 1;
        }

        #l17>li>*:first-child:before {
            counter-increment: q1;
            content: "(" counter(q1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l17>li:first-child>*:first-child:before {
            counter-increment: q1 0;
        }

        #l18 {
            padding-left: 0pt;
        }

        #l18>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        #l19 {
            padding-left: 0pt;
            counter-reset: s1 1;
        }

        #l19>li>*:first-child:before {
            counter-increment: s1;
            content: "(" counter(s1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l19>li:first-child>*:first-child:before {
            counter-increment: s1 0;
        }

        #l20 {
            padding-left: 0pt;
            counter-reset: s2 1;
        }

        #l20>li>*:first-child:before {
            counter-increment: s2;
            content: counter(s2, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l20>li:first-child>*:first-child:before {
            counter-increment: s2 0;
        }

        #l21 {
            padding-left: 0pt;
            counter-reset: t1 1;
        }

        #l21>li>*:first-child:before {
            counter-increment: t1;
            content: "(" counter(t1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l21>li:first-child>*:first-child:before {
            counter-increment: t1 0;
        }

        #l22 {
            padding-left: 0pt;
            counter-reset: u1 1;
        }

        #l22>li>*:first-child:before {
            counter-increment: u1;
            content: "(" counter(u1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l22>li:first-child>*:first-child:before {
            counter-increment: u1 0;
        }

        #l23 {
            padding-left: 0pt;
            counter-reset: v1 1;
        }

        #l23>li>*:first-child:before {
            counter-increment: v1;
            content: "(" counter(v1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l23>li:first-child>*:first-child:before {
            counter-increment: v1 0;
        }

        #l24 {
            padding-left: 0pt;
            counter-reset: v2 1;
        }

        #l24>li>*:first-child:before {
            counter-increment: v2;
            content: counter(v2, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l24>li:first-child>*:first-child:before {
            counter-increment: v2 0;
        }

        #l25 {
            padding-left: 0pt;
            counter-reset: v2 1;
        }

        #l25>li>*:first-child:before {
            counter-increment: v2;
            content: counter(v2, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l25>li:first-child>*:first-child:before {
            counter-increment: v2 0;
        }

        #l26 {
            padding-left: 0pt;
            counter-reset: w1 1;
        }

        #l26>li>*:first-child:before {
            counter-increment: w1;
            content: "(" counter(w1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l26>li:first-child>*:first-child:before {
            counter-increment: w1 0;
        }

        #l27 {
            padding-left: 0pt;
            counter-reset: x1 1;
        }

        #l27>li>*:first-child:before {
            counter-increment: x1;
            content: "(" counter(x1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l27>li:first-child>*:first-child:before {
            counter-increment: x1 0;
        }

        #l28 {
            padding-left: 0pt;
            counter-reset: y1 1;
        }

        #l28>li>*:first-child:before {
            counter-increment: y1;
            content: "(" counter(y1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l28>li:first-child>*:first-child:before {
            counter-increment: y1 0;
        }

        #l29 {
            padding-left: 0pt;
            counter-reset: z1 1;
        }

        #l29>li>*:first-child:before {
            counter-increment: z1;
            content: "(" counter(z1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l29>li:first-child>*:first-child:before {
            counter-increment: z1 0;
        }

        #l30 {
            padding-left: 0pt;
            counter-reset: z2 1;
        }

        #l30>li>*:first-child:before {
            counter-increment: z2;
            content: counter(z2, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l30>li:first-child>*:first-child:before {
            counter-increment: z2 0;
        }

        #l31 {
            padding-left: 0pt;
            counter-reset: c1 1;
        }

        #l31>li>*:first-child:before {
            counter-increment: c1;
            content: "(" counter(c1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l31>li:first-child>*:first-child:before {
            counter-increment: c1 0;
        }

        #l32 {
            padding-left: 0pt;
            counter-reset: d1 1;
        }

        #l32>li>*:first-child:before {
            counter-increment: d1;
            content: "(" counter(d1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l32>li:first-child>*:first-child:before {
            counter-increment: d1 0;
        }

        #l33 {
            padding-left: 0pt;
            counter-reset: e1 1;
        }

        #l33>li>*:first-child:before {
            counter-increment: e1;
            content: "(" counter(e1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l33>li:first-child>*:first-child:before {
            counter-increment: e1 0;
        }

        #l34 {
            padding-left: 0pt;
            counter-reset: f1 1;
        }

        #l34>li>*:first-child:before {
            counter-increment: f1;
            content: "(" counter(f1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l34>li:first-child>*:first-child:before {
            counter-increment: f1 0;
        }

        #l35 {
            padding-left: 0pt;
            counter-reset: f2 1;
        }

        #l35>li>*:first-child:before {
            counter-increment: f2;
            content: counter(f2, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l35>li:first-child>*:first-child:before {
            counter-increment: f2 0;
        }

        #l36 {
            padding-left: 0pt;
        }

        #l36>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        #l37 {
            padding-left: 0pt;
        }

        #l37>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9.5pt;
        }

        #l38 {
            padding-left: 0pt;
            counter-reset: i1 1;
        }

        #l38>li>*:first-child:before {
            counter-increment: i1;
            content: "(" counter(i1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l38>li:first-child>*:first-child:before {
            counter-increment: i1 0;
        }

        #l39 {
            padding-left: 0pt;
            counter-reset: i2 1;
        }

        #l39>li>*:first-child:before {
            counter-increment: i2;
            content: counter(i2, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l39>li:first-child>*:first-child:before {
            counter-increment: i2 0;
        }

        #l40 {
            padding-left: 0pt;
        }

        #l40>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        #l41 {
            padding-left: 0pt;
            counter-reset: k1 1;
        }

        #l41>li>*:first-child:before {
            counter-increment: k1;
            content: "(" counter(k1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l41>li:first-child>*:first-child:before {
            counter-increment: k1 0;
        }

        #l42 {
            padding-left: 0pt;
            counter-reset: l1 1;
        }

        #l42>li>*:first-child:before {
            counter-increment: l1;
            content: "(" counter(l1, upper-latin)") ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l42>li:first-child>*:first-child:before {
            counter-increment: l1 0;
        }

        /* li {
            display: block;
        } */

        #l43 {
            padding-left: 0pt;
            counter-reset: m1 1;
        }

        #l43>li>*:first-child:before {
            counter-increment: m1;
            content: counter(m1, decimal)". ";
            color: #313D4F;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l43>li:first-child>*:first-child:before {
            counter-increment: m1 0;
        }

        /* li {
            display: block;
        } */

        #l44 {
            padding-left: 0pt;
            counter-reset: n1 1;
        }

        #l44>li>*:first-child:before {
            counter-increment: n1;
            content: counter(n1, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        #l44>li:first-child>*:first-child:before {
            counter-increment: n1 0;
        }

        #l45 {
            padding-left: 0pt;
        }

        #l45>li>*:first-child:before {
            content: "??? ";
            color: black;
            font-family: 'Symbol', serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        /* li {
            display: block;
        } */

        #l46 {
            padding-left: 0pt;
            counter-reset: o1 1;
        }

        #l46>li>*:first-child:before {
            counter-increment: o1;
            content: counter(o1, decimal)". ";
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        #l46>li:first-child>*:first-child:before {
            counter-increment: o1 0;
        }

        #l47 {
            padding-left: 0pt;
        }

        #l47>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
            vertical-align: -2pt;
        }

        #l48 {
            padding-left: 0pt;
            counter-reset: o2 1;
        }

        #l48>li>*:first-child:before {
            counter-increment: o2;
            content: counter(o2, decimal)". ";
            color: black;
            font-family: 'Calibri', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        #l48>li:first-child>*:first-child:before {
            counter-increment: o2 0;
        }

        /* li {
            display: block;
        } */

        #l49 {
            padding-left: 0pt;
        }

        #l49>li>*:first-child:before {
            content: "??? ";
            color: #00F;
            font-family: "MS Gothic", monospace;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 9pt;
        }

        #l50 {
            padding-left: 0pt;
        }

        #l50>li>*:first-child:before {
            content: "??? ";
            color: #2F2F2F;
            font-family: Symbol, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        table,
        tbody {
            vertical-align: top;
            overflow: visible;
        }

    </style>


<body>
    <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
        <tr style="height:30px">
            <td style="width:30%; padding-right:30px">
                <img style="width:100%" src="images/logo.png" alt="logo"/>
            </td>
            <td style="width:70%">
                <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                    108 Lakeside Drive, Southampton, PA 18966
                </p>
                <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
            </td>
        </tr>
    </table>
    <h1 style="padding-top: 7pt;text-indent: 0pt;text-align:center;word-spacing:10px">RESIDENTIAL LEASE AGREEMENT
    </h1>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <ol id="l1">
        <li data-list-text="1.">
            <p class="s1" style="padding-top: 2pt;padding-left: 32pt;text-indent: -18pt;text-align: left;">PARTIES</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s1" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">This LEASE dated <span
                    class="s2">&nbsp; July 7, 2022 </span><span class="s3"> </span>is between</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s4" style="padding-top: 2pt;padding-left: 37pt;text-indent: 0pt;text-align: left;"><span
                    style=" color: #000;">LANDLORD(S): </span>Dan Housing. Inc (<span class="s5">Property Manager who
                    represents the Property Owner - ???Agent???</span>)<span class="p">; called &quot;</span><span
                    style=" color: #000;">Landlord</span><span class="p">&quot;</span></p>
            <p class="s1" style="padding-top: 2pt;padding-left: 85pt;text-indent: 0pt;text-align: left;">and</p>
            <p class="s1" style="padding-top: 1pt;padding-left: 50pt;text-indent: 0pt;text-align: left;">TENANT(S):
                <span style="color: #0563c1;">Emily Magner and Family (N/A)</span><span class="s6">; </span><span
                    class="p">called &quot;</span>Tenant<span class="p">&quot;</span></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s1" style="padding-left: 11pt;text-indent: 0pt;text-align: left;">Property located at: <span
                    style=" color: #0563c1;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247</span><span
                    class="s7">; called </span><span class="p">&quot;</span>Property<span class="p">&quot;</span></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s8" style="padding-left: 11pt;text-indent: 0pt;text-align: left;font-size:9pt">CRS Temporary Housing is
                responsible for rent, late fees, security deposit(s), and other costs.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="2.">
            <p class="s1" style="padding-left: 32pt;text-indent: -18pt;text-align: left;">LANDLORD CONTACT INFORMATION
            </p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <table style="border-collapse:collapse" cellspacing="0">
                <tbody>
                <tr style="height:14pt">
                    <td style="">
                        <p class="s9" style="padding-right: 3pt;padding-left: 14pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                            Rental Payments:
                        </p>
                    </td>
                    <!-- <td style="text-indent:100pt"></td> -->
                    <td>
                        <p class="s9" style="padding-right: 4pt;text-indent: 0pt;line-height: 11pt;text-align: right;">
                            Maintenance Requests:
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td>
                        <p class="s10" style="padding-left: 25pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Payable to:
                        </p>
                    </td>
                    <td style="border-bottom-style:solid;border-bottom-width:1pt" colspan="2">
                        <p class="s11" style="text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Dan Housing, Inc.</p>
                    </td>
                    <td>
                        <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Dan Housing, Inc. Contact:</p>
                    </td>
                    <td style="border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Gary Segal
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:86pt">
                        <p class="s10" style="padding-right: 5pt;padding-left: 35pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Address:</p>
                    </td>
                    <td style="width:250pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt"
                        colspan="2">
                        <p class="s11" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            108 Lakeside Drive</p>
                    </td>
                    <td>
                        <p class="s10" style="padding-right: 5pt;padding-left: 97pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Address:</p>
                    </td>
                    <td
                        style="border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            108 Lakeside Drive</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:86pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td style="border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt"
                        colspan="2">
                        <p class="s11" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Southampton, PA 18966</p>
                    </td>
                    <td>
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td style="border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Southampton, PA 18966</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td>
                        <p class="s10" style="padding-right: 5pt; padding-left: 33pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Phone(s):</p>
                    </td>
                    <td style="width:100pt;border-bottom-style:solid;border-bottom-width:1pt" colspan="2">
                        <p class="s11" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            215-355-6075 | 215-355-6076</p>
                    </td>
                    
                    <!-- <td style="border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">|
                            </p>
                    </td> -->
                    <td>
                        <p class="s10" style="padding-right: 5pt; padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            General Phone Number(s):
                        </p>
                    </td>
                    <td style="border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="padding-right: 5pt; text-indent: 0pt;line-height: 13pt;text-align: left;">
                            215-355-4094</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td>
                        <p class="s10" style="padding-right: 5pt; padding-left: 60pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Fax:
                        </p>
                    </td>
                    <td style="border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="text-indent: 0pt;line-height: 13pt;text-align: left;">
                            215-220-3419
                        </p>
                    </td>
                    <td
                        style="width:100pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td style="width:148pt">
                        <p class="s10" style="padding-right: 5pt;padding-left: 125pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Fax:</p>
                    </td>
                    <td
                        style="width:180pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            215-220-3419</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:86pt">
                        <p class="s10" style="padding-right: 5pt;padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        General E-Mail:</p>
                    </td>
                    <td style="width:250pt;border-bottom-style:solid;border-bottom-width:1pt" colspan="2">
                        <p class="s11" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            <a href="mailto:Gary@DanHousing.com" class="s14" target="_blank">Gary@DanHousing.com</a>
                            <a href="mailto:Donna@DanHousing.com" class="s14" target="_blank">Donna@DanHousing.com</a>
                        </p>
                    </td>
                    <td>
                        <p class="s10" style="padding-right: 5pt;padding-left: 110pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            E-Mail:
                        </p>
                    </td>
                    <td style="border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            <a href="mailto:Gary@DanHousing.com" class="s14" target="_blank">Gary@DanHousing.com</a>
                            <a href="mailto:Donna@DanHousing.com" class="s14" target="_blank">Donna@DanHousing.com</a>
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:50pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>

                </tr>
                <tr style="height:16pt">
                    <td>
                        <p class="s10" style=" padding-left: 25pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Accounting:
                        </p>
                    </td>
                    <td colspan="2" style="border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="text-indent: 0pt;line-height: 13pt;text-align: left;">
                            <a
                                href="mailto:nina@danhousing.com"
                                style="color: #0462C1; font-family:Calibri, sans-serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 10pt; vertical-align: 1pt";
                                target="_blank">Nina@DanHousing.com:
                            </a>
                        </p>
                    </td>
                    <td>
                        <p class="s10" style="padding-right: 5pt;padding-left: 15pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Maintenance Phone(s):</p>
                    </td>
                    <td style="border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            215-355-6075 | 215-355-6076</p>
                    </td>
                </tr>

                <tr style="height:16pt">
                    <td>
                        <p class="s10" style="padding-right: 5pt; padding-left: 28pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Extensions:</p>
                    </td>
                    <td style="width:250pt;border-bottom-style:solid;border-bottom-width:1pt" colspan="2">
                        <p class="s11" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            <a href="mailto:Leo@DanHousing.com" class="s14" target="_blank">Leo@DanHousing.com</a>
                            <a href="mailto:Donna@DanHousing.com" class="s14" target="_blank">Donna@DanHousing.com</a>
                        </p>
                    </td>
                    <td style="padding-left: 15pt;">
                        <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Emergency Phone(s):</p>
                    </td>
                    <td style="border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s11" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            215-355-6075 | 215-355-6076</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="3." style="padding-top:10pt">
            <p class="s1" style="padding-top: 2pt;padding-left: 32pt;text-indent: -18pt;text-align: left;">LEASE TERM
            </p>
            <p class="s12" style="padding-top: 4pt;padding-left: 40pt;padding-bottom: 2pt;text-indent: 0pt;text-align: left;">Start Date:
                <span style=" color: #0563c1;">July 11, 2022 </span><span class="p">, at 10:00 am</span></p>
            <p style="padding-left: 95pt;text-indent: 0pt;line-height: 1pt;text-align: left;">
            <p class="s20" style="text-indent: 0pt;padding-left: 40pt;text-align: left;">End Date: <span class="s19">September 11, 2022
                </span><span class="s21">, at 12:00 pm</span></p>
            <p style="padding-left: 94pt;text-indent: 0pt;line-height: 1pt;text-align: left;"></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="4.">
            <p class="s1" style="padding-top: 2pt;padding-left: 32pt;text-indent: -18pt;text-align: left;">PROPERTY INFO
            </p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <table style="border-collapse:collapse;margin-left:9.82pt" cellspacing="0">
                <tr style="height:12pt">
                    <td>
                        <p class="s22" style="width:75pt;padding-left: 2pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                            Property Type:
                        </p>
                    </td>
                    <td class="s23" style="padding-left: 10pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Single
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 10pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Townhouse
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 10pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Twin
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 10pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Condo
                        </label>
                    </td>
                        <p class="s22" style="padding-left: 16pt;padding-right: 8pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                            Garage/Parking:
                        </p>
                    </td>
                    <td class="s23" style="padding-left: 3pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Garage
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 4pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Driveway
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 3pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Carport
                        </label>
                    </td>
                </tr>
                <tr style="height:11pt">
                    <td style="padding-left: 100pt">
                        
                    </td>
                    <td class="s23" style="padding-left: 8pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            Apartment
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 10pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Mobil
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 10pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Trailer
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 10pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            Duplex
                        </label>
                    </td>
                    <td style="width:75pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td class="s23" style="padding-left: 2pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            Street
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 3pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            Community
                        </label>
                    </td>
                    <td class="s23" style="padding-left: 6pt;text-indent: -10pt;line-height: 9pt;text-align: left;">
                        <label style="vertical-align:top">
                            <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            Assigned Parking
                        </label>
                    </td>
                </tr>
            </table>
            
            
            <p class="s25" style="padding-left: 405pt;text-indent: 0pt;text-align: left;">AND/OR as permitted by Law /
                Landlord</p>
            <p class="s15"
                style="padding-top: 5pt;padding-bottom: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: left;">
                <span> Bed/Bath: </span><span class="s15" style="color: #0563c1;">1 / 1 </span>
                <span style="display:inline-block; width: 350px;"></span>
                <span>Sq. Ft.: </span><span class="s15" style="color: #0563c1; padding-right:30px">829</span>
                <span>Year Built: </span><span class="s15" style="color: #0563c1;">UnKnown</span>
            </p>
        </li>               
        <li data-list-text="5." style="padding-top:10px">
            <p class="s1" style="padding-top: 2pt;padding-left: 32pt;text-indent: -18pt;text-align: left;">RENEWAL TERM
            </p>
            <p class="s4" style="padding-left: 30pt;text-indent: 0pt;text-align: left;">This Lease will AUTOMATICALLY
                RENEW for a term of MONTH TO MONTH (also called the &quot;Renewal Term&quot;) at the End Date of this
                Lease or at the end of any Renewal Term unless:</p>
            <p class="s29" style="padding-left: 30pt;text-indent: 0pt;text-align: left;"><span class="s28">Tenant gives
                    Landlord at least </span>
                    <img src="images/checkbox.png" alt="checkbox" style="width:11px;height:11px">
                    <span class="s30" style="vertical-align:top">15</span>
                        <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:15px;height:15px">
                    <span
                    class="s30">14</span><span class="s31">, </span>
                    <img src="images/checkbox.png" alt="checkbox" style="width:11px;height:11px">
                    <span class="s30">60</span><span class="s31">
                </span><span class="s28">days written notice before End Date and </span>
                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:15px;height:15px">
                <span
                    class="s30">14</span><span class="s31"> </span><span class="s28">days before the end of any Renewal
                    Term Landlord gives Tenant at least </span>
                        <img src="images/checkbox.png" alt="checkbox" style="width:11px;height:11px">
                    <span class="s30">15</span><span class="s31">, </span>
                    <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:15px;height:15px">
                <span class="s30">30</span><span class="s31">, </span>
                    <img src="images/checkbox.png" alt="checkbox" style="width:11px;height:11px">
                <span class="s30">60</span><span class="s31">
                </span><span class="s28">days written notice before End Date or before the end of any Renewal
                    Term</span></p>
            <p class="s32" style="padding-left: 30pt;text-indent: 0pt;line-height: 13pt;text-align: left;">All notices
                must be provided no later than 3:00 pm EST <span class="s33">before the End Date or before the End of
                    any Renewal Term.</span></p>
            <table>
                <tbody>
                    <tr>
                        <td style="text-align: right; width:700px">
                            <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3> 
                        </td>
                    </tr>
                </tbody>
            </table>

            <table>
                <tbody>
                    <tr>
                        <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                        <td style="width:500px"></td>
                        <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                    </tr>
                    <tr>
                        <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                        <td class="s28" style="width:500px"></td>
                        <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                    </tr>
                </tbody>
            </table>
            <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:1px 20px">
            <table>
                <tbody>
                    <tr style="height:16pt">
                    
                    <td style="width:200pt">
                        <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                            Confidential - Thursday, July 7, 2022
                        </p>
                    </td>
                
                    <td style="width:200pt">
                        <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                            Page 1 of 22
                        </p>
                    </td>
                    <td>
                        <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            DAN Housing, Inc ?? 2016-2022
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </li>
        
            <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
                <tr style="height:30px">
                    <td style="width:30%; padding-right:30px">
                        <img style="width:100%" src="images/logo.png" alt="logo"/>

                    </td>
                    <td style="width:70%">
                        <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                            108 Lakeside Drive, Southampton, PA 18966
                        </p>
                        <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                        <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                    </td>
                </tr>
            </table>

        <li data-list-text="6.">
            <p class="s1" style="padding-top: 2pt;padding-bottom: 2pt;padding-left: 32pt;text-indent: -18pt;text-align: left;">
                RENT</p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tr style="height:16pt">
                    <td colspan="2">
                        <p class="s38" style="padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            <span class="s36">(A) </span><span class="s37">Rent is due in advance, without demand, on or
                                before the </span>1<span class="s39">st</span> <span class="s37">day of each
                                month.</span></p>
                    </td>
                    <td style="width:120pt" bgcolor="#8EAADB">
                        <p class="s9" style="padding-right: 5pt;text-indent: 0pt;text-align: right;">Amounts</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">(B)</p>
                    </td>
                    <td colspan="2">
                        <p style="text-indent: 0pt;line-height: 1pt;text-align: left;"></p>
                        <p class="s40" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 13pt;text-align: left;max-width:400px">
                            <span class="s37">The total Rent due per </span>
                            <span class="s38">Month </span>
                            <span class="s37">is: </span>Furnished: <span class="s41">
                                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            </span>Yes
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            </span>No 
                            <span class="s42">| </span>Utilities Included: <span class="s41">
                                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            </span>Yes
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            </span>No
                        </p>
                    </td>
                    <td style="width:90pt;border-bottom-style:solid;border-bottom-width:1pt" colspan="2">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $4,580.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">(C)</p>
                    </td>
                    <td style="width:360pt">
                        <p class="s41"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            <span class="s37">Full Month or </span>
                                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            <span class="s37">Pro-Rated Month (based on 30
                                days) </span><span class="s38">July</span></p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $3,206.00</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">(D)</p>
                    </td>
                    <td style="width:360pt">
                        <p class="s41"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            <span class="s37">Full Month or </span>
                                <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            <span class="s37">Pro-Rated Month (based on 30
                                days) </span><span class="s38">August</span>
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $4,580.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">(E)</p>
                    </td>
                    <td style="width:300pt">
                        <p class="s37"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Other Deposits/Fees: <span class="s38">N/A -</span>
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $00.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">(F)</p>
                    </td>
                    <td style="width:300pt">
                        <p class="s37"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Utilities allowance p/m: <span class="s38">N/A -</span>
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $00.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">(G)</p>
                    </td>
                    <td style="width:350pt">
                        <p class="s37" style="padding-top: 2pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            The total amount of Rent due during the Term is: <span class="s38">$4,580.00 x 2 + $152.67
                                (1 Day) =
                            </span>
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43" style="padding-top: 2pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $9,312.67
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            (H)
                        </p>
                    </td>
                    <td style="width:300pt">
                        <p class="s37"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            After the Initial Term, Rent Amount: <span class="s38">Market Rate.</span>
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $00.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            (I)
                        </p>
                    </td>
                    <td style="width:300pt">
                        <p class="s37"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            If Rent is more than <span class="s44">&nbsp;5 </span><span class="s38"> </span>days late,
                            Tenant pays a Late Charge of:
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $100.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            (I)
                        </p>
                    </td>
                    <td style="width:300pt">
                        <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            If Rent is more than <span class="s44">&nbsp;5 </span><span class="s38"> </span>days late,
                            Tenant pays a Late Charge of:
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $100.00
                        </p>
                    </td>
                </tr>
            </table>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (J)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            All other
                            payments due from Tenant to Landlord, including late charges or utility charges are considered
                            to be Additional Rent. Failure to pay this Additional Rent is a breach of the Lease in the same
                            way as failing to pay the regular Rent.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (J)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Tenant agrees that all payments
                            will be applied against outstanding Additional Rent that is due before they will be applied
                            against the current Rent due.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (K)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            The tenant will pay a fee of
                            <span class="s45">$100</span><span class="s4"> </span>for any payment that is returned by any
                            financial institution for any reason. Any late charges will continue to apply until valid
                            payment is received.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (L)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            The landlord will accept the following methods of payment:
                            </p>
                            <p style="padding-left: 57pt;text-indent: -26pt;line-height: 14pt;text-align: left;">The landlord
                            will accept the following methods of payment:</p>
                            <p style="padding-top: 1pt;padding-left: 10pt;text-indent: -13pt;text-align: left;">
                                <span class="s46">
                                    <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                                </span>
                                    Cash,
                                <span class="s46">
                                    <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                                </span>Money Order, 
                                <span class="s46">
                                    <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                                </span>Business Check, 
                                <span class="s46">
                                    <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                                </span>Bank Check,
                                <span class="s46">
                                    <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                                </span>Credit Cards,
                                <span class="s46">
                                    <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                                </span>Direct Deposit, <span class="s46">
                                    <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                                </span>Other <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="7.">
            <p class="s1" style="padding-left: 32pt;text-indent: -18pt;text-align: left;">MOVE-IN/OUT
                PAYMENTS (Rent, Deposits, and Other Fees)
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tr style="height:16pt">
                    <td colspan="2">
                        <p class="s38" style="padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            <span class="s36">(A) </span>
                                <span class="s37">Security
                                    Deposit, held in escrow by: <b>Property Owner </b> 
                                </span>
                        <p class="s50" style="text-indent: 0pt;text-align: left; width:500px"><span class="p">Deposit
                        held at </span><span class="s49">(</span>financial Institution<span class="s51">)</span>
                            <span class="s52">: </span>Wells Fargo, TD Bank or Bank of America <span
                            class="p">Paid by: </span><span class="s46">
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            </span><span class="s27">Tenant </span><span class="s53">OR </span>
                            <span class="s46">
                                <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            </span><span class="s27">CRS Temporary Housing
                            </span><span class="s54">$4,000.00</span>
                        </p>
                    <p style="padding-left: 513pt;text-indent: 0pt;line-height: 1pt;text-align: left;"></p>
                        </p>
                    </td>
                    <td style="width:120pt" bgcolor="#8EAADB">
                        <p class="s9" style="padding-right: 5pt;text-indent: 0pt;text-align: right;">Amounts Due</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">(B)</p>
                    </td>
                    <td style="width:360pt">
                        <p class="s41"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            <span class="s37">Full Month or </span>
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            <span class="s37">Pro-Rated Month (based on 30
                                days) </span><span class="s38">July</span>
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $3,206.00</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">(C)</p>
                    </td>
                    <td style="width:360pt">
                        <p class="s41"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            <span class="s37">Full Month or </span>
                                <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            <span class="s37">Pro-Rated Month (based on 30
                                days) </span><span class="s38">August</span></p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $4,580.00</p>
                    </td>
                </tr>
                
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">(D)</p>
                    </td>
                    <td colspan="2">
                        <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;width:400px">
                            Rental Insurance Fee: 
                            <span class="s55">If Insurance Policy is NOT transferable, NEW Rental policy Must
                            be purchased: Included
                            </span>
                        </p>
                    <p style="padding-left: 513pt;text-indent: 0pt;line-height: 1pt;text-align: left;"></p>
                    </td>
                    <td colspan="4" style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $00.00</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">(E)</p>
                    </td>
                    <td style="width:350pt">
                        <p class="s37"
                            style="padding-top: 2pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Application/Processing Fee: 
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 2pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $275.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">(F)</p>
                    </td>
                    <td style="width:350pt">
                        <p class="s37"
                            style="padding-top: 2pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Clearing Fee: 
                            <b>Before Move-In $400.00</b>
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 2pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $400.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">(G)</p>
                    </td>
                    <td style="width:350pt">
                        <p class="s37"
                            style="padding-top: 2pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Admin/Broker Fee:
                            <b>Before Move-In $400.00</b>
                        </p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 2pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $275.00
                        </p>
                    </td>
                </tr>

                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">(H)</p>
                    </td>
                    <td style="width:300pt">
                        <p class="s37"
                            style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Other Deposits/Fees: <span class="s38">N/A -</span></p>
                    </td>
                    <td
                        style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $00.00</p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            (I)
                        </p>
                    </td>
                    <td style="width:300pt">
                        <p class="s46" style="padding-left: 2pt;text-indent: 0pt;line-height: 113%;text-align: left;">
                            <span class="p">Pet Deposit/Fee: </span>
                                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            <span class="s4">Non-Refundable </span>
                                <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                            <span class="s4">Refundable </span>
                                    <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                                <span class="s4">N/A </span>
                        </p>
                    </td>
                    
                    <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                        <p class="s43"
                            style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $350.00
                        </p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td style="width:22pt">
                        <p class="s37" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">(H)</p>
                    </td>
                    <td style="width:300pt">
                        <p class="s1" style="text-indent: 0pt;">Total
                            Amount Due: (Rent, Security Deposit, and other fees before Move-in) 
                        </p>
                    </td>
                    <td style="width:90pt;border-top-style:solid;border-top-width:1pt;" bgcolor="#8EAADB">
                        <p class="s43" style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                            $13,086.00
                        </p>
                    </td>
                </tr>
            </table>
            <p class="s57" style="padding-top: 1pt;padding-left: 23pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Rent
                payments and/or fees will be paid on behalf of the Tenant and Family by CRS Temporary Housing ATTN: </p>
                <p class="s58" style="padding-left: 23pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                <img src="images/star.png" alt="star">
                <img src="images/star.png" alt="star">
                <img src="images/star.png" alt="star">
                <span class="s57">If the lease is extended on m2m basis, the RENT might be higher, it will be based
                    on the current market rate.
                </span>
            </p>
            <p style="border-bottom-style:solid;border-bottom-width:1pt;margin: 5px 40px 5px"></p>
        </li>
        <li data-list-text="8.">
            <p class="s1" style="padding-top: 2pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">RETURN OF
                SECURITY DEPOSITS
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">(A)</p>
                        </td>
                        <td style="width:530pt">
                            <p style="padding-top: 2pt;text-align: justify;">At the
                                move-out, the Tenant will return all keys and give the Landlord written notice of the
                                Tenant&#39;s new mailing address where the Landlord can return the Security Deposit.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">(B)</p>
                        </td>
                        <td style="width:530pt">
                            <p style="text-align: left;">Within <span
                                class="s59">30</span><span class="s60"> </span>days after the Tenant moves from the
                            Property, Landlord will give Tenant a written list of any damage(s) to the Property that
                            Landlord claims Tenant is responsible for. If the deposit is not sufficient enough to cover such
                            damages intentionally or negligently caused by Tenant, and written notice of an amount due is
                            sent, the Tenant shall be liable for paying the same in full within <span
                                class="s45">7</span><span class="s4"> </span>days of notice. Any security deposit unclaimed
                            by Tenant as well as any check outstanding shall be forfeited by the Tenant after a period of
                            <span class="s45">30</span><span class="s4"> </span>days after the termination or expiration of
                            this Lease.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 3pt;text-indent: 0pt;text-align: left;">(C)</p>
                        </td>
                        <td style="width:530pt">
                            <p style="text-align: left;">The Landlord may deduct repair
                            costs and any unpaid rents from Tenant&#39;s Security Deposit. Any remaining Security Deposit
                            will be returned to the Tenant within <span class="s45">30</span><span class="s4"> </span>days
                            after the Tenant moves from the Property.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td style="text-align: right; width:700px">
                            <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                  <tbody>
                      <tr>
                          <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                          <td style="width:500px"></td>
                          <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                      </tr>
                      <tr>
                          <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                          <td class="s28" style="width:500px"></td>
                          <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                      </tr>
                  </tbody>
              </table>
              <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:1px 20px">
              <table>
                  <tbody>
                    <tr style="height:16pt">
                      <td style="width:190pt">
                          <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                              Confidential - Thursday, July 7, 2022
                          </p>
                      </td>

                      <td style="width:200pt">
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                              Page 2 of 22
                          </p>
                      </td>
                      <td>
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                              DAN Housing, Inc ?? 2016-2022
                          </p>
                      </td>
                  </tr>
                  </tbody>
              </table>
        </li>
        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
        </table>
        <li data-list-text="9.">
            <p class="s1" style="padding-top: 2pt;padding-left: 32pt;text-indent: -18pt;text-align: left;">APPLIANCES
                INCLUDED</p>
            <p class="s46" style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: left;">
                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
            <span
                    class="p">Stove, </span>
                        <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                    <span class="p">Refrigerator, </span>
                        <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                    <span class="p">Microwave, </span>
                        <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                <span class="p">Air Conditioning, </span>
                    <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                <span class="p">Garbage Disposal, </span>
                    <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                <span
                    class="p">Dishwasher, </span>
                        <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                    <span class="p">Washer, </span>
                        <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                    <span class="p">Dryer,</span></p>
            <p style="text-indent: 0pt;text-align: left;"></p>
            <ul id="l18">
                <p style="padding-top: 2pt;padding-left: 38pt;text-indent: -13pt;text-align: left;">
                    <span>
                        <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                    </span>
                    Washer/Dryer
                    Hookups (<span class="s46">
                        <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                    </span>Gas <span class="s46">
                        <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                    </span>Electric ), <span class="s46">
                        <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                    </span>Shared Laundry, <span class="s46">
                        <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                    </span>Other: <u></u>
                </p>
            </ul>
            <p class="s61" style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: left;">Landlord is
                responsible for repairs of all of the Appliances listed above unless otherwise stated here:</p>
            <p class="s57" style="padding-top: 2pt;padding-bottom: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: left;">N/A
            </p>
            <p style="border-bottom-style:solid;border-bottom-width:1pt;margin-left:40px;margin-right:40px"></p>
        </li>
        <li data-list-text="10." style="max-width:580pt">
            <p class="s1" style="padding-top: 2pt;padding-left: 32pt;text-indent: -18pt;text-align: left;">UTILITIES,
                AMENITIES, AND SERVICES
            </p>
            <p style="padding-top: 2pt;padding-left: 29pt;text-indent: 0pt;text-align: justify;">Landlord and Tenant
                agree to pay for the charges for utilities and services provided for the Property as marked below. If a
                service is not marked as being paid by the Landlord, it is the responsibility of the Tenant to pay for
                that service. Landlord is not responsible for the loss of service if interrupted by circumstances beyond
                the Landlord&#39;s control.</p>
            <p style="padding-bottom: 1pt;padding-left: 29pt;text-indent: 0pt;text-align: justify;">Unless paid by the
                Landlord, Tenant shall at their own expense, transfer the utilities and/or services listed below at the
                time of the move. Tenant may be liable for pro-rated utilities or any charges that may occur for failure
                to do so.</p>
            <table style="border-collapse:collapse;margin-left:29.72pt" cellspacing="0">
                <tr style="height:16pt">
                    <td style="width:50pt" bgcolor="#8EAADB">
                        <p class="s43" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Utilities / Amenities</p>
                    </td>
                    <td style="width:55pt" bgcolor="#8EAADB">
                        <p class="s43"
                            style="padding-left: 16pt;padding-right: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                            Paid by Landlord</p>
                    </td>
                    <td style="width:50pt" bgcolor="#8EAADB">
                        <p class="s43"
                            style="padding-left: 10pt;padding-right: 15pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                            Paid by Tenant</p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:50pt">
                        <p class="s62" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Gas or Oil (if
                            Applicable) <span class="s63">Split between</span>
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span></p>
                    </td>
                    <td style="width:55pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:55pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:55pt">
                        <p class="s62" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Electricity and/or
                            Solar Services <span class="s63">Split between </span>
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span></p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Air Conditioning
                            Central
                            <span class="s41">
                                <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                            </span>Windows <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span></p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Hot Water Split
                            between
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span></p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Cold Water Public
                            <span class="s41">
                                <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                            </span>Well <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span>Split between
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span></p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Sewer Septic
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span>
                            Public
                            <span class="s41">
                                <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                            </span>Private
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span>Split between 
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span></p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Trash Removal
                            Included in the Rent
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span>Split between
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span></p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="max-width:300pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Lawn and Shrubbery
                            Care - <b>Tenant must water the lawn </b>(if Applicable)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Snow/Ice Removal
                            from Stairs, House Entry, Parking space(s)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:300pt">
                        <p class="s37" style="padding-top: 1pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">
                            Pest/Rodent Control (Bed Bugs not included ??? See Bed Bug Addendum)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Pool/Spa
                            Maintenance (if Applicable) Community <span class="s41">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </span>Private
                            <span class="s41">
                                <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                            </span></p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Condominium/HOA Fee
                            (if Applicable)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Parking Fee (if
                            Applicable)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-top: 1pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">
                            Maintenance of Common Areas (if Applicable)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-top: 1pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">
                            Telephone Service (if Applicable)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:385pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">Cable Television
                            (if Applicable) Basic and/or Netflix/Hulu/Roku, etc. Services</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-top: 1pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">
                            Wi-Fi/Internet (if Applicable)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-top: 1pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">
                            Security System (if Applicable)</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-top: 1pt;padding-left: 10pt;text-indent: 0pt;text-align: left;">
                            Sports Center/Gym</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
                <tr style="height:15pt">
                    <td style="width:367pt">
                        <p class="s37" style="padding-left: 10pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Other</p>
                    </td>
                    <td style="width:105pt">
                        <p class="s41" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                    <td style="width:97pt">
                        <p class="s41" style="padding-right: 4pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </p>
                    </td>
                </tr>
            </table>
            <p class="s64" style="padding-top: 7pt;padding-left: 29pt;text-indent: 0pt;text-align: justify;">Utility
                Regulations:</p>
            <p style="padding-left: 29pt;text-indent: 0pt;text-align: justify;">Water Conservation: Leaseholder(s) and
                Residents shall take all steps necessary to ensure that they are aware of any water use restrictions and
                comply with all state and local water use restrictions in place. Residents are responsible for any fines
                or other costs occasioned by water usage violations.</p>
            <p class="s64" style="padding-top: 2pt;padding-left: 29pt;text-indent: 0pt;text-align: left;">Comments:</p>
            <p class="s57" style="padding-left: 29pt;text-indent: 0pt;text-align: left;">Property is furnished by Owner
                and/or CRS Temporary Housing. <br />All Utilities/Amenities are paid by Owner. (See above)</p>
                <p class="s58" style="padding-left: 29pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                <img src="images/star.png" alt="star">
                <img src="images/star.png" alt="star">
                <img src="images/star.png" alt="star">
                <span class="s57">ATTN: If there is a CAP on utilities, Tenant will reimburse the Owner for the difference.
                </span>
            </p>

            <table style="margin-top:120px">
                <tbody>
                    <tr>
                        <td style="text-align: right; width:700px">
                            <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <table>
                  <tbody>
                      <tr>
                          <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                          <td style="width:500px"></td>
                          <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                      </tr>
                      <tr>
                          <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                          <td class="s28" style="width:500px"></td>
                          <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                      </tr>
                  </tbody>
              </table>
              <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:1px 20px">
              <table>
                  <tbody>
                      <tr style="height:16pt">

                      <td style="width:200pt">
                          <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                              Confidential - Thursday, July 7, 2022
                          </p>
                      </td>

                      <td style="width:200pt">
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                              Page 3 of 22
                          </p>
                      </td>
                      <td>
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                              DAN Housing, Inc ?? 2016-2022
                          </p>
                      </td>
                  </tr>
                  </tbody>
              </table>
              <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
                <tr style="height:30px">
                    <td style="width:30%; padding-right:30px">
                        <img style="width:100%" src="images/logo.png" alt="logo"/>
                    </td>
                    <td style="width:70%">
                        <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                            108 Lakeside Drive, Southampton, PA 18966
                        </p>
                        <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                        <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                    </td>
                </tr>
            </table>
        </li>
        <li data-list-text="11.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">POSSESSION
                AND TENANT RESPONSIBILITIES</p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Tenant may move in (take possession of the Property) on the Start Date of this Lease.
                            </p>
                            
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                                If Tenant cannot move in within
                                <span class="s45">&nbsp;5 </span><span class="s4"> </span>days after Start Date because the
                                previous tenant is still there or because of property damage, Tenant&#39;s exclusive rights are
                                to:
                                <ol style="padding-left:30px">
                                    <li data-list-text="1.">
                                        <p style="text-align: left;">Change the starting date
                                            of the Lease to the day when the Property is available. Tenant will not owe rent until
                                            the Property is available.
                                        </p>
                                    </li>
                                     
                                    <p style="text-align: left; text-indent:-45pt">OR</p>
                                    <li data-list-text="2.">
                                        <p style="line-height: 10pt;text-align: left;">End the
                                            Lease and have all money already paid as rent or security deposit returned, with no
                                            further liability on the part of the Landlord or Tenant.
                                        </p>
                                    </li>
                                </ol>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s57" style="text-align: justify;">If this is an
                            Insurance claim relocation and no more extensions granted by the insurance adjuster, the Tenant
                            MUST promptly vacate the property otherwise Tenant will be automatically responsible to pay
                            lease payment(s) and sign a new lease with Landlord.
                            </p> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="12.">
            <p class="s1" style="padding-top: 2pt;padding-left: 31pt;text-indent: -18pt;text-align: left;"> TENANT&#39;S USE OF PROPERTY</p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td style="width:580pt">
                            <p style="padding-top: 2pt;padding-left: 30pt;text-indent: -24pt;text-align: justify; width:530pt">Tenant will
                            use PROPERTY as a residence ONLY.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td style="width:580pt">
                            <p style="padding-left: 30pt;text-indent: -23pt;text-align: justify; width:530pt">In no event shall more than 2
                            persons per bedroom be allowed to occupy the Property.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td style="width:580pt">
                            <p style="text-indent: 7pt;text-align: justify; width:500pt">Tenant shall have no more than
                                10 persons visit the Property at any one time for the period longer than 96 hours.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (D)
                            </p>
                        </td>
                        <td style="width:580pt">
                            <p style="text-align: justify; width:500pt"> No more than
                                <span class="s45">&nbsp;1 </span><span class="s4"> </span>people will live at the property.
                                <span style=" color: #212121;">Any guest(s) staying in the property more than 2 weeks in any
                                </span><span class="s68" style="text-indent:-30pt;">1-month </span><span style=" color: #212121;">period will be considered
                                    a tenant, rather than a guest, and must be added into the lease agreement with the written
                                    permission of the Landlord. Landlord may also increase the rent at any such time that a new
                                    tenant is added to the lease or premise.
                                </span>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (E)
                            </p>
                        </td>
                        <td style="width:580pt">
                            <p style="text-indent: 7pt;text-align: justify; width:500pt">
                            Tenant is solely responsible
                            to pay for all of the costs for repairing any damage that is the fault of the Tenant or
                            Tenant&#39;s family or guests.
                            </p>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
            
        </li>
        <li data-list-text="13.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">RULES AND
                REGULATIONS
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td style="">
                            <p style="text-indent: 7pt;text-align: justify;width:500pt"> Verbal or
                            Written Rules and Regulations for use of the Property and common areas will be provided by the
                            owner/agent.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td style="">
                            <p style="text-indent: 7pt;text-align: justify;width:500pt"> Any violation of the Rules and
                            Regulations is a breach of this Lease.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td style="">
                            <p style="text-indent: 7pt;text-align: justify;width:500pt"> Landlord may change the Rules and
                            Regulations if the change benefits the Tenant or improves the health, safety, or welfare of
                            others. Landlord agrees to provide all changes to the Tenant in writing.
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (D)
                            </p>
                        </td>
                        <td style="">
                            <p style="text-indent: 7pt;text-align: justify;width:500pt">No more than
                            Tenant is responsible for
                            Tenant&#39;s family and guests obeying the Rules and Regulations and all laws.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </li>
        <li data-list-text="14.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">RULES AND
                REGULATIONS
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <span class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </span>
                            <span class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left; text-decoration:underline; font-style:italic">
                                Tenant Will:
                            </span>
                        </td>
                    </tr>
                    <tr style="height:16pt;">
                        <td style="width:380pt;">
                        <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                            <tbody>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            1.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Keep the Property clean,
                                                safe and obey all laws by the local municipality, Landlord&#39;s, and/or HOA policies and
                                                regulations.
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            2.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Dispose
                                            of all trash, garbage, and any other waste materials as required by Landlord and the
                                            law.
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            3.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Use care when using any
                                            of the electrical, plumbing, heating, ventilation or other facilities or appliances,
                                            etc..
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            4.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Notify Landlord
                                            immediately of any repairs needed and of any potentially harmful health or environmental
                                            conditions.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <span class="s37" style="padding-left: 4pt;text-indent: 0pt;text-align: left;">
                                (B)
                            </span>
                            <span class="s37" style="padding-left: 4pt;padding-bottom:-30px;text-indent: 0pt;line-height: 13pt;text-align: left; text-decoration:underline; font-style:italic">
                                Tenant will NOT:
                            </span>
                        </td>
                    </tr>
                    <tr style="height:16pt;">
                        <td style="text-indent: 7pt;">
                        <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                            <tbody>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            1.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Keep any flammable, hazardous, and/or explosive materials on the Property.
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            2.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Destroy, damage, or deface any part of the Property or common areas.
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            3.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Disturb the peace and quiet of other tenant(s) or neighbor(s).
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            4.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Make changes to the property, such as painting or remodeling, 
                                        without the written permission of the Landlord. Tenant agrees that any changes or improvements
                                         made will belong to the Landlord.
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height:16pt">
                                    <td style="width:22pt">
                                        <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                            5.
                                        </p>
                                    </td>
                                    <td style="width:500pt">
                                        <p style="text-align: left"> Perform any maintenance or repairs on the Property 
                                        unless otherwise stated in the Rules and Regulations, if any.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="15.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: justify;">CONDITION OF THE PROPERTY AT
                MOVE-IN</p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: left;width:530pt;text-align: justify;">Tenant has inspected the
                Property and agrees to accept the Property &quot;as-is,&quot; except for the following: (<i><b>Please
                        fill in the Move-In Check List Addendum ??? Page 22.</b></i>)
            </p>

            <table>
                <tbody>
                    <tr>
                        <td style="text-align: right; width:700px">
                            <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                  <tbody>
                      <tr>
                          <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                          <td style="width:500px"></td>
                          <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                      </tr>
                      <tr>
                          <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                          <td class="s28" style="width:500px"></td>
                          <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                      </tr>
                  </tbody>
            </table>
            <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
            <table>
                <tbody>
                    <tr style="height:16pt">

                    <td style="width:200pt">
                        <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                            Confidential - Thursday, July 7, 2022
                        </p>
                    </td>

                    <td style="width:200pt">
                        <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                            Page 4 of 22
                        </p>
                    </td>
                    <td>
                        <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            DAN Housing, Inc ?? 2016-2022
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
                <tr style="height:30px">
                    <td style="width:30%; padding-right:30px">
                        <img style="width:100%" src="images/logo.png" alt="logo"/>
                    </td>
                    <td style="width:70%">
                        <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                            108 Lakeside Drive, Southampton, PA 18966
                        </p>
                        <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                        <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                    </td>
                </tr>
            </table>
        </li> 
        <li data-list-text="16.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">SUBLEASING
                AND TRANSFER
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Landlord may
                            transfer this Lease to another landlord. Tenant agrees that this Lease remains the same with the
                            new Landlord or Property Management Company.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Tenant may not transfer this
                            Lease or sublease (rent to another person) the Property or any part of the Property without
                            Landlord&#39;s written permission.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="17.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">LANDLORD&#39;s RIGHT TO ENTER
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Tenant agrees that Landlord or
                            Landlord&#39;s representatives may enter the Property at reasonable hours to inspect, repair, or
                            show the Property. Tenant does not have to allow possible tenants to enter unless they are with
                            the Landlord or Landlord&#39;s representative, or they have written permission from the
                            Landlord.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> When possible, Landlord will
                            give the Tenant <b>24 </b>hours&#39; notice of the date, time. and the reason for the visit.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> In emergencies, the Landlord
                            may enter the Property without notice. If the Tenant is not present, Landlord will tell the
                            Tenant who was there and why within 24 hours of the visit.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (D)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Landlord may put up For Sale
                            or For Rent signs on or near Property.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="18.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: justify;">MAINTENANCE</p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: left;width:550pt">Landlord shall be responsible for
                maintenance and repair of the following items in, on, or about the Leased Premises if such maintenance
                or repair is required due to normal wear and tear: structural components, interior and exterior walls,
                floors, ceiling, roofs, sewer connections, plumbing, wiring, and household appliances, if applicable.
                However, Tenant shall be responsible for all costs associated with maintenance or repair of the
                foregoing items if Tenant or any person within Tenant&#39;s control knowingly, intentionally, deliberately,
                recklessly, or negligently destroys, defaces, damages, or impairs such items, including, without
                limitation, causing the plumbing system to become clogged or backed up other than by reason of ordinary
                wear and tear of the plumbing system. Notwithstanding the foregoing, it shall be presumed that all clogs
                to the plumbing system and broken glass are caused by abuse or negligence by the Tenant, and Tenant
                shall be responsible for all costs associated with maintenance or repair of such damages. Tenant shall
                maintain the Leased Premises in a clean, safe, and sanitary manner, keeping the entire Leased Premises
                free from trash, rubbish, abandoned, inoperable, and unregistered vehicles, and the like. In lieu of any
                repair or maintenance for which Landlord is responsible, should Landlord determine, in Landlord&#39;s sole
                and absolute discretion, that such repair or maintenance is not of material importance to the Leased
                Premises, Landlord may, at Landlord&#39;s option, without abatement, deduction or setoff of rent, leave such
                malfunctioning item abandoned in place without repair or maintenance, remove such item without a
                replacement, replace such item with a dissimilar item, or perform any other alternate remedy Landlord
                deems appropriate.</p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: justify;width:550pt">Tenant is responsible for disconnecting
                hoses from outside faucets during cold months. Any damages or repairs from failure to comply will be a
                Tenant&#39;s expense to repair or replace.</p>
            <p class="s1" style="padding-left: 30pt;text-indent: 0pt;text-align: justify;width:550pt">Tenant agrees to and shall
                immediately pay the first $75 of any repair or maintenance for which Tenant is responsible as additional
                rent. <span class="p">Such additional rent shall be immediately due from the Tenant at the option of the
                    Landlord. If the payment is not received promptly, it will be subtracted from the Tenant&#39;s security
                    deposit.</span>
            </p>
        </li>
        <li data-list-text="19.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">SMOKE AND CARBON MONOXIDE
                DETECTORS AND FIRE PROTECTION SYSTEMS
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Landlord has installed smoke
                            detectors in the Property. Tenant will maintain and regularly test smoke detectors to be sure
                            they are in working order and will replace smoke detector batteries as needed.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Tenant will immediately notify
                            Landlord or Landlord&#39;s agent of any broken or malfunctioning smoke detectors.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Failure to properly maintain
                            smoke detectors, replace smoke detector batteries or notify the Landlord or Landlord&#39;s agent
                            of any broken or malfunctioning smoke detectors is a breach of this Lease.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (D)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Landlord may provide additional
                            fire protection systems for the benefit of the Tenant. Responsibility for maintaining these
                            systems is stated in the Rules and Regulations if any.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (E)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Tenant will pay for damage to the
                            Property if Tenant fails to maintain smoke detectors or other fire protection systems.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (F)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> If the unit is equipped with
                            battery apparated Smoke or Carbon Monoxide alarms, the Tenant is responsible to maintain/ check,
                            and replace batteries if needed.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                  <tbody>
                      <tr>
                          <td style="text-align: right; width:700px">
                              <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                          </td>
                      </tr>
                  </tbody>
              </table>

              <table>
                  <tbody>
                      <tr>
                          <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                          <td style="width:500px"></td>
                          <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                      </tr>
                      <tr>
                          <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                          <td class="s28" style="width:500px"></td>
                          <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                      </tr>
                  </tbody>
              </table>
              <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
              <table>
                  <tbody>
                      <tr style="height:16pt">

                      <td style="width:200pt">
                          <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                              Confidential - Thursday, July 7, 2022
                          </p>
                      </td>

                      <td style="width:200pt">
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                              Page 5 of 22
                          </p>
                      </td>
                      <td>
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                              DAN Housing, Inc ?? 2016-2022
                          </p>
                      </td>
                  </tr>
                  </tbody>
              </table>
        </li>
        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
                <tr style="height:30px">
                    <td style="width:30%; padding-right:30px">
                        <img style="width:100%" src="images/logo.png" alt="logo"/>
                    </td>
                    <td style="width:70%">
                        <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                            108 Lakeside Drive, Southampton, PA 18966
                        </p>
                        <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                        <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                    </td>
                </tr>
            </table>
        <li data-list-text="20.">
            <p class="s1" style="padding-top: 2pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">RADON GAS</p>
            <p style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: justify; width:550pt"><a
                    href="http://www.epa.gov/radon/index.html"
                    style=" color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt;"
                    target="_blank">Radon is a naturally occurring radioactive gas that, when it has accumulated in a
                    building in sufficient quantities, may present health risks to persons who are exposed to it over
                    time. Levels of radon that exceed federal and state guidelines have been found in local municipally
                    guiding. Additional information regarding radon and radon testing may be obtained from your county
                    health unit. More information regarding Radon could be found on the </a>
                    <a href="http://www.epa.gov/radon/index.html" class="s69" target="_blank">EPA&#39;s </a><span
                    style=" color: #00F; font-family:Calibri, sans-serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 11pt;">website</span><span
                    class="s70"> </span>or contact your local municipality website. <b>Owner/Agent has No records of
                    Radon being present at the property</b>.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="21.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">HVAC/FURNACE AND THERMOSTAT
            </p>
            <p class="s12" style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: justify">
                HVAC/FURNACE AND THERMOSTAT Maintenance and Repairs responsibility by Landlord <span class="s46">
                    <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                </span></p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: justify;">Landlord will be responsible to control
                and maintain all the systems</p>
            <p class="s12" style="padding-top: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: justify">
                HVAC/FURNACE AND THERMOSTAT Maintenance and Repairs responsibility by Tenant <span class="s46">
                    <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                </span>
            </p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: justify;width:550pt">During cold months, the Tenant is
                responsible to keep the furnace lit and the thermostat at a reasonable temperature Tenant shall be
                responsible for repairing any damage resulting from the lack of heat. The use of stoves or the
                appliances that burn kerosene, propane, butane, gasoline, or any other highly flammable liquids whether
                for cooking or heating, is <b>STRICTLY PROHIBITED</b>. Tenant is responsible for changing filters once a
                month or as needed. Any damages or repairs from failure to comply will be a Tenant&#39;s expense to
                repair or replace.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="22.">
            <p class="s1" style="padding-top: 2pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">DESTRUCTION OF PROPERTY</p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            Tenant will
                            notify Landlord or Landlord&#39;s agent immediately if the Property is severely damaged or
                            destroyed by fire or by any other cause. Tenant will immediately notify Landlord or
                            Landlord&#39;s agent of any condition in the Property that could severely damage or destroy the
                            property.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            If the Property is severely damaged or destroyed for any reason:
                                <ol style="padding-left:30px">
                                    <li data-list-text="1.">
                                        <p style="text-align: left;">Tenant may continue to
                                        live on the livable part of the Property and pay a reduced rent as agreed to by Tenant
                                        and
                                        </p>
                                    </li> 
                                    <p style="text-align: left; text-indent:-45pt">OR</p>
                                    <li data-list-text="2.">
                                        <p style="line-height: 10pt;text-align: left;">End the
                                            Lease and have all money already paid as rent or security deposit returned, with no
                                            further liability on the part of the Landlord or Tenant.
                                        </p>
                                    </li>
                                </ol>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            If the Lease is ended, Landlord
                            will return any unused security deposit or advanced rent to the Tenant.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (D)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            If Tenant, Tenant&#39;s family,
                            or Tenant&#39;s guests cause damage by fire or by other means, this Lease will remain in effect
                            and the Tenant will continue to pay rent, even if the Tenant cannot occupy the Property.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="23.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">INSURANCE AND RELEASE
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td colspan="2">
                            <p style="text-align:left;width:550pt"> <b>IF CHECKED</b>, Tenant
                            must obtain a Rental insurance policy providing at least <span class="s45">$20,000.00</span><span
                            class="s4"> </span>personal property insurance and a <span
                            class="s72">
                            <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                            </span>minimum of <span class="s45">$300,000.00</span><span class="s4">
                            </span>liability insurance to protect Tenant, Tenant&#39;s property, and Tenant&#39;s guests who may be
                            injured while on the Property. Tenant must maintain this insurance through the entire Term and any
                            Renewal Term. Tenant will provide proof of insurance upon
                            request. <span class="s15">If Policy is transferable. New Declaration Page will be provided by the
                            Policy Holder(s) or their agent.</span>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Landlord is not legally
                            responsible for any injury or damage to the Tenant or Tenant&#39;s guests that occurs on the
                            Property.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:550pt"> Failure to properly maintain
                            smoke detectors, replace smoke detector batteries or notify the Landlord or Landlord&#39;s agent
                            of any broken or malfunctioning smoke detectors is a breach of this Lease.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:550pt"> Tenant is
                            responsible for any loss to Landlord caused by Tenant, Tenant&#39;s family, or their guests,
                            including attorney&#39;s fees.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="24.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">LANDLORD
                REMEDIES IF TENANT BREACHES LEASE
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td colspan="2">
                            <p style="text-align:left;width:550pt"> If Tenant breaches the
                            Lease for any reason, Landlord&#39;s remedies may include any or all of the following:
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Taking possession of the
                            Property by going to court to evict the Tenant. Tenant agrees to pay Landlord&#39;s legal fees
                            and reasonable costs, including the cost for Landlord or Landlord&#39;s agent to attend court
                            hearings.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:550pt"> Keeping
                            Tenant&#39;s Security Deposit to be applied against unpaid rent or damages, or both.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:550pt"> Tenant is
                            responsible for any loss to Landlord caused by Tenant, Tenant&#39;s family, or their guests,
                            including attorney&#39;s fees.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                  <tbody>
                      <tr>
                          <td style="text-align: right; width:700px">
                              <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                          </td>
                      </tr>
                  </tbody>
              </table>

              <table>
                  <tbody>
                      <tr>
                          <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                          <td style="width:500px"></td>
                          <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                      </tr>
                      <tr>
                          <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                          <td class="s28" style="width:500px"></td>
                          <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                      </tr>
                  </tbody>
              </table>
              <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
              <table>
                  <tbody>
                      <tr style="height:16pt">

                      <td style="width:220pt">
                          <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                              Confidential - Thursday, July 7, 2022
                          </p>
                      </td>

                      <td style="width:180pt">
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                              Page 6 of 22
                          </p>
                      </td>
                      <td>
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                              DAN Housing, Inc ?? 2016-2022
                          </p>
                      </td>
                  </tr>
                  </tbody>
              </table>
        </li>
        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
        </table>
        <li data-list-text="25.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">TENANT ENDING
                LEASE EARLY
            </p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td colspan="2">
                            <p style="text-align:left;width:570pt"> Tenant may end this Lease
                            and move out of the Property before the End Date of the Lease or any Renewal Term only with the written
                            permission of Landlord, and only if:
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Tenant gives Landlord at least
                            <span class="s45">60</span><span class="s4"> </span>days written notice, AND
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Tenant pays Landlord a
                            Termination fee of <span class="s45">two (2) months Rent</span>, <span class="s73">(</span><span
                            class="s74">Termination fee might change; on case by case basis, it must be approved by the
                            owner of the property</span><span class="s73">)</span>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Tenant continues to pay all rent
                            until the End Date of the Lease, or any Renewal Term, or until a new tenant is approved by
                            Landlord and a new lease takes effect, whichever happens first.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </li>
        <li data-list-text="26.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left">ABANDONMENT</p>
            <p style="padding-top: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;width:550pt">If the Tenant abandoned
                the Property while Rent is due and unpaid, Landlord has the right to take possession of the Property
                immediately and to rent the Property to another tenant. Any of Tenant&#39;s personal property or
                possessions remaining on the Property after Tenant moves out will be considered to be abandoned
                property. Landlord will have the right to remove and dispose of any abandoned property in any manner
                determined by Landlord. Tenant will pay for the cost of removal and disposal of abandoned property.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="27.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">SALE OF PROPERTY</p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            If Property is sold, Landlord will give Tenant in writing:
                                <span class="s45">&nbsp;5 </span><span class="s4"> </span>days after Start Date because the
                                previous tenant is still there or because of property damage, Tenant&#39;s exclusive rights are
                                to:
                                <ol style="padding-left:30px">
                                    <li data-list-text="1.">
                                        <p style="text-align: left;">Notice
                                        that the Security Deposit has been given to the new landlord, who will be responsible
                                        for it.
                                        </p>
                                    </li>
                                    <li data-list-text="2.">
                                        <p style="line-height: 10pt;text-align: left;">The
                                        name. address and phone number of the new landlord and where rent is to be paid if
                                        known.
                                        </p>
                                    </li>
                                </ol>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Tenant agrees that Landlord may
                            transfer Tenant&#39;s Security Deposit and advanced rent to the new landlord.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Landlord&#39;s responsibilities
                            to Tenant under this Lease end after the Property has been sold and the Lease transferred to a
                            new landlord.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (D)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> If Landlord sells the Property
                            during the Lease or any Renewal Term, Landlord has the right to terminate this Lease if Landlord
                            gives at least <span class="s45">60</span><span class="s4"> </span>days&#39; written notice to
                            Tenant. Tenant is not entitled to any payment of damages.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (E)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s57" style="text-align: justify;">If the Property is or
                            will be For Sale, Tenant will allow showings with 24-hour notice. All showings will be done by
                            the Landlord and/or Landlord&#39;s agents/representatives
                            </p> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="28.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">KEYS AND LOCKS</p>
            <p style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;line-height: 13pt;text-align: justify;width:530pt">
                Tenant will receive a minimum <span class="s45">&nbsp;1 </span><span class="s4"> </span>key(s) to the
                Premises</p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: justify;width:530pt">Tenant will receive a minimum <span
                    class="s45">&nbsp;1 </span><span class="s4"> </span>key(s) to the Mailbox (If Available) Tenant will
                receive a minimum <span class="s45">&nbsp;1 </span><span class="s4"> </span>Garage/Pool Door Opener(s)
                (If Available)</p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: justify;width:530pt">Tenant agrees not to install additional
                or different locks or gates on any doors or windows at the Premises without written approval by
                Landlord. Tenant agrees to return all keys to the Landlord. If all keys are not returned, Tenant agrees
                to reimburse the Landlords for the cost of re-keying all locks. Tenant will be charged a $75.00 fine for
                each lost key (per occurrence).</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="29.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">PARKING AND VEHICLES (If
                Private Parking available)</p>
            <p style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;width:530pt">Driveway/Garage and
                Street parking are permitted. You and your guests may park only in designated areas and not on the
                grass. Tenant must keep driveways free of oil and grease. Tenant cannot keep inoperable and unlicensed
                vehicles. No more than <span class="s45">&nbsp;1 </span><span class="s4"> </span>vehicle(s) is permitted
                at the property, if the property has space to park them, else cars must be park on the street, as
                permitted by Landlord and/or HOA, and/or local law. (See Paragraph 4)</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="30.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">STORAGE</p>
            <p style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;width:530pt">No Storage outside of
                the Premises is authorized, permitted, or provided under this Agreement unless stated otherwise below.
            </p>
            <ul >
                <li>
                    <p style="padding-top: 1pt;padding-left: 44pt;text-indent: -13pt;text-align: left;">
                    <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                    Storage Shed
                        <span class="s46">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </span>Pod Storage <span class="s46">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </span>Building Storage <span
                            class="s46">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </span>Other Storage</p>
                </li>
            </ul>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="31.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">CARPET CLEANING</p>
            <p style="padding-top: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;width:530pt">Tenant must use a
                professional carpet cleaning to clean carpets unless Landlord gives written permission to clean them
                yourself</p>
            <p class="s75" style="padding-left: 30pt;text-indent: 0pt;text-align: justify;">(<b>If Applicable</b><span
                    class="p">)</span>
            </p>
            <table>
                  <tbody>
                      <tr>
                          <td style="text-align: right; width:700px">
                              <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                          </td>
                      </tr>
                  </tbody>
              </table>

              <table>
                  <tbody>
                      <tr>
                          <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                          <td style="width:500px"></td>
                          <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                      </tr>
                      <tr>
                          <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                          <td class="s28" style="width:500px"></td>
                          <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                      </tr>
                  </tbody>
              </table>
              <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
              <table>
                  <tbody>
                      <tr style="height:16pt">

                      <td style="width:220pt">
                          <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                              Confidential - Thursday, July 7, 2022
                          </p>
                      </td>

                      <td style="width:200pt">
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                              Page 7 of 22
                          </p>
                      </td>
                      <td>
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                              DAN Housing, Inc ?? 2016-2022
                          </p>
                      </td>
                  </tr>
                  </tbody>
              </table>
        </li>
        <li data-list-text="32.">
            <p class="s1" style="padding-top: 2pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">PEST CONTROL
            </p>
            <p style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: left;">Tenant must keep the
                Premises free from visible infestation of roaches, ants, hornets, bees, mice, pet fleas, and other
                pests. Tenant shall report any problems immediately to the Landlord/Agent. (See Pest Control &amp; Bed
                Bugs Addendum)</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="33.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">PETS</p>
            <p style="padding-top: 1pt;padding-left: 33pt;text-indent: 0pt;text-align: left;">Tenant will not keep or
                allow any pets on any part of the Property unless checked.</p>
            <p class="s46" style="padding-left: 33pt;text-indent: -22pt;text-align: left;">
                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
            <span class="p">Tenant may
                    keep pets with Landlord&#39;s written permission according to the terms of the attached Rules and
                    Regulations. (See Pet Addendum)</span></p>
        </li>
        <li data-list-text="34.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">POOL/SPA
                and/or WATERFRONT</p>
            <p class="s46" style="padding-left: 33pt;text-indent: -22pt;text-align: left;">
                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                <span class="p">If Checked, Tenant must sign the ???Pool/Spa and Waterfront Addendum??? on Page 20.</span>
            </p>
            <p style="padding-left: 33pt;text-indent: 0pt;text-align: justify;">Community <span class="s46">
                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                </span>Private <span class="s46">
                    <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                </span>
            </p>
        </li>
        <li data-list-text="35.">
            <p class="s1" style="padding-top: 7pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">
                FIREPLACE/WOOD STOVE</p>
            <p class="s46" style="padding-top: 2pt;padding-left: 11pt;text-indent: 0pt;text-align: left;">
                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
            <span
                    class="p">If Checked, the Tenant must sign the ???Fireplace/Wood Stove Agreement Addendum??? on Page
                    21.</span></p>
        </li>
        <li data-list-text="36.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left">FIRE HAZARDS</p>
            <p style="padding-top: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;width:600pt">In order to minimize
                fire hazards and comply with city ordinances, Tenant shall comply with the following:</p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: justify;width:550pt">Tenant(s) and guests will adhere to the
                Owner/Community rules and regulations other Management policies concerning fire hazards, which may be
                revised from time to time. No person shall knowingly maintain a fire hazard. Grills, Barbeques, and any
                other outdoor cooking or open flame devices will be used only on the ground level and will be placed a
                minimum of <u><b>&nbsp;10 </b></u><b> </b>feet from any building. Such devices will not be used close to
                combustible materials, tall grass or weeds, on exterior walls or on roofs, indoors, on balconies or
                patios, or in other locations which may cause fires.
            </p>
            <p style="padding-left: 30pt;text-indent: 0pt;text-align: justify;width:550pt">Only firewood is permitted in the
                fireplace. No artificial substances, such as Duraflame?? logs are permitted. Ashes must be disposed of in
                metal containers, after ensuring the ashes are cold. Flammable or combustible liquids and fuels shall
                not be used or stored (including stock for sale) in dwellings, near exits, stairways breezeways, or
                areas normally used for the ingress and egress of people. This includes motorcycles and any apparatus or
                engine using the flammable or combustible liquid as fuel. No person shall block or obstruct any exit,
                aisle, passageway, hallway, or stairway leading to or from any structure. Resident(s) are solely
                responsible for fines or penalties caused by their actions in violation of local fire protection codes.
            </p>
            <ul>
                <li>
                    <p class="s28" style="padding-left: 42pt;text-indent: -11pt;text-align: justify;width:530pt">
                        <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                    Electric grills
                        may be used within patio area <span class="s29">
                            <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                        </span>Gas &amp; Propane barbeques are not
                        permitted <span class="s29">
                            <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                        </span>Charcoal Grills only <span class="s29">
                            <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        </span>See
                        Apartment Regulations</p>
                </li>
            </ul>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="37.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">SMOKING</p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s37" style="padding-left: 6pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                            NO SMOKING of
                            any substance is allowed on the Premises or common areas. If smoking does occur on the Premises
                            or common areas. Tenant is responsible for all damage caused by smoking including, but not
                            limited to stains, burns, odors, and removal of Debris:
                                <ol style="padding-left:30px">
                                    <li data-list-text="1.">
                                        <p style="text-align: left;">Tenant acknowledges
                                        that in order to remove the odor caused by smoking, Landlord may need to replace carpet
                                        and drapes and paint the entire premises regardless of when these items were last
                                        cleaned, replaced, or repainted. Such actions and other necessary steps will impact the
                                        return of any security deposit.
                                        </p>
                                    </li>
                                    <li data-list-text="2.">
                                        <p style="line-height: 10pt;text-align: left;">If smoking does occur
                                        on the Premises or common areas, Tenant is in material breach of this Agreement; Tenant,
                                        guests, and all others may be required to leave the Premises
                                        </p>
                                    </li>
                                </ol>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> The Premises or common areas
                            may be subject to a local non-smoking ordinance.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> With the Owner approval,
                            Tenant might be allowed to smoke outside, Tenant is responsible to clean
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="38.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">TENANT HAS FEWER RIGHTS THAN
                MORTGAGE LENDER</p>
            <p style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: left;width:550pt">Landlord may have a
                mortgage on the Property. The rights of the mortgage lender come before the rights of the Tenant.
                (Example: If the Landlord fails to make mortgage payments, the mortgage lender could take the Property
                and end this Lease.) <b>TENANT MAY BE WAIVING OR GIVING UP TENANT&#39;S RIGHTS. TENANT UNDERSTANDS THAT
                    IF THERE IS A FORECLOSURE, THE NEW OWNER WILL HAVE THE RIGHT TO END THIS LEASE.</b>
            </p>
            <table>
                  <tbody>
                      <tr>
                          <td style="text-align: right; width:700px">
                              <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                          </td>
                      </tr>
                  </tbody>
              </table>

              <table>
                  <tbody>
                      <tr>
                          <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                          <td style="width:500px"></td>
                          <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                      </tr>
                      <tr>
                          <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                          <td class="s28" style="width:500px"></td>
                          <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                      </tr>
                  </tbody>
              </table>
              <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
              <table>
                <tbody>
                    <tr style="height:16pt">

                      <td style="width:220pt">
                          <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                              Confidential - Thursday, July 7, 2022
                          </p>
                      </td>

                      <td style="width:200pt">
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                              Page 8 of 22
                          </p>
                      </td>
                      <td>
                          <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                              DAN Housing, Inc ?? 2016-2022
                          </p>
                      </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
        </table>

        <li data-list-text="39.">
            <p class="s1"
                style="padding-top: 2pt;padding-bottom: 2pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">
                UTILITY COMPANIES INFO (If Applicable - <span class="p">Please see Page 3, Paragraph 10</span>)</p>
            <table style="border-collapse:collapse;margin-left:30.81pt" cellspacing="0">
                <tr style="height:16pt">
                    <td
                        style="width:140pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s38" style="padding-right: 4pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            Water/Sewer Company:</p>
                    </td>
                    <td
                        style="width:293pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s10" style="padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">-
                        </p>
                    </td>
                    <td
                        style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td
                        style="width:122pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s38" style="padding-right: 4pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            Electric Company:</p>
                    </td>
                    <td
                        style="width:293pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s10" style="padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">-
                        </p>
                    </td>
                    <td
                        style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td
                        style="width:122pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s38" style="padding-right: 4pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            Gas Company:</p>
                    </td>
                    <td
                        style="width:293pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s10" style="padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">-
                        </p>
                    </td>
                    <td
                        style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td
                        style="width:122pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s38" style="padding-right: 4pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            Trash Company:</p>
                    </td>
                    <td
                        style="width:293pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s10" style="padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">-
                        </p>
                    </td>
                    <td
                        style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td
                        style="width:122pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s38" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Cable Company:</p>
                    </td>
                    <td
                        style="width:293pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s10" style="padding-left: 7pt;text-indent: 0pt;text-align: left;">-</p>
                    </td>
                    <td
                        style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                </tr>
                <tr style="height:16pt">
                    <td
                        style="width:122pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s38" style="padding-right: 4pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            Alarm Company:</p>
                    </td>
                    <td
                        style="width:293pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s10" style="padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">-
                        </p>
                    </td>
                    <td
                        style="width:94pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                </tr>
            </table>
                <p class="s58" style="padding-left: 29pt;padding-top:3pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                    <img src="images/star.png" alt="star">
                    <img src="images/star.png" alt="star">
                    <img src="images/star.png" alt="star">
                    <span class="s57">Tenant must provide Landlord with Electric and/or Gas Account Number ??? If Applicable</span>
                </p>
        </li>
        <li data-list-text="40">
            <p class="s1" style="padding-top: 2pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">LEAD-BASED
                PAINT HAZARD DISCLOSURES FOR PROPERTY BUILT BEFORE 1978
            </p>
            <ul>
                <li>
                    <p style="padding-left: 33pt;text-indent: -22pt;text-align: left;">
                        <img src="images/checkbox.png" alt="checkbox" style="width:13px;height:13px">
                        Property was built in or after 1978. This paragraph does not apply.
                    </p>
                    <p class="s46" style="padding-top: 1pt;padding-left: 28pt;text-indent: -22pt;text-align: left;">
                        <img src="images/checkbox-cross.png" alt="checkbox" style="width:17px;height:17px">
                        <span class="s21">Property was built before 1978. Landlord and Tenant must provide information in this
                        paragraph.</span>
                    </p>
                </li>
            </ul>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td>
                            <p class="s1" style="padding-left: 6pt;text-align:left;width:520pt"> 
                            Landlord does not know of any lead-based paint or lead-based paint hazards on the Property
                            unless stated below:
                            </p>
                            <p style="padding-top: 6pt;padding-left: 6pt;text-indent: 0pt;text-align: justify;width:520pt">
                            _____ <span class="p">Landlord knows that there is lead-based paint, or that there
                            are lead-based paint hazards on the Property. Landlord must explain what the Landlord knows
                            about the lead-based paint and hazards, including how the Landlord learned that it is there,
                            where it is, and the condition of painted walls, trim and other surfaces. Landlord must give
                            Tenant any other information Landlord has about the lead-based paint and lead-based paint
                            hazards.</span>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p class="s1" style="padding-left: 6pt;text-align:left;width:520pt"> 
                            Landlord has no
                            reports/records about <span class="s77">lead-based paint or lead-based paint hazards on the
                            Property unless stated below:
                            </p>
                            <p style="padding-top: 7pt;padding-left: 6pt;text-indent: 0pt;text-align: justify;width:520pt">
                            _____ <span class="p">Landlord has given Tenant all available records and reports
                                about lead-based paint or lead-based paint hazards on the property. List records and
                                reports:</span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr class="hr" style="width:550pt;margin:10px 0 5px">
                        </td>
                    </tr>
                    
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p class="s1" style="text-align:left;width:530pt"> Protect your Family from Lead in your Home brochure attached to this lease.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                    <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (D)
                            </p>
                        </td>
                        <td style="width:530pt">
                            <p class="s1" style="text-align:left;padding-left: 6pt;width:530pt"> Tenant initial all that is true:
                            </p>
                            <p style="padding-top: 6pt;text-indent: 0pt;padding-left: 6pt;text-align: left;width:530pt">
                            _____ Tenant has received the pamphlet <i>Protect Your Family from Lead in Your Home</i>.</p>
                            <p style="padding-top: 6pt;text-indent: 0pt;padding-left: 6pt;text-align: left;width:530pt">
                            _____ <span class="p">Tenant has read the information given by Landlord in paragraph 39
                                (A) and (B) above.</span></p>
                            <p style="padding-top: 6pt;text-indent: 0pt;padding-left: 6pt;text-align: left;width:530pt">
                            _____ <span class="p">Tenant has received all records and reports that Landlord listed in
                                paragraph 39 (B) above.</span></p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (E)
                            </p>
                        </td>
                        <td>
                            <p class="s1" style="text-align:left;padding-left: 6pt;width:530pt"> 
                            Landlord and Tenant certify, by signing this Lease, that the information given is true to the
                            best of their knowledge.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="41.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">NEIGHBORHOOD CONDITIONS</p>
            <p style="padding-top: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;width:550pt">Tenant is advised to
                satisfy himself/herself as to neighborhood or area conditions, including, but not limited to, schools,
                proximity and adequacy of law enforcement, crime statistics, the proximity of registered felons or
                offenders, fire protection, other governmental services, availability, adequacy and cost of any
                wired/wireless internet connections or other technology services and installations, proximity to
                commercial, industrial or agricultural activities, existing and proposed transportation, construction
                and development that may affect noise, view, or traffic, airport noise, noise or odor from any source,
                wild and domestic animals, other nuisances, hazards, or circumstances, cemeteries, facilities and
                condition of common areas, conditions and influences of significance to certain cultures and/or
                religions, and personal needs, requirements and preferences of Tenant.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="42.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">ADDITIONAL TERMS</p>
            <p class="s79" style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: left;">None</p>
        </li>
        <li data-list-text="43.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">ADDENDUMS</p>
            <p style="padding-top: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: left;">Addendums are the part of
                this lease.
            </p>
            <table style="padding-top:60pt">
                <tbody>
                    <tr>
                        <td style="text-align: right; width:700px">
                            <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3> 
                        </td>
                    </tr>
                </tbody>
            </table>

            <table>
                <tbody>
                    <tr>
                        <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                        <td style="width:500px"></td>
                        <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                    </tr>
                    <tr>
                        <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                        <td class="s28" style="width:500px"></td>
                        <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                    </tr>
                </tbody>
            </table>
            <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:1px 20px">
            <table>
                <tbody>
                    <tr style="height:16pt">
                    
                    <td style="width:200pt">
                        <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                            Confidential - Thursday, July 7, 2022
                        </p>
                    </td>
                
                    <td style="width:200pt">
                        <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                            Page 9 of 22
                        </p>
                    </td>
                    <td>
                        <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            DAN Housing, Inc ?? 2016-2022
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </li>
        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
        </table>
        <li data-list-text="44.">
            <p class="s1" style="padding-top: 2pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">CAPTIONS</p>
            <p style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;">The headings in this
                Lease are meant only to make it easier to find the paragraphs.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="45.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left">ENTIRE AGREEMENT</p>
            <p style="padding-top: 1pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;width:550pt">This Lease is the
                entire agreement between Landlord and Tenant. No spoken or written agreements made before are a part of
                this Lease unless they are included in this Lease in writing. No waivers or modifications of this Lease
                during the Term of this Lease are valid unless in writing signed by both Landlord and Tenant.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="46.">
            <p class="s1" style="padding-top: 3pt;padding-left: 31pt;text-indent: -18pt;text-align: left;">MEDIATION</p>
            <table style="border-collapse:collapse;margin-left:29.38pt" cellspacing="0">
                <tbody>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (A)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Consistent
                        with paragraphs B and C below, Landlord and Tenant agree to mediate any dispute or claim arising
                        between them out of this Agreement, or any resulting transaction, before resorting to court
                        action. Mediation fees, if any, shall be divided equally among the parties involved. If for any
                        dispute or claim to which this paragraph applies, any party commences an action without first
                        attempting to resolve the matter through mediation or refuses to mediate after a request has
                        been made, then that party shall not be entitled to recover attorney fees, even if they would
                        otherwise be available to that party in any such action.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (B)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> The following matters are
                        excluded from mediation: (i) an unlawful detainer action; (ii) the filing or enforcement of a
                        mechanic&#39;s lien; and (iii) any matter within the jurisdiction of probate, small claims, or
                        bankruptcy court. The filing of court action to enable the recording of a notice of pending
                        action, for order of attachment, receivership, injunction, or other provisional remedies, shall
                        not constitute a waiver of the mediation provision.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (C)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Landlord and Tenant agree to
                        mediate disputes or claims involving Listing Agent, Leasing Agent or property manager
                        (???Broker???), provided Broker shall have agreed to such mediation prior to, or within a reasonable
                        time after, the dispute or claim is presented to such Broker. Any election by Broker to
                        participate in mediation shall not result in Broker being deemed a party to this Agreement.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (D)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:530pt"> Landlord may provide additional
                            fire protection systems for the benefit of the Tenant. Responsibility for maintaining these
                            systems is stated in the Rules and Regulations if any.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (E)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> Tenant will pay for damage to the
                            Property if Tenant fails to maintain smoke detectors or other fire protection systems.
                            </p>
                        </td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:22pt">
                            <p class="s37" style="padding-left: 4pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                                (F)
                            </p>
                        </td>
                        <td>
                            <p style="text-align:left;width:500pt"> If the unit is equipped with
                            battery apparated Smoke or Carbon Monoxide alarms, the Tenant is responsible to maintain/ check,
                            and replace batteries if needed.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li data-list-text="47.">
            <p class="s1" style="padding-left: 31pt;text-indent: -18pt;text-align: left;">NOTICE BEFORE SIGNING</p>
        </li>
    </ol>
    <p style="padding-top: 2pt;padding-left: 30pt;text-indent: 0pt;text-align: justify;">If Tenant(s) has legal
        questions, Tenant is advised to consult an attorney.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s80" style="padding-left: 31pt;text-indent: 0pt;text-align: left;">ENDING LEASE</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s1" style="padding-left: 31pt;text-indent: 0pt;text-align: left;padding-bottom:60pt">By signing below, Landlord and Tenant
        acknowledge that they have read and understood the notices and explanatory information set forth in this Lease.
    </p>
    <table>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: <span style="color: #000"></span>
                    <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">_________________________________________</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: 
                <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">__________________________________________</span></span>  
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Landlord&#39;s Signature: <span style="color: #000;text-align:right"></span>
                    <span class="s83" style="padding-left: 11pt;text-indent: 0pt;text-align: left;border-bottom:1px solid #000">Gary Segal ??? <span
                    class="s84">On Behalf of Dan Housing, Inc.</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <span class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></span>
                
            </td>
        </tr>
    </table>
    <table style="padding-top:40pt">
        <tbody>
            <tr>
                <td style="text-align: right; width:700px">
                    <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3> 
                </td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                <td style="width:500px"></td>
                <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
            </tr>
            <tr>
                <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                <td class="s28" style="width:500px"></td>
                <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
            </tr>
        </tbody>
    </table>
    <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:1px 20px">
    <table>
        <tbody>
            <tr style="height:16pt">
            
            <td style="width:200pt">
                <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                    Confidential - Thursday, July 7, 2022
                </p>
            </td>
        
            <td style="width:200pt">
                <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                    Page 10 of 22
                </p>
            </td>
            <td>
                <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                    DAN Housing, Inc ?? 2016-2022
                </p>
            </td>
        </tr>
        </tbody>
    </table>

    <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
      <tr style="height:30px">
          <td style="width:30%; padding-right:30px">
              <img style="width:100%" src="images/logo.png" alt="logo"/>
          </td>
          <td style="width:70%">
              <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                  108 Lakeside Drive, Southampton, PA 18966
              </p>
              <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
              <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
          </td>
      </tr>
    </table>
    
    <p class="s85" style="padding-top: 2pt;text-indent: 0pt;line-height: 157%;text-align: center;">
        NOTICES AND INFORMATION <br /> CONSUMER CONTRACT ACT</p>
    <p class="s75" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">
        The Office of the Attorney General has not pre-approved any special conditions or additional terms added by any
        parties. Any special conditions or additional terms must comply with the Tenant&#39;s state Plain Language
        Consumer Contract Act.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s1" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">INFORMATION REGARDING SECURITY
        DEPOSITS</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s1" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Taking Security Deposits</p>
    <p class="s75" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">
        During the first year of a Lease, a Landlord may not require a security deposit of more than two months&#39;
        rent. After the first year of a Lease, this amount cannot exceed one month&#39;s rent, and any security deposit
        of more than one month&#39;s rent must be returned to the Tenant. If rent is increased during the first five
        years a Tenant is in a Property, Landlord may require that the amount of the security deposit be increased as
        well. After five years, the security deposit cannot be increased even if the rent goes up.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s1" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Holding Security Deposits</p>
    <p class="s75" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">If
        a Security Deposit is more than $100, the Landlord must keep the Security Deposit in a special bank account
        called an escrow account. Landlord is required to tell Tenant the name and address of the bank where the escrow
        account is located, as well as the amount of the deposit in the escrow account. After the second year of a
        lease, the Security Deposit must be in an escrow account that earns interest. The interest that is earned on
        Security Deposits belongs to the Tenant, but each year Landlord has the right to keep some or all of that
        interest up to an amount equal to 1% of the Security Deposit to cover certain administrative expenses. [For
        example, if a Security Deposit of $500 is held in an escrow account that earns</p>
    <p class="s75" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">$10 of interest in
        a year, Landlord has the option to retain up to 1% of the Security Deposit amount ($5) out of that interest.] If
        the interest carried is less than 1% of the Security Deposit amount, Landlord may keep all the interest, but the
        Landlord can never take any money out of the original Security Deposit for administrative expenses. After the
        second year of a lease, any interest belonging to Tenant must be returned to Tenant once a year on the
        anniversary of the first day of the original lease term.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s1" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Returning Security Deposits</p>
    <p class="s75" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">
        When a lease is ended, Landlord has 30 days to give Tenant a written list of any damage to the Property that
        Landlord claims Tenant is responsible for. If the cost to repair this damage is less than the amount of the
        Security Deposit being held, Landlord must return the amount of the deposit not being held back to fix those
        damages when the list is provided, along with any additional interest that has not yet been paid to Tenant. If
        damages are more than the amount of the Security Deposit plus interest, Landlord may keep the entire Security
        Deposit. <i><b>The landlord may not keep any of the Security Deposit to cover damages if a list of damages is
                not given to Tenant within that 30-day period. </b></i>If Landlord doesn&#39;t return Tenant&#39;s
        Security Deposit within 30 days of the end of the Lease, Tenant may sue, and Landlord may be required to pay
        Tenant up to twice the amount of the portion of the Security Deposit that should have been returned. It is the
        responsibility of Tenant to give Landlord his/her new address after the Lease is ended. <i><b>If Tenant does not
                provide a new address to Landlord, Landlord is not liable for damages for failing to return Security
                Deposit monies within 30 days.</b></i></p>
    <p class="s1" style="padding-top: 8pt;text-indent: 0pt;text-align: center;">INFORMATION
        REGARDING TENANTS&#39; RIGHTS</p>
    <p class="s75" style="padding-top: 7pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">
        Landlord cannot increase rents, decrease services, or threaten to go to court to evict Tenant because Tenant:
        (l) complains to a government agency or to Landlord about a building or housing code violation; (2) organizes or
        joins a Tenant&#39;s organization; or (3) uses Tenant&#39;s legal rights in a lawful manner.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s1" style="text-indent: 0pt;line-height: 13pt;text-align: center;">INFORMATION
        REGARDING MEDIATION</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s75" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">Mediation is a way
        of resolving problems. A mediator may help the disputing parties reach an agreeable solution without having to
        involve the courts. Landlord and Tenant may agree to take any disputes arising from this Lease to a mediation
        program offered by the local association of REALTORS?? or to another mediator. Landlord and Tenant can agree to
        mediation as part of this Lease (by signing a mediation form to attach to this Lease), or they can sign an
        agreement to mediate after a dispute arises.</p>
    
        <table style="padding-top:80pt">
            <tbody>
                <tr>
                    <td style="text-align: right; width:700px">
                        <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                    <td style="width:500px"></td>
                    <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                </tr>
                <tr>
                    <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                    <td class="s28" style="width:500px"></td>
                    <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
        <table>
            <tbody>
                <tr style="height:16pt">

                <td style="width:200pt">
                    <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                        Confidential - Thursday, July 7, 2022
                    </p>
                </td>

                <td style="width:200pt">
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        Page 11 of 22
                    </p>
                </td>
                <td>
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                        DAN Housing, Inc ?? 2016-2022
                    </p>
                </td>
            </tr>
            </tbody>
        </table>



    <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
      <tr style="height:30px">
          <td style="width:30%; padding-right:30px">
              <img style="width:100%" src="images/logo.png" alt="logo"/>
          </td>
          <td style="width:70%">
              <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                  108 Lakeside Drive, Southampton, PA 18966
              </p>
              <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
              <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
          </td>
      </tr>
  </table>

    <p class="s1" style="padding-top: 2pt;text-indent: 0pt;text-align: center;">INFORMATION
        REGARDING MOLD AND INDOOR AIR QUALITY</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s75" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">Indoor mold
        contamination and the inhalation of bioaerosols (bacteria, mold spores, pollen, and viruses) have been
        associated with allergic responses including upper respiratory congestion, cough, mucous membrane irritation,
        fever, chills, muscle ache, or other transient inflammation or allergy. Claims have been made that exposure to
        mold contamination and bioaerosols has led to serious infection, immunosuppression, and illnesses of neuro or
        systemic toxicity. A sampling of indoor air quality and other methods exist to determine the presence and scope
        of any indoor contamination. Because individuals may be affected differently, or not affected at all, by mold
        contamination, the surest approach to determine the presence of contamination is to engage the services of a
        qualified professional to undertake an assessment and/or sampling. Assessments and samplings for the presence of
        mold contamination can be performed by qualified industrial hygienists, engineers, laboratories, and home
        inspection companies that offer these services. Information pertaining to indoor air quality is available
        through the United States Environmental Protection Agency and may be obtained by contacting IAQ INFO, P.O. Box
        37133, Washington, D.C. 20013-7133, 1-800-438-4318. Tenants should immediately notify Landlord if there is any
        condition in the Property that may lead to the growth of mold or if the Tenant believes that mold growth is
        present in the Property.</p>
        

    <p class="s86" style="text-indent: 0pt;text-align: center;">LEAD-BASED PAINT HAZARDS</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s1" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Lead Hazards Disclosure Requirements
    </p>
    <p class="s75" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">
        The Residential Lead-Based Paint Hazard Reduction Act says that any Landlord of property built before 1978 must
        give the Tenant an EPA pamphlet titled <i>Protect Your Family from Lead in Your Home</i>. The Landlord also must
        tell the Tenant and the Broker for the Landlord what the Landlord knows about lead-based paint and lead-based
        paint hazards that are in or on the property being rented. Landlord must tell the Tenant how the Landlord knows
        that lead-based paint and lead-based paint hazards are on the property, where the lead-based paint and
        lead-based paint hazards are, and the condition of the painted surfaces. Any Landlord of a pre-1978 structure
        must also give the Tenant any records and reports that the Landlord has or can get about lead-based paint or
        lead-based paint hazards in or around the property being rented, the common areas, or other dwellings in
        multi-family housing. It is also required that the EPA pamphlet is given to tenants before the Landlord starts
        any major renovations on a pre-1978 structure. The Act does not apply to housing built-in 1978 or later.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s1" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Lead Warning Statement</p>
    <p class="s75" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">
        Housing built before 1978 may contain lead-based paint. Lead from paint, paint chips, and dust can pose health
        hazards if not taken care of properly. Lead exposure is especially harmful to young children and pregnant women.
        Before renting pre-1978 housing, Landlords must disclose the presence of known lead-based paint and lead-based
        paint hazards in the dwelling. Tenants must also receive a federally approved pamphlet on lead poisoning
        prevention.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="padding-top:180pt">
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: <span style="color: #000"></span>
                    <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">_________________________________________</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: 
                <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">__________________________________________</span></span>  
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Landlord&#39;s Signature: <span style="color: #000;text-align:right"></span>
                    <span class="s83" style="padding-left: 11pt;text-indent: 0pt;text-align: left;border-bottom:1px solid #000">Gary Segal ??? <span
                    class="s84">On Behalf of Dan Housing, Inc.</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <span class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></span>
                
            </td>
        </tr>
    </table>

    <table style="padding-top:30pt">
            <tbody>
                <tr>
                    <td style="text-align: right; width:700px">
                        <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                    <td style="width:500px"></td>
                    <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                </tr>
                <tr>
                    <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                    <td class="s28" style="width:500px"></td>
                    <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
        <table>
            <tbody>
                <tr style="height:16pt">

                <td style="width:200pt">
                    <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                        Confidential - Thursday, July 7, 2022
                    </p>
                </td>

                <td style="width:200pt">
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        Page 12 of 22
                    </p>
                </td>
                <td>
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                        DAN Housing, Inc ?? 2016-2022
                    </p>
                </td>
            </tr>
            </tbody>
        </table>

        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
    </table>

    <p class="s88" style="padding-top: 2pt;text-indent: 0pt;text-align: center;">SMOKE-FREE PROPERTY
        ADDENDUM</p>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Landlord: <span
            style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
    <p class="s4" style="padding-top: 6pt;padding-left: 79pt;text-indent: -31pt;line-height: 150%;text-align: left;">
        Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
        </span>
    </p>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Tenant(s): 
        <span style=" color: #1F4E79;">Emily Magner and Family</span>
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s90" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">This lease &quot;Smoke-Free Property
        Addendum&quot; is incorporated into and made part of the lease agreement executed by and between the Landlord
        and the Tenant referring to and incorporating the Leased Premises listed above.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">The Landlord has implemented a ???No Smoking???
        policy due to the known health effects of secondhand smoke, increased costs incurred due to additional
        maintenance and cleaning, fire risks, and higher insurance costs associated with permitted smoking in the
        building. For this Smoke-Free Property Addendum, smoking is defined as inhaling, breathing, or carrying and lit
        a cigarette, cigar, pipe, or other tobacco or non-tobacco smoked product in any form, legal and illegal.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">The Tenant(s), occupants, and Tenant&#39;s invitees
        and guests acknowledge the Leased Premises are designated as a smoke-free living space. No smoking anywhere
        within the rental unit is permitted. Where applicable, smoking shall not be permitted in any common areas,
        including but not limited to hallways, adjoining grounds, balconies, and/or patios.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">Tenant(s) acknowledges that the Landlord does not
        promise or guarantee of smoke-free living space. Additionally, Tenant(s) acknowledges that Landlord&#39;s
        implementation of smoke-free living space does not make the Landlord responsible for the Tenant&#39;s health or
        of the smoke-free condition of the Tenant&#39;s unit and the common areas. However, the Landlord will try to
        enforce the terms within this Smoke-Free Property Addendum with the Lease to create a smoke-free environment.
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">Tenant accepts that Landlord has limited ability
        to police, monitor, or enforce the terms of this Smoke-Free Property Addendum. Tenant understands enforcement
        depends upon the compliance of the Tenant(s) occupants, Tenant&#39;s guests, and invitees. Landlord puts on notice
        any Tenant(s) with respiratory illnesses, diseases, allergies, or any other physical or mental condition
        relating to the effects of smoke that the Landlord assumes no greater duty of care to enforce this Addendum than
        any other landlord obligation under the Lease.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">If the Tenant violates any part of this Addendum,
        the Tenant will then be in default of the Lease. If a default occurs, the Landlord may initiate legal
        proceedings under all applicable laws and regulations to evict or have the Tenant removed from the Leased
        Premises and seek a judgment against the Tenant for any monies owed to the Landlord because of the Tenant&#39;s
        default. Any violation of this Addendum, even a single instance, constitutes a material breach of this addendum
        and may lead to immediate termination of the lease and withhold of security deposit.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">If the Tenant violates this ???Smoke-Free Addendum???
        and is reported to the Owner or Homeowners Association, the Tenant will be charged a $100.00 fee for each
        occurrence.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s57" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">With Landlord&#39;s permission Tenant
        might be allowed to smoke outside, but must obey State, Local municipality, and Homeowner Association (if any)
        smoking rules.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    
    <table>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: <span style="color: #000"></span>
                    <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">_________________________________________</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: 
                <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">__________________________________________</span></span>  
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Landlord&#39;s Signature: <span style="color: #000;text-align:right"></span>
                    <span class="s83" style="padding-left: 11pt;text-indent: 0pt;text-align: left;border-bottom:1px solid #000">Gary Segal ??? <span
                    class="s84">On Behalf of Dan Housing, Inc.</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <span class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></span>
                
            </td>
        </tr>
    </table>

    <table>
            <tbody>
                <tr>
                    <td style="text-align: right; width:700px">
                        <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                    <td style="width:500px"></td>
                    <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                </tr>
                <tr>
                    <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                    <td class="s28" style="width:500px"></td>
                    <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
        <table>
            <tbody>
                <tr style="height:16pt">

                <td style="width:200pt">
                    <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                        Confidential - Thursday, July 7, 2022
                    </p>
                </td>

                <td style="width:200pt">
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        Page 13 of 22
                    </p>
                </td>
                <td>
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                        DAN Housing, Inc ?? 2016-2022
                    </p>
                </td>
            </tr>
            </tbody>
        </table>

        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
    </table>

    <p class="s88" style="padding-top: 2pt;text-indent: 0pt;text-align: center;">Marijuana Addendum
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Landlord: <span
            style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
    <p class="s4" style="padding-top: 6pt;padding-left: 79pt;text-indent: -31pt;line-height: 150%;text-align: left;">
        Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
        </span>
    </p>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Tenant(s): 
        <span style=" color: #1F4E79;">Emily Magner and Family</span>
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s90" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This lease &quot;Marijuana
        Addendum&quot; is incorporated into and made part of the lease executed by and between the Landlord and the
        Tenant referring to and incorporating the Leased Premises listed above.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s91" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">The possession, use, cultivation,
        manufacture, or sale of any illegal substance, including marijuana, is strictly prohibited. Tenant accepts that:
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <ol id="l43">
        <li data-list-text="1.">
            <p class="s91" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">Possession of marijuana,
                whether dried, extracted, or in living plant form, is a criminal act under federal law. Tenant agrees
                not to engage in any criminal activity in or near the Leased Premises, including the possession, use, or
                cultivation of marijuana.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="2.">
            <p class="s91" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">The use of marijuana in
                the Leased Premises creates a nuisance: marijuana smoke may dissipate into common areas or neighboring
                units, interfering with other tenants&#39; health, property, and their reasonable expectation of clean air
                and a drug-free environment.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="3.">
            <p class="s91" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">Increased humidity may
                increase the risk of mold and other structural damage to the Leased Premises. Accordingly, increasing
                humidity levels for the cultivation of marijuana plants on the Leased Premises is prohibited. Tenant
                accepts financial responsibility for any and all costs necessary to restore the Leased Premises to its
                original condition due to the tenant&#39;s cultivation of marijuana.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="4.">
            <p class="s91" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">The Leased Premises are to
                be used solely for residential purposes. Any cultivation and/or processing of marijuana plants shall
                constitute a lease violation as a prohibited business activity.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="5.">
            <p class="s91" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">If a part of this Addendum
                is declared invalid or conflicts with all applicable laws, ordinances, or statutes, the remainder of
                this addendum will remain in full force and effect.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
        </li>
        <li data-list-text="6.">
            <p class="s91" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">Any violation of this
                Addendum, even a single instance, constitutes a material breach of this addendum and may lead to
                immediate termination of the lease and withhold of security deposit.</p>
        </li>
    </ol>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s90" style="padding-left: 5pt;padding-top:30pt;text-indent: 0pt;text-align: left;">Tenant understands all of the provisions
        listed above and agrees to comply with the requirements of this Addendum.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="padding-top:40pt">
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: <span style="color: #000"></span>
                    <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">_________________________________________</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: 
                <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">__________________________________________</span></span>  
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Landlord&#39;s Signature: <span style="color: #000;text-align:right"></span>
                    <span class="s83" style="padding-left: 11pt;text-indent: 0pt;text-align: left;border-bottom:1px solid #000">Gary Segal ??? <span
                    class="s84">On Behalf of Dan Housing, Inc.</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <span class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></span>
                
            </td>
        </tr>
    </table>

    <table>
            <tbody>
                <tr>
                    <td style="text-align: right; width:700px">
                        <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                    <td style="width:500px"></td>
                    <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                </tr>
                <tr>
                    <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                    <td class="s28" style="width:500px"></td>
                    <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
        <table>
            <tbody>
                <tr style="height:16pt">

                <td style="width:200pt">
                    <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                        Confidential - Thursday, July 7, 2022
                    </p>
                </td>

                <td style="width:200pt">
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        Page 14 of 22
                    </p>
                </td>
                <td>
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                        DAN Housing, Inc ?? 2016-2022
                    </p>
                </td>
            </tr>
            </tbody>
        </table>

        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
    </table>

    <p class="s88" style="padding-top: 2pt;padding-left: 20pt;text-indent: 0pt;text-align: left;">Zero Tolerance for
        Criminal Activity and Megan&#39;s Law Addendum</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Landlord: <span
            style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
    <p class="s4" style="padding-top: 6pt;padding-left: 79pt;text-indent: -31pt;line-height: 150%;text-align: left;">
        Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
        </span>
    </p>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Tenant(s): 
        <span style=" color: #1F4E79;">Emily Magner and Family</span>
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s90" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;width:580pt">This Lease Addendum is
        incorporated into and made part of the lease executed by and between the Landlord and the Tenant referring to
        and incorporating the Leased Premises listed above.</p>
    <p class="s92" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">The Landlord has zero-tolerance for
        criminal activity in or around the Leased Premises.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s91" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:540pt">
        This policy applies to all Tenants, occupants, guests, and any visitors in or around the Leased Premises. The
        Landlord will immediately report any evidence of criminal and/or drug related activity to the proper
        authorities, and the Tenant&#39;s engagement in any criminal activity is a default of the Lease.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s91" style="padding-left: 5pt;text-indent: 0pt;line-height: 113%;text-align: justify;width:580pt">The Tenant
        understands his/her responsibility to call the police/emergency services and report any suspicious activity
        observed, and then notify the Landlord.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s91" style="padding-left: 5pt;text-indent: 0pt;line-height: 113%;text-align: justify;width:580pt">The Tenant
        understands that disturbances of the peace not only infringe on the neighbors&#39; peaceful enjoyment of their
        property but are also default of the Lease.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s91" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">In the event of any
        criminal activity in which the Tenant is directly or indirectly involved, the Landlord will take the legal
        measures necessary to evict the Tenant(s) from the Leased Premises. This includes but is not limited to illegal
        drug activity, gang involvement, organized crime, and disturbances of the peace.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s91" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">The Tenant
        understands that violation of this addendum is a default of the Lease and will result in the Landlord taking the
        necessary steps towards eviction of the Tenant. The Tenant may then be responsible for the rent remaining due
        for the balance of the Lease term, court costs, attorney fees, and other charges in accordance with all
        applicable local laws and regulations.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s92" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">The Megan&#39;s Law Statement.</p>
    <p style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;width:580pt">Before or
        After taking occupancy in the above-stated Premises, <span style=" color: #313D4F;">Tenant(s) should exercise
            whatever due to diligence Tenant(s) deems necessary with respect to the information on sexual offenders
            registered under Local/State Law, such information may be obtained by contacting your local police
            department or the Department of State Police. </span>Tenant acknowledges and understands that the Property
        Owner, Property Management Company, and Property Employees are unable to obtain such information for you.</p>
    <p class="s91" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: justify;width:580pt">The Tenant(s)
        acknowledge receipt of a copy of this disclosure statement.</p>
    <p style="text-indent: 0pt;text-align: left;padding-bottom:60pt"><br /></p>
    <table>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: <span style="color: #000"></span>
                    <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">_________________________________________</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: 
                <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">__________________________________________</span></span>  
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Landlord&#39;s Signature: <span style="color: #000;text-align:right"></span>
                    <span class="s83" style="padding-left: 11pt;text-indent: 0pt;text-align: left;border-bottom:1px solid #000">Gary Segal ??? <span
                    class="s84">On Behalf of Dan Housing, Inc.</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <span class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></span>
                
            </td>
        </tr>
    </table>

    <table>
            <tbody>
                <tr>
                    <td style="text-align: right; width:700px">
                        <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                    <td style="width:500px"></td>
                    <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                </tr>
                <tr>
                    <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                    <td class="s28" style="width:500px"></td>
                    <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
        <table>
            <tbody>
                <tr style="height:16pt">

                <td style="width:200pt">
                    <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                        Confidential - Thursday, July 7, 2022
                    </p>
                </td>

                <td style="width:200pt">
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        Page 15 of 22
                    </p>
                </td>
                <td>
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                        DAN Housing, Inc ?? 2016-2022
                    </p>
                </td>
            </tr>
            </tbody>
        </table>

        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
        </table>

    <p class="s88" style="padding-top: 2pt;text-indent: 0pt;text-align: center;">Bedbug Addendum
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Landlord: <span
            style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
    <p class="s4" style="padding-top: 6pt;padding-left: 79pt;text-indent: -31pt;line-height: 150%;text-align: left;">
        Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
        </span>
    </p>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Tenant(s): 
        <span style=" color: #1F4E79;">Emily Magner and Family</span>
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s90" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">The goal of this Addendum is to 
     protect the quality of the rented unit???s environment from the affects of bed bugs by providing sufficient
     information and instructions. It is also the goal of this Addendum to clearly set forth the responsibilities
      of each of the parties to the rental agreement.
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s91" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Resident(s) hereby agree to prevent
     and control possible infestation by adhering to the below list of responsibilities:
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <ol id="l44">
        <li data-list-text="1.">
            <p class="s75" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">Check for hitch-hiking
                bedbugs. If you stay in a hotel or another home, inspect your clothing, luggage, shoes, and personal
                belongings for signs of bedbugs before re-entering your apartment. Check backpacks, shoes, and clothing
                after using public transportation or visiting theaters. After guests visit, inspect beds, bedding, and
                upholstered furniture for signs of a bedbug infestation.</p>
        </li>
        <li data-list-text="2.">
            <p class="s75" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">Resident shall report any
                problems immediately to Owner/Agent. Even a few bedbugs can rapidly multiply to create a major
                infestation that can spread to other units.</p>
        </li>
        <li data-list-text="3.">
            <p class="s75" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">The Resident shall
                cooperate with pest control efforts. If your unit or a neighbor&#39;s unit is infested, a pest management
                professional may be called in to eradicate the problem. Your unit must be properly prepared for
                treatment. The resident must comply with recommendations and requests from the pest control specialist
                prior to professional treatment including but not limited to:</p>
            <ul >
                <li class="s75" style="list-style: disc inside;padding-left: 59pt;text-indent: -18pt;text-align: justify;width:520pt">
                        Placing all
                        bedding, drapes, curtains, and small rugs in bags for transport to laundry or dry cleaners.
                        Heavily infested mattresses are not salvageable and must be sealed in plastic and disposed of
                        properly. Empty dressers, nightstands, <u>and</u> closets. Remove all items from floors; bag all
                        clothing, shoes, boxes, toys, etc. Bag and tightly seal washable and non-washable items
                        separately. Used bags must be disposed of properly.
                </li>
                <li class="s75" style="list-style: disc inside;padding-left: 59pt;text-indent: -18pt;text-align: justify;width:520pt">
                        Vacuum all floors,
                        including inside closets. Vacuum all furniture including inside drawers and nightstands. Vacuum
                        mattresses and box springs. Carefully remove vacuum bags sealing them tightly in plastic and
                        discarding of properly.
                </li>
                <li class="s75" style="list-style: disc inside;padding-left: 59pt;text-indent: -18pt;text-align: justify;width:520pt">
                        Wash all
                        machine-washable bedding, drapes, and clothing, etc. on the hottest water temperature and dry on
                        the highest heat setting. Take other items to the dry cleaner making sure to inform the dry
                        cleaner that the items are infested with bedbugs. Discard any items that cannot be
                        decontaminated.
                </li>
                <li class="s75" style="list-style: disc inside;padding-left: 59pt;text-indent: -18pt;text-align: justify;width:520pt">
                        Move furniture
                        toward the center of the room so that technicians can easily treat carpet edges where bed bugs
                        congregate, as well as walls and furniture surfaces. Be sure to leave easy access to closets.
                </li>
            </ul>
        </li>
        <li data-list-text="4.">
            <p class="s75" style="padding-top: 4pt;padding-left: 41pt;text-indent: -18pt;text-align:justify;width:540pt">Resident
                agrees to indemnify and hold the Owner/Agent harmless from any actions, claims, losses, damages, and
                expenses including but not limited to attorneys&#39; fees that Owner/Agent may incur as a result of the
                negligence of the Resident(s) or any guest occupying or using the premises.</p>
        </li>
        <li data-list-text="5.">
            <p class="s75" style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt">It is acknowledged that
                the Owner/Agent shall not be liable for any loss of personal property to the Resident, as a result of an
                infestation of bedbugs. The Resident agrees to have personal property insurance to cover such losses. By
                signing below, the undersigned Resident(s) agree and acknowledge having read and understood this
                addendum.</p>
        </li>
        <li data-list-text="6.">
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: justify;width:540pt"><a href="https://www.epa.gov/bedbugs"
                    style=" color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt;"
                    target="_blank">For more information on Bedbugs visit the EPA website: </a><a
                    href="https://www.epa.gov/bedbugs" class="s94" target="_blank">https://www.epa.gov/bedbugs</a></p>
        </li>
    </ol>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s90" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">By signing below, the undersigned Resident(s)
     agree and acknowledge having read and understood this addendum.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: <span style="color: #000"></span>
                    <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">_________________________________________</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: 
                <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">__________________________________________</span></span>  
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Landlord&#39;s Signature: <span style="color: #000;text-align:right"></span>
                    <span class="s83" style="padding-left: 11pt;text-indent: 0pt;text-align: left;border-bottom:1px solid #000">Gary Segal ??? <span
                    class="s84">On Behalf of Dan Housing, Inc.</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <span class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></span>
                
            </td>
        </tr>
    </table>
    <table>
            <tbody>
                <tr>
                    <td style="text-align: right; width:700px">
                        <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                    <td style="width:500px"></td>
                    <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                </tr>
                <tr>
                    <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                    <td class="s28" style="width:500px"></td>
                    <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
        <table>
            <tbody>
                <tr style="height:16pt">

                <td style="width:200pt">
                    <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                        Confidential - Thursday, July 7, 2022
                    </p>
                </td>

                <td style="width:200pt">
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        Page 16 of 22
                    </p>
                </td>
                <td>
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                        DAN Housing, Inc ?? 2016-2022
                    </p>
                </td>
            </tr>
            </tbody>
        </table>

        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
    </table>
    
    <p class="s88" style="padding-top: 2pt;padding-left: 20pt;text-indent: 0pt;text-align: center;">Mold Addendum</p>
    <p class="s4" style="padding-left: 82pt;text-indent: 0pt;text-align: left;">Landlord: <span
            style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
    <p class="s4" style="padding-left: 79pt;text-indent: -31pt;line-height: 150%;text-align: left;">
        Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
        </span>
    </p>
    <p class="s4" style="padding-left: 82pt;text-indent: 0pt;text-align: left;">Tenant(s): 
        <span style=" color: #1F4E79;">Emily Magner and Family</span>
    </p>
    <!-- <p style="text-indent: 0pt;text-align: left;"><br /></p> -->
    <p class="s95" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">This ???MOLD ADDENDUM??? is incorporated
        into and made part of the lease agreement, executed by the Landlord and the Tenant referring to and
        incorporating the leased Premises. The goal of this Addendum is to protect the quality of the rented unit&#39;s
        environment from the affects of mold by providing sufficient information and instructions. It is also the goal
        of this Addendum to clearly set forth the responsibilities of each of the parties to the rental agreement.</p>
    <!-- <p style="text-indent: 0pt;text-align: left;"><br /></p> -->
    <p class="s96" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">There are no established guidelines
        for unacceptable air quality caused by mold. Mold is a naturally occurring phenomenon. Mold and/ or mildew
        should be cleaned as soon as it appears. Mold and/or mildew growth can often be seen in the form of
        discoloration. The different colors of mold range from white to black, including, but not limited to, green,
        gray, brown, orange, yellow, and other colors. Your housekeeping and living habits are an integral part of the
        ability of mold to grow. In order for mold to grow, water and/or moisture must be present.</p>
    <!-- <p style="text-indent: 0pt;text-align: left;"><br /></p> -->
    <p class="s95" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">TENANT AGREES to maintain the
        Premises in a manner that prevents the occurrence of mold or mildew growth within the Premises. In furtherance
        of such obligation, TENANT AGREES TO PERFORM THE FOLLOWING:</p>
    <!-- <p style="text-indent: 0pt;text-align: left;"><br /></p> -->
    <p class="s96" style="padding-left: 5pt;text-indent: 0pt;line-height: 11pt;text-align: left;">To keep the Premises
        free from dirt and debris that can harbor mold;</p>
    <ol id="l46">
        <li data-list-text="1.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: left;width:580pt">To inspect
                the Premises regularly for the indications and sources of indoor moisture;</p>
        </li>
        <li data-list-text="2.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;text-align: left;width:580pt">To immediately report to
                management any discoloration evidenced on walls, floors, or ceiling and/or any water intrusion, such as
                plumbing leaks, drips, or flooding;</p>
        </li>
        <li data-list-text="3.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: left;width:580pt">To not
                air-dry wet clothes indoors;</p>
        </li>
        <li data-list-text="4.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: left;width:580pt">To always
                utilize stove hood vents when cooking items that may cause steam;</p>
        </li>
        <li data-list-text="5.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;text-align: left;width:580pt">When showering/bathing,
                always utilize the bathroom fan and notify management of any nonworking fan;</p>
        </li>
        <li data-list-text="6.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: left;width:580pt">To water
                plants outdoors;</p>
        </li>
        <li data-list-text="7.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;text-align: left;width:580pt">To notify management in
                writing of overflows from the bathroom, kitchen, or any other water source facilities, especially in
                cases where the overflow may have permeated walls, flooring, or cabinets;</p>
        </li>
        <li data-list-text="8.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: left;width:585pt">TO
                IMMEDIATELY WIPE DOWN ANY WATER OR CONDENSATION THAT APPEARS AND/OR DEVELOPS ON ANY AREA OR ANY SURFACE;
            </p>
        </li>
        <li data-list-text="9.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;text-align: justify;width:570pt">To clean upon the first
                appearance, any mildew from condensation on window interiors, bathroom &amp; kitchen walls, floor,
                and/or ceilings. Cleaning is done with common household bleach. The mixture is one-part bleach to 10
                parts water. You may add a little dish soap to the water mixture to cut any dirt and oil on the surface
                you are cleaning that may hold mold. Do not add other cleaning chemicals, especially ammonia. Dispose of
                any rags or sponges used to clean the mold in a sealed bag;</p>
        </li>
        <li data-list-text="10.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;text-align: left;width:570pt">TO REPORT TO MANAGEMENT IN
                WRITING AND VERBALLY THE PRESENCE OF ANY MOLD GROWTH on surfaces inside the Premises;</p>
        </li>
        <li data-list-text="11.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: justify;width:570pt">To allow
                management immediate entry to the Premises to inspect and make necessary repairs in the event mold or
                water intrusion is present;</p>
        </li>
        <li data-list-text="12.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: justify;width:570pt">To use
                all reasonable care to close all windows and other openings in the Premises to prevent outdoor water
                from penetrating into the interior unit;</p>
        </li>
        <li data-list-text="13.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;text-align: justify;width:570pt">To clean and dry any
                visible condensation/moisture on windows and window tracks, walls, and other surfaces, including
                personal property as soon as reasonably possible. Condensation on windows indicates that fresh air is
                not being circulated in the home to prevent moisture buildup. Open your windows and air out your home
                for short periods of time to keep fresh air present. Excessive running of your heater will cause
                condensation in your home;</p>
        </li>
        <li data-list-text="14.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: left;width:570pt">To notify
                management of any problems with air-conditioning or heating systems that are discovered by Tenant;</p>
        </li>
        <li data-list-text="15.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: left;width:570pt">To maximize
                the circulation of air by keeping furniture away from the walls and out of corners;</p>
        </li>
        <li data-list-text="16.">
            <p class="s97" style="padding-left: 19pt;text-indent: -13pt;line-height: 11pt;text-align: left;width:570pt"><a
                    href="https://www.epa.gov/mold"
                    style=" color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt;"
                    target="_blank">For more information on Mold visit EPA website: </a><span
                    style=" color: #0462C1; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: underline; font-size: 9pt;">https://www.epa.gov/mold</span>
                <a href="https://www.epa.gov/mold/brief-guide-mold-moisture-and-your-home"
                    style=" color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt;"
                    target="_blank">| </a><a href="https://www.epa.gov/mold/brief-guide-mold-moisture-and-your-home"
                    target="_blank">https://www.epa.gov/mold/brief-guide-mold-moisture-and-your-home</a></p>
        </li>
        <li data-list-text="17.">
            <p class="s96" style="padding-left: 19pt;text-indent: -13pt;text-align: left;width:570pt">In addition to the above, The
                Tenant further agrees to perform all responsibilities set forth in the MOLD/MOISTURE DISCLOSURE
                STATEMENT.</p>
            <!-- <p style="text-indent: 0pt;text-align: left;"><br /></p> -->
            <p class="s96" style="padding-left: 19pt;text-indent: 0pt;text-align: justify;width:570pt">TENANT FURTHER AGREES to
                indemnify and hold harmless Owner and Owner&#39;s management agents from any suits, actions, claims, losses,
                damages, and expenses (including reasonable attorney&#39;s and court costs) and any liability whatsoever
                that Owner and/or its management agents may sustain or incur as a result of Tenant&#39;s failure to comply
                or perform with the obligations set forth above or as the result of intentional or negligent action or
                failure to act on the part of Tenant or any other person living in, occupying, or using the Premises.
            </p>
            <!-- <p style="text-indent: 0pt;text-align: left;"><br /></p> -->
            <p class="s95" style="padding-left: 19pt;text-indent: 0pt;text-align: justify;width:570pt">Tenant hereby certifies that
                Tenant has read the MOLD/MOISTURE DISCLOSURE STATEMENT and has read and understood the contents of this
                ADDENDUM and has received a duplicate copy.</p>
            <!-- <p style="text-indent: 0pt;text-align: left;"><br /></p> -->
            <table>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:5pt">
                <p class="s81">Tenant&#39;s Signature: <span style="color: #000"></span>
                    <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">_________________________________________</span></span>
                </p>
            </td>
            <td style="padding-bottom:5pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:5pt">
                <p class="s81">Tenant&#39;s Signature: 
                <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">__________________________________________</span></span>  
                </p>
            </td>
            <td style="padding-bottom:5pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;">
                <p class="s81">Landlord&#39;s Signature: <span style="color: #000;text-align:right"></span>
                    <span class="s83" style="padding-left: 11pt;text-indent: 0pt;text-align: left;border-bottom:1px solid #000">Gary Segal ??? <span
                    class="s84">On Behalf of Dan Housing, Inc.</span></span>
                </p>
            </td>
            <td>
                <span class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></span>
                
            </td>
        </tr>
    </table>
    <table>
        <tbody>
            <tr>
                <td style="text-align: right; width:700px">
                    <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                </td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                <td style="width:500px"></td>
                <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
            </tr>
            <tr>
                <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                <td class="s28" style="width:500px"></td>
                <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
            </tr>
        </tbody>
    </table>
    <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
    <table>
        <tbody>
            <tr style="height:16pt">

            <td style="width:200pt">
                <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                    Confidential - Thursday, July 7, 2022
                </p>
            </td>

            <td style="width:200pt">
                <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                    Page 17 of 22
                </p>
            </td>
            <td>
                <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                    DAN Housing, Inc ?? 2016-2022
                </p>
            </td>
        </tr>
        </tbody>
    </table>

    <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
        <tr style="height:30px">
            <td style="width:30%; padding-right:30px">
                <img style="width:100%" src="images/logo.png" alt="logo"/>
            </td>
            <td style="width:70%">
                <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                    108 Lakeside Drive, Southampton, PA 18966
                </p>
                <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
            </td>
        </tr>
    </table>
        
            <h2 style="padding-top: 2pt;text-indent: 0pt;text-align: center;">Asbestos Disclosure
                Addendum</h2>
                <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Landlord: <span
                        style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
                <p class="s4" style="padding-top: 6pt;padding-left: 79pt;text-indent: -31pt;line-height: 150%;text-align: left;">
                    Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
                    </span>
                </p>
                <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Tenant(s): 
                    <span style=" color: #1F4E79;">Emily Magner and Family</span>
                </p>
            <p class="s95" style="padding-top: 8pt;padding-left: 11pt;text-indent: 0pt;text-align: justify;width:570pt">This
                ???ASBESTOS DISCLOSURE ADDENDUM??? is incorporated into and made part of the lease agreement, executed by
                the Landlord and the Tenant referring to and incorporating the Leased Premises. The goal of this
                Addendum is to protect the quality of the rented unit&#39;s environment from the affects of asbestos by
                providing sufficient information and instructions. It is also the goal of this Addendum to clearly set
                forth the responsibilities of each of the parties to the rental agreement.</p>
            <p class="s96" style="padding-top: 6pt;padding-left: 11pt;text-indent: 0pt;text-align: justify;width:570pt">Asbestos is
                a building material commonly found in buildings constructed before 1981. It has been determined that the
                mere existence of Asbestos does not pose a health risk as long as the asbestos is not disturbed, and the
                fibers are not released into the air. As such, owners and residents must take reasonable precautions to
                minimize the risk of disturbance of asbestos materials.</p>
            <p class="s96"
                style="padding-top: 6pt;padding-left: 11pt;text-indent: 0pt;line-height: 108%;text-align: justify;width:570pt">This
                Addendum is intended as a <b>WARNING </b>that the Premises may contain asbestos, which may be present in
                buildings constructed prior to 1981 and may expose him/her to a chemical known to cause cancer.</p>
            <p class="s96" style="padding-top: 6pt;padding-left: 11pt;text-indent: 0pt;text-align: justify;width:570pt">The terms
                of this Addendum are intended by the parties to be added to and incorporated into the rental/lease
                agreement between Resident and Owner/Agent that currently governs the tenancy of Resident(s) in the
                Premises.</p>
            <p class="s96" style="padding-top: 6pt;padding-left: 24pt;text-indent: 0pt;text-align: left;">
                (<i><b>Owner/Agent must check one</b></i>)</p>
            <ul>
                <li>
                    <p class="s96"
                        style="padding-top: 3pt;padding-bottom: 3pt; padding-left: 47pt;text-indent: -22pt;line-height: 80%;text-align: left;width:550pt">
                        <img src="images/checkbox.png" alt="checkbox-cross" style="width:13px;height:13px">
                        Owner/Agent discloses that the Premises contains asbestos materials and/or asbestos hazards that
                        are located in or around the following areas of the Premises:
                    </p>
                </li>
            </ul>
            <p style="margin-left: 41pt;margin-right: 20pt;text-indent: 0pt;line-height: 1pt;text-align: left;border-bottom:1px solid #000"></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p style="margin-left: 41pt;margin-right: 20pt;text-indent: 0pt;line-height: 1pt;text-align: left;border-bottom:1px solid #000"></p>
            <p class="s96"
                style="padding-top: 3pt;padding-bottom: 3pt; padding-left: 47pt;text-indent: -22pt;line-height: 80%;text-align: left;width:550pt">
                <img src="images/checkbox-cross.png" alt="checkbox-cross" style="width:17px;height:17px">
                Owner/Agent has no knowledge of asbestos-containing materials and/or asbestos
                hazards located in or around the Premises, however, Owner/Agent notifies Resident that the
                Premises<u><i> may</i></u><i> </i>contain asbestos materials.
            </p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s96" style="padding-top: 3pt;padding-left: 47pt;text-indent: 0pt;text-align: justify;width:530pt">Resident
                understands and agrees that as his/her part of taking reasonable steps to minimize the risk of exposure
                to asbestos-materials, he/she will not be doing anything that may disturb the building materials of the
                Premises in a manner that may cause the asbestos fibers to be released. This includes, but is not
                limited to the following:</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <ol id="l48">
                <li data-list-text="1.">
                    <p class="s96" style="padding-left: 68pt;text-indent: -18pt;text-align: justify;width:515pt">Scraping,
                        pounding, sanding, or remodeling any portion of the Premises that may release dust and which may
                        cause the asbestos materials to be released into the air.</p>
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </li>
                <li data-list-text="2.">
                    <p class="s96" style="padding-left: 68pt;text-indent: -18pt;text-align: justify;width:515pt">Making any
                        repairs, improvements, or alterations to the Premises without obtaining Owner/Agent&#39;s prior
                        written consent and (when appropriate) providing Owner/Agent with a plan to prevent the release
                        or exposure of any asbestos.</p>
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </li>
                <li data-list-text="3.">
                    <p class="s96" style="padding-left: 68pt;text-indent: -18pt;text-align: justify;width:515pt">Limiting contact
                        with the ceiling of the Premises, including not hanging hooks or other objects in the ceiling,
                        not penetrating the ceiling in any way, not drilling holes in the ceiling or attaching fixtures
                        to the ceiling, not allowing objects to come in contact with the ceiling, limiting the contact
                        of water with the ceiling, not cleaning or painting the ceiling, no repair to the ceiling or
                        light fixtures and no other activity that may cause damage or disturbance to the ceiling or
                        other asbestos-material located on the Premises.</p>
                </li>
            </ol>
        </li>
    </ol>
    <p style="padding-top: 4pt;padding-left: 47pt;text-indent: 0pt;text-align: justify;"><a
            href="https://www.epa.gov/asbestos"
            style=" color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt;"
            target="_blank">For more information on Asbestos visit the EPA website: </a><a
            href="https://www.epa.gov/asbestos" target="_blank">https://www.epa.gov/asbestos</a></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s96" style="padding-top: 3pt;padding-left: 17pt;text-indent: 0pt;text-align: justify;width:570pt">
        Resident(s)/Occupants(s) agrees to immediately notify Owner/Agent in writing of any signs of asbestos
        disturbance or other damage to the Premises, such as crumbling, cracking, peeling, or deterioration of the walls
        or ceiling. The resident also agrees to immediately notify Owner/Agent in writing if any of the above-stated
        activities in paragraphs 1-3 occurs.</p>
    <p class="s95" style="padding-top: 6pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">By signing below,
        Resident(s) acknowledges and confirms that he/she has received, reviewed, and understands this Addendum.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: <span style="color: #000"></span>
                    <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">_________________________________________</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Tenant&#39;s Signature: 
                <span class="s81"> &nbsp;<span style="color: #000;padding-left: 11pt;text-align:right">__________________________________________</span></span>  
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <p class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></p>
            </td>
        </tr>
        <tr style="padding-left: 28pt">
            <td colspan="3" style="padding-left:35pt;padding-bottom:10pt">
                <p class="s81">Landlord&#39;s Signature: <span style="color: #000;text-align:right"></span>
                    <span class="s83" style="padding-left: 11pt;text-indent: 0pt;text-align: left;border-bottom:1px solid #000">Gary Segal ??? <span
                    class="s84">On Behalf of Dan Housing, Inc.</span></span>
                </p>
            </td>
            <td style="padding-bottom:10pt">
                <span class="s81"> Date: &nbsp;<span style="color: #000">____________________</span></span>
                
            </td>
        </tr>
    </table>
    <table>
            <tbody>
                <tr>
                    <td style="text-align: right; width:700px">
                        <h3 style="padding-left: 0px;padding-top: 2pt;text-indent: -100pt;text-align: right;"> GS <span class="s34"></span></h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td style="text-align: left;border-bottom:1px solid #000;padding-left:30px;"></td>
                    <td style="width:500px"></td>
                    <td style="padding-right: 11pt;border-bottom:1px solid #000"></td>
                </tr>
                <tr>
                    <td class="s28" style="text-indent: 0pt;text-align: left;padding-left:30px">Tenant Initials</td>
                    <td class="s28" style="width:500px"></td>
                    <td class="s28" style="text-indent: 0pt;text-align: right;">Landlord Initials</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr" style="height:10px;background-color:#0462C1;border:none;margin:20px">
        <table>
            <tbody>
                <tr style="height:16pt">

                <td style="width:200pt">
                    <p class="s28" style="padding-right: 5pt;padding-left:30px;text-indent: 0pt;line-height: 13pt;">
                        Confidential - Thursday, July 7, 2022
                    </p>
                </td>

                <td style="width:200pt">
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        Page 18 of 22
                    </p>
                </td>
                <td>
                    <p class="s28" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                        DAN Housing, Inc ?? 2016-2022
                    </p>
                </td>
            </tr>
            </tbody>
        </table>

        <table style="border-collapse:collapse;margin-left:8.74pt;padding-top:20px" cellspacing="0">
            <tr style="height:30px">
                <td style="width:30%; padding-right:30px">
                    <img style="width:100%" src="images/logo.png" alt="logo"/>
                </td>
                <td style="width:70%">
                    <p class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color:#0563c1">
                        108 Lakeside Drive, Southampton, PA 18966
                    </p>
                    <span class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1">(215) 355-4094 Office | (215) 220-3419 Fax |</span>
                    <a class="s10" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;color: #0563c1;text-decoration:underline" href="http://danhousing.com/"> www.DanHousing.com</a>
                </td>
            </tr>
    </table>
    <h2 style="padding-top: 2pt;text-indent: 0pt;text-align: center;">Pet Addendum (if Applicable)</h2>
    <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Landlord: <span
        style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
        <p class="s4" style="padding-top: 6pt;padding-left: 79pt;text-indent: -31pt;line-height: 150%;text-align: left;">
            Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
            </span>
        </p>
        <p class="s4" style="padding-top: 12pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Tenant(s): 
            <span style=" color: #1F4E79;">Emily Magner and Family</span>
        </p>
    <p class="s98" style="padding-top: 4pt;padding-left: 15pt;text-indent: 0pt;text-align: left;width:580pt">This LEASE ADDENDUM is
        incorporated into and made part of the lease agreement, executed by and between the Landlord and the Tenant
        referring to and incorporating the leased premises. <span class="s103">&nbsp;1 </span><span class="s104">
        </span>pet(s) are allowed at the premises. (Please fill separate form for each pet).</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="border-collapse:collapse;margin-left:36.94pt" cellspacing="0">
        <tr style="height:10pt">
            <td style="width:60pt">
                <p class="s105"
                    style="padding-left: 5pt;padding-right: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">
                    Type of Pet:
                </p>
            </td>
            <td style="width:130pt">
                <p class="s106" style="padding-left: 2pt;text-indent: 0pt;line-height: 8pt;text-align: left;border-bottom:1px solid #000">
                    Cat 
                </p>
            </td>
            <td style="width:57pt">
                <p class="s105" style="padding-right: 2pt;text-indent: 0pt;line-height: 8pt;text-align: right">Name:
                </p>
            </td>
            <td style="width:150pt">
                <p class="s107" style="padding-left: 2pt;text-indent: 0pt;line-height: 8pt;text-align: left;border-bottom:1px solid #000">
                    
                </p>
            </td>
            <td style="width:59pt">
                <p class="s105" style="padding-right: 4pt;text-indent: 0pt;line-height: 8pt;text-align: right">Breed:
                </p>
            </td>
            <td style="width:103pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s108" style="padding-left: 6pt;text-indent: 0pt;line-height: 8pt;text-align: left;border-bottom:1px solid #000">N/A</p>
            </td>
        </tr>
        <tr style="height:17pt">
            <p class="s105"
                    style="padding-left: 5pt;padding-right: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">
                    Weight/Size:
                </p>
            <td style="width:135pt">
                <p class="s107" style="padding-left: 2pt;text-indent: 0pt;text-align: left;color:#000">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </td>
            <td style="width:57pt">
                <p class="s105" style="padding-right: 2pt;text-indent: 0pt;text-align: right;">Age:</p>
            </td>
            <td style="width:146pt">
                <p class="s107" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
            <td style="width:59pt">
                <p class="s105" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Other:</p>
            </td>
            <td style="width:103pt;border-top-style:solid;border-top-width:1pt">
                <p class="s107" style="text-indent: 0pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td style="width:53pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-left: 5pt;padding-right: 1pt;text-indent: 0pt;line-height: 10pt;text-align: center;">
                    Type of Pet:</p>
            </td>
            <td style="width:135pt">
                <p class="s106"
                    style="padding-top: 4pt;padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N/A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
            </td>
            <td style="width:57pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-right: 2pt;text-indent: 0pt;line-height: 10pt;text-align: right;">
                    Name:</p>
            </td>
            <td style="width:146pt">
                <p class="s107"
                    style="padding-top: 4pt;padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
            <td style="width:59pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 10pt;text-align: right;">
                    Breed:</p>
            </td>
            <td style="width:103pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s108"
                    style="padding-top: 4pt;padding-left: 6pt;text-indent: 0pt;line-height: 10pt;text-align: left;">N/A
                </p>
            </td>
        </tr>
        <tr style="height:17pt">
            <td style="width:53pt">
                <p class="s105" style="padding-left: 1pt;padding-right: 1pt;text-indent: 0pt;text-align: center;">
                    Weight/Size:</p>
            </td>
            <td style="width:135pt">
                <p class="s107" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
            <td style="width:57pt">
                <p class="s105" style="padding-right: 2pt;text-indent: 0pt;text-align: right;">Age:</p>
            </td>
            <td style="width:146pt">
                <p class="s107" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
            <td style="width:59pt">
                <p class="s105" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Other:</p>
            </td>
            <td style="width:103pt;border-top-style:solid;border-top-width:1pt">
                <p class="s107" style="text-indent: 0pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td style="width:53pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-left: 5pt;padding-right: 1pt;text-indent: 0pt;line-height: 10pt;text-align: center;">
                    Type of Pet:</p>
            </td>
            <td style="width:135pt">
                <p class="s106"
                    style="padding-top: 4pt;padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N/A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
            </td>
            <td style="width:57pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-right: 2pt;text-indent: 0pt;line-height: 10pt;text-align: right;">
                    Name:</p>
            </td>
            <td style="width:146pt">
                <p class="s107"
                    style="padding-top: 4pt;padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
            <td style="width:59pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 10pt;text-align: right;">
                    Breed:</p>
            </td>
            <td style="width:103pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s108"
                    style="padding-top: 4pt;padding-left: 6pt;text-indent: 0pt;line-height: 10pt;text-align: left;">N/A
                </p>
            </td>
        </tr>
        <tr style="height:17pt">
            <td style="width:53pt">
                <p class="s105" style="padding-left: 1pt;padding-right: 1pt;text-indent: 0pt;text-align: center;">
                    Weight/Size:</p>
            </td>
            <td style="width:135pt">
                <p class="s107" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
            <td style="width:57pt">
                <p class="s105" style="padding-right: 2pt;text-indent: 0pt;text-align: right;">Age:</p>
            </td>
            <td style="width:146pt">
                <p class="s107" style="padding-left: 2pt;text-indent: 0pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
            <td style="width:59pt">
                <p class="s105" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Other:</p>
            </td>
            <td style="width:103pt;border-top-style:solid;border-top-width:1pt">
                <p class="s107" style="text-indent: 0pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td style="width:53pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-left: 5pt;padding-right: 1pt;text-indent: 0pt;line-height: 10pt;text-align: center;">
                    Type of Pet:</p>
            </td>
            <td style="width:135pt">
                <p class="s106"
                    style="padding-top: 4pt;padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N/A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
            </td>
            <td style="width:57pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-right: 2pt;text-indent: 0pt;line-height: 10pt;text-align: right;">
                    Name:</p>
            </td>
            <td style="width:146pt">
                <p class="s107"
                    style="padding-top: 4pt;padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;</p>
            </td>
            <td style="width:59pt">
                <p class="s105"
                    style="padding-top: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 10pt;text-align: right;">
                    Breed:</p>
            </td>
            <td style="width:103pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s108"
                    style="padding-top: 4pt;padding-left: 6pt;text-indent: 0pt;line-height: 10pt;text-align: left;">N/A
                </p>
            </td>
        </tr>
        <tr style="height:12pt">
            <td style="width:53pt">
                <p class="s105"
                    style="padding-left: 1pt;padding-right: 1pt;text-indent: 0pt;line-height: 10pt;text-align: center;">
                    Weight/Size:</p>
            </td>
            <td style="width:135pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:57pt">
                <p class="s105" style="padding-right: 2pt;text-indent: 0pt;line-height: 10pt;text-align: right;">Age:
                </p>
            </td>
            <td style="width:146pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p style="padding-left: 2pt;text-indent: 0pt;line-height: 1pt;text-align: left;"></p>
            </td>
            <td style="width:59pt">
                <p class="s105" style="padding-right: 4pt;text-indent: 0pt;line-height: 10pt;text-align: right;">Other:
                </p>
            </td>
            <td
                style="width:103pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
    </table>
    <p style="padding-left: 92pt;text-indent: 0pt;line-height: 1pt;text-align: left"></p>
    <p class="s96" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">All dogs and cats
        must wear vaccination tags attached to a collar that is worn at all times. The Tenant will maintain a valid
        rabies vaccination certificate issued by a licensed veterinarian. It must include the animal&#39;s name,
        description, age, date, and type of vaccination. The Tenant must renew all pet registrations annually and
        provide a copy of the registration to the Landlord.</p>
    <p class="s96" style="padding-top: 6pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">Landlord requires
        the animal to be housebroken. Any reptile, fish, or pet that is considered a poisonous species is prohibited.
        The Tenant cannot maintain exotic animals or livestock in the rental home, grounds, or community property. The
        breeding of privately-owned animals is prohibited.</p>
    <p class="s96" style="padding-top: 6pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">Any damage to the
        leased premises caused by a pet or an aquarium leak must be immediately repaired, cleaned, and/or replaced at
        the Tenant&#39;s expense (including but not limited to stained carpets, broken window shades or blinds, and
        scratched and chewed cabinetry). The Tenant must protect all carpeting from odor, infestation, and stain by
        cleaning it annually. The Landlord reserves the right to inspect the Leased Premises (while providing proper
        notice) periodically in order to assess any possible damages.</p>
    <p class="s96" style="padding-top: 6pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">Continual reports of
        excessive animal noise (such as a barking dog or loud bird) will be grounds for the Landlord&#39;s withdrawal of
        permission, after which the Tenant will have to remove the pet(s) from the premises immediately. Pet owners must
        ensure the proper disposal of a deceased animal according to State and Local regulations. Burial of the deceased
        pet on the property grounds is strictly prohibited. When outdoors, all pets must be on a leash and under the
        control of a mature and responsible individual. Pets may not be tethered or left unattended outside at any time.
        Pets are barred from any community area such as playgrounds, pools, and game courts.</p>
    <p class="s96" style="padding-top: 6pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">The Tenant agrees to
        clean and properly dispose of all pet waste, both inside and outside the rental property, on a daily basis. No
        excrement is to remain on the grounds. Security and/or pet deposits are only refunded after the property has
        been vacated and examined by the management.</p>
    <p class="s96" style="padding-top: 6pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">Service Animals are
        not pets but provide assistance to disabled residents. By law, the Landlord must allow service animals for
        Tenants who have an apparent or verified need that they require them in order to afford a disabled Tenant fair
        use and enjoyment of the facilities. Additional deposits and or pet rent are not required for service animals,
        but Tenant(s) are responsible for cleaning up after the animal. Tenant(s) are also responsible for any damage
        done to the unit, building or grounds, beyond reasonable wear and tear. Service animals must meet local and
        state laws for vaccinations.</p>
    <p class="s96" style="padding-top: 6pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">Stray pets shall not
        be kept or fed in or about the Premises, they can be dangerous. Tenant must notify local animal control and/or
        local authorities.</p>
    <p class="s96" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">Landlord is not
        responsible/liable for any of the Tenant&#39;s pet(s) action. If the Tenant violates any part of this Addendum, the
        Tenant is then in default of the Lease. In the event of a default, the Landlord may initiate legal proceedings
        in accordance with State and Local regulations to evict or have the Tenant removed from the Leased Premises as
        well as seek a judgment against the Tenant for any monies owed to the Landlord as a result of the Tenants
        default.</p>
            <p class="s58" style="padding-left: 23pt;text-indent: 0pt;line-height: 13pt;text-align: left;width:580pt">
            <table>
                <tr>
                    <td style="width:535pt;padding-left:5pt">
                        <img src="images/star.png" alt="star">
                        <img src="images/star.png" alt="star">
                        <img src="images/star.png" alt="star">
                    </td>
                    <td>
                        <img src="images/star.png" alt="star">
                        <img src="images/star.png" alt="star">
                        <img src="images/star.png" alt="star">
                    </td>
                </tr>
            </table>
            <span class="s57 width:530pt;padding-left:10pt">All of the big
            and/or aggressive dog breeds or aggressive dogs must wear dog muzzle while walking outside. 
            </span>
        </p>
    <!-- <p class="s109" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;width:580pt">????????? ?????????</p>
    <p class="s110" style="padding-left: 5pt;text-indent: 0pt;line-height: 11pt;text-align: justify;">All of the big
        and/or aggressive dog breeds or aggressive dogs must wear dog muzzle while walking outside.</p> -->
    <p class="s110" style="padding-left: 5pt;text-indent: 0pt;line-height: 11pt;text-align: justify;width:580pt">Owner(s) and/or
        Owners&#39; Agent(s) are not responsible for Tenant&#39;s pet(s) actions, damages, and/or Injuries to humans or other
        animals.</p>
    <p class="s81" style="padding-top: 8pt;padding-left: 28pt;text-indent: 0pt;line-height: 26pt;text-align: left;">
        Tenant&#39;s Signature: <u>&nbsp;</u> Date: <u>&nbsp;</u> Tenant&#39;s Signature: <u>&nbsp;</u> Date:
        <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s81" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Landlord&#39;s Signature:</p>
    <p class="s83" style="padding-top: 4pt;padding-left: 11pt;text-indent: 0pt;text-align: left;">Gary Segal ??? <span
            class="s84">On Behalf of Dan Housing, Inc.</span></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s81" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Date:</p>
    <p class="s17" style="padding-left: 121pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <h3 style="padding-top: 2pt;text-indent: 0pt;text-align: right;"> GS <span class="s34"> </span>&nbsp;&nbsp; </h3>
    <p class="s35" style="padding-left: 11pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
    <p style="padding-left: 11pt;text-indent: 0pt;text-align: left;">Tenant Initials Landlord Initials</p>
    <h2 style="padding-top: 2pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">Swimming Pool/Hot Spa and
        Waterfront Addendum (If Applicable)</h2>
    <p class="s4" style="padding-top: 5pt;padding-left: 82pt;text-indent: 0pt;text-align: left;">Landlord: <span
            style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
    <p class="s4" style="padding-top: 2pt;padding-left: 79pt;text-indent: -31pt;line-height: 114%;text-align: left;">
        Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
        </span>Tenant(s): <span style=" color: #1F4E79;">Emily Magner and Family</span></p>
    <p class="s95" style="padding-top: 5pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">This ???Swimming
        Pool/Hot Spa and Waterfront Addendum??? is incorporated into and made part of the lease agreement, executed by the
        Landlord and the Tenant</p>
    <p class="s95" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">referring to and
        incorporating the Leased Premises.</p>
    <p class="s111" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">???<span
            class="s112"> </span><span class="s113">Community or Private Pool/Spa</span></p>
    <p class="s96" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;">
        The Tenant(s) will use the swimming pool and/or hot spa at the Tenant&#39;s own risk. The Landlord will not be
        responsible for any injuries sustained by the Tenant, and/or the Tenant&#39;s occupants or guests when using the
        swimming pool and/or hot spa. Children under the minimum age (posted at the pool) must be accompanied at all
        times, by a parent or legal guardian. Tenant must follow all Community and/or Owner rules and regulations.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s35" style="padding-left: 11pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
    <p class="s96" style="padding-left: 11pt;text-indent: 0pt;text-align: justify;">Tenant(s) Initials</p>
    <ul id="l49">
        <li data-list-text="???">
            <p class="s113" style="padding-top: 4pt;padding-left: 17pt;text-indent: -11pt;text-align: justify;">Private
                Pool/Spa</p>
            <p class="s95" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Pool/Spa Maintenance
                responsibility by Landlord <span class="s112">
                </span></p>
            <p class="s96" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Tenant shall keep the pool
                and spa neat and tidy. Tenant shall promptly notify Landlord of any hazardous conditions that arise in
                connection with the pool or spa. Tenant Might need to add water to the Pool/Spa if needed.</p>
            <p class="s95" style="padding-left: 5pt;text-indent: 0pt;line-height: 11pt;text-align: justify;">Pool/Spa
                Maintenance responsibility by Tenant <span class="s112">???</span></p>
            <p class="s96" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Tenant(s) is responsible for
                the general maintenance of the swimming pool and/or hot tub. This includes (but is not limited to)
                keeping the swimming pool/hot tub clean of debris, properly adding water and or maintaining chemicals,
                and keeping the pool/hot tub areas clean, neat, and organized. The Tenant must immediately notify the
                Landlord of any repair that the pool and/or hot tub may require. The Tenant is responsible for a full
                cost that may be due for repair and/or replacement of the swimming pool and/or hot tub that is required
                as a result of negligence by the Tenant(s), or Tenant&#39;s guests. The Tenant must operate the swimming
                pool and/or hot tub according to the manufacturer&#39;s instructions. The Tenant is responsible for using
                chemicals in accordance with the manufacturer&#39;s instructions (unless stated otherwise). The Tenant must
                store all chemicals in a safe manner. No pets of any kind are permitted in the swimming pool and/or hot
                tub at any time. The Tenant understands that the swimming pool and/or hot tub are strictly an amenity
                and that the use of this amenity is not guaranteed under the terms of the Lease. Any interruption or
                non-availability of the use of the swimming pool and/or hot tub will not violate any terms of the Lease.
                Tenant(s) must notify the Owner/Agent any time there is a problem or safety hazard at the pool.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s35" style="padding-left: 11pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
            <p class="s96" style="padding-left: 11pt;text-indent: 0pt;text-align: justify;">Tenant(s) Initials</p>
        </li>
        <li data-list-text="???">
            <p class="s113" style="padding-top: 4pt;padding-left: 17pt;text-indent: -11pt;text-align: justify;">
                Waterfront</p>
            <p class="s96" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Tenant(s) agrees that the
                Property is a waterfront property, which creates a risk of personal injury or property damage
                acknowledge and agrees that the use of the waterfront features are at the Landlord&#39;s sole discretion and
                that Landlord may withdraw consent to use all waterfront features at any time. Tenant(s) agree to remove
                any boat, personal watercraft, or any other vehicle from the Property immediately upon the request of
                the Landlord, at Tenant&#39;s sole expense. Tenant(s) shall not sublet, assign or otherwise allow the use by
                any third party any portion of any waterfront features.</p>
            <p class="s96" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">Tenant(s)
                acknowledges and agrees that Landlord, the property owner, and its agents shall not be liable for any
                personal injury to Tenant(s) or damage to Tenant&#39;s property arising out of the existence of the
                waterfront features on the Property and their use. Landlord, the property owner, and its agents&#39;
                insurance policy(s) do not cover any loss suffered by the Tenant(s). Tenants(s) are strongly advised to
                purchase insurance coverage on their personal belongings and liability coverage. Tenant(s) hereby
                acknowledge and agree to indemnify Landlord, the property owner, and their agents for any injuries or
                damages suffered Tenants(s), their invitees, guests, agents, or licensees arising out of the existence
                of the waterfront features on the Property and their use. Tenant(s) agrees to promptly notify Landlord
                in writing of any damage or defects to any of the waterfront features. Tenant(s) further acknowledges
                and agrees that it shall be liable for all damage to any waterfront feature due to the intentional or
                negligent acts by the Tenant(s), its invitees, guests, agents, or licensees.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s35" style="padding-left: 11pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
            <p class="s96" style="padding-left: 11pt;text-indent: 0pt;text-align: justify;">Tenant(s) Initials</p>
            <p class="s96" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">If the
                Tenant violates any part of this Addendum, the Tenant will then be in default of the Lease. In the event
                of a default, the Landlord may initiate legal proceedings in accordance with local and state regulations
                to evict or have the Tenant removed from the Leased Premises; as well as seek a judgment against the
                Tenant for any monies owed to the Landlord as a result of the Tenant&#39;s default.</p>
            <p class="s81"
                style="padding-top: 2pt;padding-left: 28pt;text-indent: 0pt;line-height: 26pt;text-align: left;">
                Tenant&#39;s Signature: <u>&nbsp;</u> Date: <u>&nbsp;</u> Tenant&#39;s Signature: <u>&nbsp;</u> Date:
                <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s81" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Landlord&#39;s Signature:</p>
            <p class="s83" style="padding-top: 4pt;padding-left: 11pt;text-indent: 0pt;text-align: left;">Gary Segal ???
                <span class="s84">On Behalf of Dan Housing, Inc.</span></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s81" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Date:</p>
            <p class="s17" style="padding-left: 121pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <h3 style="padding-top: 2pt;text-indent: 0pt;text-align: right;"> GS <span class="s34"> </span>&nbsp;&nbsp;
            </h3>
            <p class="s35" style="padding-left: 11pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
            <p style="padding-left: 11pt;text-indent: 0pt;text-align: left;">Tenant Initials Landlord Initials</p>
            <h2 style="padding-top: 2pt;padding-left: 105pt;text-indent: 0pt;text-align: center;">Fireplace/Wood Stove
                Addendum (If Applicable)</h2>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s114" style="padding-top: 12pt;padding-left: 78pt;text-indent: 0pt;text-align: left;">Landlord:
                <span style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
            <p class="s114"
                style="padding-top: 2pt;padding-left: 75pt;text-indent: -34pt;line-height: 114%;text-align: left;">
                Leased Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247
                </span>Tenant(s): <span style=" color: #1F4E79;">Emily Magner and Family</span></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s1" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">This ???Fireplace/Wood Stove
                Agreement??? is incorporated into and made part of the lease agreement, executed by the Landlord and</p>
            <p class="s1" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">the Tenant
                referring to and incorporating the Leased Premises.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p class="s115" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Tenant(s) understands that
                the use of the fireplace/wood stove is at the Resident&#39;s(s&#39;) own risk. If the unit has a
                fireplace or<span class="s116"> </span>woodstove approved for use, please use the utmost precaution when
                in operation. Resident(s) must agree to adhere to the<span class="s116"> </span>following practices:</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <ul id="l50">
                <li data-list-text="???">
                    <p class="s117" style="padding-top: 4pt;padding-left: 35pt;text-indent: -18pt;text-align: left;">
                        Fireplace/wood stove must be clear of ashes (except a small amount to create an ash bed) before
                        a new fire is built. Too many accumulated ashes can create a fire hazard.</p>
                </li>
                <li data-list-text="???">
                    <p class="s117" style="padding-left: 35pt;text-indent: -18pt;text-align: left;">Use only aged
                        hardwood for burning except for dry softwood kindling.</p>
                </li>
                <li data-list-text="???">
                    <p class="s116" style="padding-left: 35pt;text-indent: -18pt;text-align: left;">Never use gasoline,
                        kerosene, propane, or other types of fuel to start a fire. <span class="s117">You may use small
                            individual fire-starters that are lighted and placed fully inside the fireplace/wood
                            stove.</span></p>
                </li>
                <li data-list-text="???">
                    <p class="s117" style="padding-left: 35pt;text-indent: -18pt;text-align: left;">Close fireplace
                        screens or glass doors to prevent embers from igniting nearby combustible materials. Damage due
                        to flying embers is the responsibility of the Resident(s) and may require additional money for
                        repair beyond the security deposit.</p>
                </li>
                <li data-list-text="???">
                    <p class="s117" style="padding-left: 35pt;text-indent: -18pt;line-height: 13pt;text-align: left;">
                        Stack logs carefully to prevent them from rolling out of the fireplace.</p>
                </li>
                <li data-list-text="???">
                    <p class="s117" style="padding-left: 35pt;text-indent: -18pt;text-align: justify;">Do not go to bed
                        or leave the premises with a fire burning in the fireplace. Separate any burning material and
                        spread it out to cool if needed. Resident(s) is/are fully responsible for any loss, damage, or
                        casualty that arises from negligence/misuse of the fireplace/wood stove by Resident(s).</p>
                </li>
                <li data-list-text="???">
                    <p class="s117" style="padding-left: 35pt;text-indent: -18pt;text-align: justify;">Allow ashes and
                        embers to cool FULLY before cleaning. Then remove carefully using a metal dustpan or fireplace
                        tool to scoop ashes into a non-flammable container. Cover the container when transporting to
                        outside garbage.</p>
                </li>
            </ul>
        </li>
    </ul>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><a
            href="https://www.epa.gov/burnwise/types-wood-burning-appliances"
            style=" color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt;"
            target="_blank">For more information on Wood Stoves / Woodburning Fireplaces: </a><a
            href="https://www.epa.gov/burnwise/types-wood-burning-appliances" class="s118"
            target="_blank">https://www.epa.gov/burnwise/types-wood-burning-appliances</a></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s117" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">Tenants agree to
        follow the afore-mentioned safety practices while operating the fireplace or woodstove located in the
        abovementioned unit.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">If the Tenant violates any part of this Addendum,
        the Tenant will then be in default of the Lease. In the event of a default, the Landlord may initiate legal
        proceedings in accordance with local and state regulations to evict or have the Tenant removed from the Leased
        Premises; as well as seek a judgment against the Tenant for any monies owed to the Landlord as a result of the
        Tenant&#39;s default.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s81" style="padding-left: 28pt;text-indent: 0pt;line-height: 26pt;text-align: justify;">Tenant&#39;s
        Signature: <u>&nbsp;</u> Date: <u>&nbsp;</u> Tenant&#39;s Signature: <u>&nbsp;</u> Date:
        <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s81" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Landlord&#39;s Signature:</p>
    <p class="s83" style="padding-top: 4pt;padding-left: 11pt;text-indent: 0pt;text-align: left;">Gary Segal ??? <span
            class="s84">On Behalf of Dan Housing, Inc.</span></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s81" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Date:</p>
    <p class="s17" style="padding-left: 121pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <h3 style="padding-top: 2pt;text-indent: 0pt;text-align: right;"> GS <span class="s34"> </span>&nbsp;&nbsp; </h3>
    <p class="s35" style="padding-left: 11pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
    <p style="padding-left: 11pt;text-indent: 0pt;text-align: left;">Tenant Initials Landlord Initials</p>
    <h2 style="padding-top: 2pt;padding-left: 105pt;text-indent: 0pt;text-align: center;">Condition/Move-in Report</h2>
    <p class="s102" style="padding-top: 7pt;padding-left: 92pt;text-indent: 0pt;text-align: justify;">Landlord: <span
            style=" color: #1F4E79;">Dan Housing, Inc.</span></p>
    <p class="s102"
        style="padding-top: 6pt;padding-left: 101pt;text-indent: -43pt;line-height: 150%;text-align: justify;">Leased
        Premises: <span style=" color: #1F4E79;">9099 East Mississippi Ave, Unit K103, Denver, CO 80247 </span>Tenant:
        <span style=" color: #1F4E79;">Emily Magner and Family</span></p>
    <p class="s119" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">We require a
        Move-In Condition Report to be completed upon acceptance of the unit and returned to us at the <b>move-in
            date</b>. This report is for what you want to <i><b>NOTE </b></i>during your move-in. It will protect you
        and it will help <b>Dan Housing, Inc.</b>, to keep an accurate record, so you will not be mistakenly charged for
        previous damage(s). The Move-in report must be signed by the ???<b>Tenant</b>??? and representative of <b>Dan
            Housing, Inc. </b>to be considered valid. Failure to return this Condition Report to <b>Dan Housing, Inc.
        </b>will result in our determination that your rental property was found to be in perfect condition upon your
        move-in.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="border-collapse:collapse;margin-left:10.52pt" cellspacing="0">
        <tr style="height:32pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                    Exterior:</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:29pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                    Kitchen:</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:32pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Dining
                    Room:</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:35pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Family
                    Room:</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:35pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Laundry
                    Room:</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:34pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;text-align: right;">Bedroom(s):</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:35pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                    Bathroom(s):</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:35pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 4pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                    Basement:</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:35pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;text-align: right;">Garage(s):</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:35pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Other:
                </p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:72pt">
            <td
                style="width:109pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s121" style="padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: right;">General
                    Comments:</p>
            </td>
            <td
                style="width:466pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
    </table>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s81" style="padding-left: 28pt;text-indent: 0pt;line-height: 26pt;text-align: left;">Tenant&#39;s
        Signature: <u>&nbsp;</u> Date: <u>&nbsp;</u> Tenant&#39;s Signature: <u>&nbsp;</u> Date:
        <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s81" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Landlord&#39;s Signature:</p>
    <p class="s83" style="padding-top: 4pt;padding-left: 11pt;text-indent: 0pt;text-align: left;">Gary Segal ??? <span
            class="s84">On Behalf of Dan Housing, Inc.</span></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s81" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Date:</p>
    <p class="s17" style="padding-left: 121pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <h3 style="padding-top: 2pt;text-indent: 0pt;text-align: right;"> GS <span class="s34"> </span>&nbsp;&nbsp; </h3>
    <p class="s35" style="padding-left: 11pt;text-indent: 0pt;line-height: 1pt;text-align: left;"> </p>
    <p style="padding-left: 11pt;text-indent: 0pt;text-align: left;">Tenant Initials Landlord Initials</p>
</body>

</head>



</html>