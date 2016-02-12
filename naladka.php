<html>
<meta http-equiv="Content-Type" Content="text/html"; charset="UTF-8">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>



<body>

	<?php  
		include 'header.php';
	?>

<div class="clr"></div>

	<div class="main">
		<?php include 'main_photo.php' ?>

			<div class="content">
				<h1>Наладка СВРК</h1>
    
			    <p>
			    СВРК является одной из основных подсистем в составе АСУ ТП энергоблока АЭС. При своем создании на стадии ввода в эксплуатацию СВРК проходит определенные этапы, которые регламентируются соответствующей нормативной документацией с учетом специфических особенностей данной системы и объекта, на котором она применяется. Основная особенность, это то, что система может быть полностью смонтирована, налажена и испытана в натурных условиях только на площадке АЭС. Таким образом, несмотря на то, что все составные части проходят сдаточные испытания на заводахизготовителях, монтаж конкретных первичных преобразователей, а также соединение структурных единиц системы на конкретном энергоблоке АЭС реальными линиями связи вносят в систему фактически новые элементы. Эти элементы, естественно, влияют на конечные реальные характеристики более чем 1000 измерительных каналов контроля СВРК. При этом, основные из которых (каналы контроля температура теплоносителя и энерговыделения в активной зоне) работают с сигналами низкого уровня (микроамперы и милливольты соответственно). В свою очередь, большинство измерительных каналов контроля, представляют информацию для последующего вычисления значений многочисленных расчетных параметров. Причем эти параметры являются, как правило, основными контролируемыми параметрами, определяющими эксплуатационные состояния и пределы безопасной эксплуатации энергоблока.    
			    </p>
			    <p>
					Кроме этого, важной особенностью является то, что функционирование СВРК осуществляется по сложным  вычислительным алгоритмам. Эти алгоритмы требуют ряда специальных проверок и испытаний в разных эксплуатационных состояниях для корректного функционирования системы и настройки ее базы данных. К тому же СВРК не является полностью автономной системой, а обладает многочисленными связями на физическом и программном уровне с другими подсистемами АСУ ТП энергоблока, что требует также соответствующих проверок.    
				</p>
			    <p>
					Как и для всех систем энергоблока, пусконаладочные работы (ПНР) на  СВРК во время ввода энергоблока  в эксплуатацию проходят в последовательности и сроки, определяемые графиками ПНР различных уровней. Однако, изза особенностей состава СВРК не все ее элементы могут быть собраны и, соответственно, проверены и испытаны в реальных условиях  одновременно и только на одном этапе ввода в эксплуатацию. Например, установка и монтаж каналов контроля энерговыделения может быть проведена только после загрузки штатной активной зоны, т.е. на этапе физического пуска. В то время как, монтаж и проверка большинства каналов контроля общетехнологических параметров и температурного контроля осуществляется на этапе предпусковых наладочных работ.
				</p>
    			<p>	
					Отмеченные особенности СВРК требуют качественного выполнения всех требуемых проверок и испытаний в полном объеме на каждом из этапов ввода в эксплуатацию подразделениями пусконаладочной организации (например, филиал "Нововоронежатомтехэнерго" ОАО "Атомтехэнерго"), специализирующихся именно на данном виде работ. Часть ПНР, связанных с наладкой и проверкой комплекса технических средств СВРК и линий связи выполняется  цехом тепловой автоматики и измерений (ЦТАИ). Комплексные проверки и испытания СВРК выполняются участком ВРК цеха физических и динамических испытаний (ЦФДИ). При этом, исходя из особенностей СВРК, под комплексными испытаниями СВРК подразумеваются комплексные проверки правильности функционирования системы в соответствии с проектной и нормативной документацией и определение достоверности выходной информации СВРК в реальных эксплуатационных состояниях на этапах ввода энергоблока в эксплуатацию. Кроме этого, к комплексным испытаниям СВРК относятся испытания, требующие создания специальных режимов, для экспериментального подтверждения правильности монтажа и определения некоторых констант, используемых в базе данных прикладного программного обеспечения СВРК.
  				</p>
   				<p>
					Поэтапное выполнение полного объема комплексных испытаний СВРК обеспечивает своевременное выявление и устранение монтажных ошибок и несоответствий в алгоритмах функционирования, приводящих к недостоверной выходной информации СВРК, которая играет важную роль для оперативного персонала по адекватной оценке состояния РУ и принятия оптимальных решений по управляющим воздействиям. 
   				</p>
				<p>
					Используемые в настоящее время при вводе в эксплуатацию состав и методики комплексных испытаний сложились на основе многолетнего опыта проведения ПНР СВРК разных модификаций и на энергоблоках с реакторами ВВЭР1000 и ВВЭР440 разных проектов. При проведении комплексных испытаний используются следующие основные методы проверки достоверности выходной информации СВРК:
					</p>
					<ul>
						<li>статистическая обработка и оценка величин флуктуаций проверяемых параметров;
						<li>сопоставление значений одних и тех же параметров, полученных в разных каналах контроля СВРК;
						<li>сопоставление значений одних и тех же параметров, полученных в СВРК со значениями из других подсистем АСУ ТП энергоблока;
						<li>оценка соответствия значений параметров эксплуатационным состояниям и режимным значениям;
						<li>анализ поведения параметров в нестационарных состояниях при проведении динамических испытаний энергоблока и при переходах между эксплуатационными состояниями;
						<li>использование свойств симметрии топливных загрузок;
						<li>сравнение с расчетными данными.
					</ul>
				  </p>    
				<p>
					В новых проектах энергоблоков с ВВЭР (АЭС-2006 и т.д.) значительно расширяются функциональные возможности СВРК вместе с повышением требований  к надежности ее функциони-рования. Естественно, что эти обстоятельства ещё больше увеличивают роль ПНР СВРК и требу-ют разработки новых или усовершенствованных методов и видов комплексных испытаний СВРК с применением современных информационных технологий.
			</div>

		</div>
	<div class="clr"></div>

	<?php 
		include 'footer.php';
	?>

		<div class="clr"></div>
</body>

</html>