<html>
<meta http-equiv="Content-Type" Content="text/html"; charset="UTF-8">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/nowsvrk.css">
</head>



<body>

	<?php  
		include 'header.php';
	?>

	<div class="clr"></div>

	<div class="main">
		<?php include 'main_photo.php' ?>

	<div class="content">
				<h1>Современная СВРК</h1>
					<p>Рассмотрим современную СВРК-М на примере 4-го блока Калининской АЭС, сданного в эксплуатацию в сентябре 2012 г.</p>
			    <h3> 1. Назначение СВРК</h3>
				    <p>    
				     Система внутриреакторного контроля (СВРК) является одним из основных элементов, обеспечивающих контроль важнейших параметров, связанных с безопасностью эксплуатации реакторной установки. СВРК предназначена для обеспечения контроля активной зоны реактора на основе внутриреакторных измерений с целью безопасной и экономичной эксплуатации реакторной установки. В процессе эксплуатации энергоблока возникает необходимость в постоянном контроле полей энерговыделения и температур, основных технологических параметров при различных режимах работу РУ, в том числе и в случае отказа основного технологического оборудования и других нештатных ситуаций.
				    </p>
				    <p>
				    СВРК является комплексной автоматизированной системой, входящей в состав системы контроля, управления и диагностики (СКУД) РУ В-320 четвертого энергоблока Калининской АЭС. СВРК представляет собой автономную, функционально законченную систему, связанную информационными потоками с подсистемами СКУД и внешними системами энергоблока.
				    </p>
				<h3>2.  Задачи СВРК </h3>    
				    <p>
					СВРК предназначена для решения следующих основных задач:
				  	</p>
				   <ul>
				        <li>контроль нейтронно-физических и теплогидравлических параметров активной зоны реактора, параметров теплоносителя первого и второго контуров (в объеме задач решаемых СВРК), включая контроль за распределением энерговыделения в объеме активной зоны;</li>
				        <li>формирования и передачи в АЗ-ПЗ УСБИ сигналов защиты АЗ, ПЗ-1, ПЗ-2 по локальным параметрам активной зоны реактора (линейное энерговыделение в твэлах, запас до кризиса теплообмена) в диапазоне мощности реактора от 35 до 115 % от номинальной;</li>
				        <li>передача в СВБУ параметров, определяющих текущее состояние активной зоны реактора, сигнализация оперативному персоналу на БПУ об отклонении за допустимые пределы параметров, определяющих эксплуатационные пределы и пределы безопасной эксплуатации РУ и о неисправностях в ПТС;</li>          
						<li>внутриреакторной шумовой диагностики.</li>          
				    </ul>  
			<h3> 3. Функции СВРК</h3>    
			    <p>СВРК в соответствии с назначением и задачами обеспечивает выполнение управляющих, информационных и вспомогательных функций.</p>
			    <p>3.1	Управляющие функции СВРК включают:</p>
					<ul>
			          <li>сбор дискретных и аналоговых сигналов датчиков, входящих в состав СВРК, участвующих в расчете линейного энерговыделения твэлов по объему активной зоны и запаса до кризиса теплообмена;</li>
					  <li>предварительную обработку и проверку достоверности полученной информации (проверку границ и/или скорости изменения аналоговых сигналов);</li>
				      <li>расчет линейного энерговыделения и запаса до кризиса теплообмена;</li>
					 <li>формирование и выдачу в АЗ-ПЗ УСБИ сигналов защиты АЗ, ПЗ-1, ПЗ-2 при пре-вышении допустимых значений по линейному энерговыделению и запасу до кризиса теплообмена.</li>
			        </ul>      
			    <p>3.2	Информационные функции включают:</p>
			    <ul>
			        <li>сбор аналоговых и дискретных сигналов от датчиков, входящих в состав СВРК, и общеблочных датчиков, характеризующих состояние активной зоны реактора, первого и второго контуров (в объеме задач СВРК);</li>
					<li>предварительную обработку (преобразование в цифровой код, масштабирование, фильтрацию и линеаризацию) аналоговых сигналов;</li>
					<li>проверку достоверности полученной информации (проверку границ и/или скорости изменения аналоговых сигналов);</li>
					<li>расчет параметров и показателей, определяющих текущее состояние активной зоны реактора и контролируемого оборудования РУ;</li>
					<li>обнаружение, регистрацию и отображение на мониторах СВРК отклонений от за-данных пределов (уставок) параметров и показателей состояния активной зоны реактора и кон-тролируемого оборудования РУ, с выдачей обобщенной информации в СВБУ;</li>
					<li>подготовку и передачу данных в СВБУ энергоблока для информационной поддерж-ки оператора на БПУ;</li>
					<li>прием информации от СВБУ и систем АСУ ТП (через ВК СВРК), необходимой для функционирования СКУД;</li>
					<li>обмен информацией с подсистемами СКУД;</li>
					<li>информационную поддержку персонала в части управления распределением энерговыделения в активной зоне, мощностью, включая информацию о требуемом изменении концентрации борной кислоты;</li>
					<li>представление по запросу на экранах мониторов СВРК параметров и показателей, определяющих текущее состояние активной зоны реактора и контролируемого оборудова-ния РУ;</li>
					<li>накопление и долговременное хранение (архивизацию) значений контролируемых параметров с возможностью вывода накопленных данных по запросу оперативного персонала;</li>
					<li>контроль нейтронных шумов с целью обнаружения локального кипения теплоноси-теля в объеме активной зоны (внутриреакторная шумовая диагностика);</li>
					<li>документирование информации в виде протоколов текущих значений параметров и показателей состояния активной зоны реактора и РУ в целом с возможностью распечаток по запросу персонала.</li>
			    </ul>  
			     <p>3.3	Вспомогательные функции включают: </p>
			      <ul>
			        <li>диагностирование программно-технических средств СВРК, связей между ними и передачу в СВБУ обобщенных результатов диагностирования;</li>
					<li>выдачу сигнализации в УСБТ;</li>
					<li>ведение единого времени с СВБУ;</li>
					<li>организацию обмена информацией между ВК СВРК и системами АСУ ТП (через СВБУ) по стандартным интерфейсам, принятым в рамках СВБУ;</li>
					<li>архивация истории работы оборудования ПТК СВРК (отказы/восстановления, вме-шательство оперативного персонала) с последующим выводом информации по запросу персонала.</li>
			   </ul>  
			<h4> 4. Состав СВРК</h4>
			    <p>
			    Структура СВРК показана на рисунке 1.
			    </p>
			    <img src="img\svrk_now\structure_svrk.jpg" alt="Структура СВРК-М">
			    <p class="sign">
			    Рисунок 1. Структура СВРК-М на блоке №4 Калининской АЭС
			    </p>
			    <p>
			   В состав СВРК входят:
			    </p>    
				<ul>
					        <li>первичные преобразователи внутриреакторного контроля нейтронного потока в со-ставе СВРД на основе ДПЗ типа КНИ5Б (расположение КНИ в активной зоне приведено на рисунке 2);</li>
							<li>первичные преобразователи контроля температуры теплоносителя на выходе ТВС и под крышкой реактора на основе ТП типа «К» с ИСХ (расположение ТП в активной зоне приведено на рисунке 3);</li>
							<li>первичные преобразователи контроля температуры теплоносителя в ГЦТ на основе ТП типа «К» с ИСХ (расположение ТП в петлях ГЦТ приведено на рисунках 4а, 4б);</li>
							<li>линии связи и вспомогательные устройства</li>
							<li>программно-технические средства (ПТС) СВРК, включая: </li>
					  
					<p>1)	ПТК, выполняющий функции защиты активной зоны (ПТК-З), состоящий из шести информационно-измерительных устройств УИ-174Р07 (два комплекта по три УИ-174Р07) и предназначенный для приема и обработки сигналов датчиков, формирования сигналов защиты активной зоны по локальным параметрам (АЗ, ПЗ-1, ПЗ-2);    </p>
					<p>2)	ПТК, предназначенный для реализации информационно-управляющих функций (ПТК ИУ), состоящий из двух информационно-измерительных устройств УИ-174Р08;</p>
					<p>3)	станцию контроля нижнего уровня (СК-НУ), реализованную на базе станции контроля СК-08П-01, предназначенную для выполнения сервисных функций ПТК-З и ПТК-ИУ, архивирования измеренных значений входных сигналов, расчетных параметров и детальной диагностической информации, поступающей из ПТК-З и ПТК-ИУ; </p>
					<p>4)	дублированную локальную сеть нижнего уровня (ЛС НУ) типа «CAN», предназначенную для обмена информацией между информационно-измерительными устройствами ПТК-З и между информационно-измерительными устройствами ПТК-ИУ; </p>
					<p>5)	вычислительный комплекс СВРК (ВК СВРК), состоящий из двух ВК, с коммутаторами СВРК, предназначенный для восстановления поля энерговыделения, расчета основ-ных параметров РУ, контроля отклонения за допустимые пределы параметров, определяющих безопасность эксплуатации РУ, передачи информации в ССДИ, СВБУ, обмена информацией с подсистемами СКУД. ВК СВРК №1 и ВК СВРК №2 реализованы на базе серверного вычислительного устройства СВУ 08Р; </p>
					<p>6)	сервисную станцию дежурного инженера (ССДИ), реализованную на базе СК 08П, предназначенную для выполнения сервисных функций ВК СВРК, а также сервисного обслуживания СВРК;</p>
					<p>7)	два шлюза связи ШС-01Р-04 (канал «Ethernet») для связи ВК СВРК с СВБУ и смежными системами АСУ ТП (прием информации от АКНП и выдача информации в СЭК); </p>
					<p>8)	дублированную локальную сеть (ЛС) СВРК типа «Ethernet» с коммутаторами и сетевыми устройствами, которая обеспечивает информационную связь внутри ПТК СВРК, а также с подсистемами СКУД (ЛС СКУД);</p>
					<p>9)	ПТК внутриреакторной шумовой диагностики (ПТК-ВРШД) состоящий из двух информационно-измерительных устройств УИ 183Р02 и предназначенный для приема и предварительной обработки переменной (шумовой) составляющей сигналов ДПЗ, а также для передачи синхронизированных сигналов от ДПЗ (не менее, чем от двух СВРД) в систему контроля вибрации (СКВ);</p>
					<p>10)	вычислительный комплекс (ВК) ВРШД, предназначенный для дальнейшей об-работки переменной составляющей токов ДПЗ, для передачи в ПТК-ВРШД команд выбора двух любых СВРД, поступающих от СКВ, а также для передачи в ВК СВРК обобщенной информации об аномалиях в активной зоне. ВК ВРШД реализован на базе серверного вычислительного устройства СВУ 08Р 01; </p>
					<p>11)	пульт ВК ВРШД предназначенный для работы персонала, а также для анализа результатов расчета ВК ВРШД;</p>
					<p>12)	клеммный шкаф ШК-05Р, обеспечивающий ввод сигнальных кабелей от датчиков технологического контроля РУ, САКОР, сигналов от смежных систем; </p>
					<p>13)	кроссовые оптические шкафы ШКОН-СТ, обеспечивающие переход с магистрального оптоволоконного кабеля, прокладываемого между помещениями, на оптоволоконный кабель, прокладываемый внутри и в пределах одного помещения. </p>
				</ul> 
			<<img  src="img\svrk_now\KNI_N.jpg" alt="Расположение каналов нейтронных измерений (КНИ) в активной зоне на 4-м блоке Калининской АЭС">
			<p class="sign">
			    Рисунок 2. Расположение каналов нейтронных измерений (КНИ) в активной зоне на 4-м блоке Калининской АЭС
			</p>
			<img src="img\svrk_now\TP_N.jpg" alt="Расположение термопар на выходе из активной зоны на 4-м блоке Калининской АЭС">
			<p class="sign">
			    Рисунок 3. Расположение термопар на выходе из активной зоны на 4-м блоке Калининской АЭС
			</p>
			<img  src="img\svrk_now\TLoop_3a.jpg" alt="Расположение сечений холодных и горячих ниток ГЦТ с датчиками контроля температуры на 4-м блоке Калининской АЭС">
			<p class="sign">
			    Рисунок 4а. Расположение сечений холодных и горячих ниток ГЦТ с датчиками контроля температуры  на 4-м блоке Калининской АЭС
			</p>
			<img src="img\svrk_now\TLoop_3b.jpg" alt="Расположение датчиков температуры в сечениях ГЦТ на 4-м блоке Калининской АЭС">
			<p class="sign">
			    Рисунок 4б. Расположение датчиков температуры в сечениях ГЦТ на 4-м блоке Калининской АЭС
			</p>
			    
			<p>

	</div>

</div>
	<div class="clr"></div>

	<?php 
		include 'footer.php';
	?>

		<div class="clr"></div>
</body>

</html>