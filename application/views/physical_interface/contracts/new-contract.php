<p class="center title">
    <strong>Договор № <?=number_order($order['number'],$order['year']);?></strong>
</p>
<p class="center">
    об оказании образовательных услуг
    с применением дистанционных технологий на Образовательном портале<br>
    Автономной некоммерческой организации дополнительного профессионального
    образования «Южно-окружного центра повышения квалификации
    и переподготовки кадров для строительного и жилищно-коммунального комплекса»
    (<a href="http://roscentrdpo.ru/">http://roscentrdpo.ru/</a>)
</p>
<div class="clearfix">
    <p class="pull-left">
        г. Ростов-на-Дону
    </p>
    <p class="pull-right">
        <u><?=$order['orderdate'];?></u>
    </p>
</div>
<p class="intend">
    Автономная некоммерческая организация дополнительного профессионального
    образования <nobr>«Южно-окружной</nobr> центр повышения квалификации и переподготовки кадров
    для строительного и <nobr>жилищно-коммунального</nobr> комплекса» (лицензия Региональной службы
    по надзору и контролю в сфере образования Ростовской области №2248 от 2 апреля 2012 года)
    именуемая в дальнейшем «Исполнитель» <nobr>в лице заместителя директора</nobr> Климовой Ольги
    Владимировны, действующей на основании доверенности <?=documentLicenseDate($order['date']);?>, с одной стороны,
    и гражданин РФ <?=$customer['fio'];?><?=$passport_data;?>, именуемый  в дальнейшем «Заказчик»,
    с другой стороны, в дальнейшем при совместном упоминании именуемые Стороны,
    составили настоящее Приложение к договору №<?=number_order($order['number'],$order['year']);?> о нижеследующем:
</p>
<p>
    <strong>1. Предмет договора</strong>
</p>
<p>
    1.1. Исполнитель осуществляет, а Заказчик получает обучение по программам повышения квалификации.
    1.2. Наименования программ повышения квалификации, количество часов, сроки обучения,
    перечень Слушателей указываются Заказчиком в электронной заявке (далее – Заявка),
    оформляемой Заказчиком на Образовательном портале АНО ДПО «Южно-окружной центр
    повышения квалификации» по адресу <a href="http://roscentrdpo.ru/">http://roscentrdpo.ru/</a> (далее - Портал), на основании которой
    Заказчику выставляются Договор и Счёт.
</p>
<p>
    <strong>2. Стоимость услуг и порядок расчетов</strong>
</p>
<?php $summ = 0;?>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>№</th>
        <th>Товары (работы, услуги)</th>
        <th>Количество</th>
        <th>Ед.</th>
        <th>Цена</th>
        <th>Сумма</th>
    </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<count($course);$i++):?>
        <tr>
            <td><?=$i+1;?></td>
            <td>Обучение по курсу <?=$course[$i]['code'];?>. <?=$course[$i]['title'];?></td>
            <td><?=$course[$i]['cnt'];?></td>
            <td>чел.</td>
            <td><?=$course[$i]['price']-$course[$i]['discount'];?></td>
            <td><?=($course[$i]['cnt']*($course[$i]['price']-$course[$i]['discount']));?></td>
            <?php $summ+=($course[$i]['cnt']*($course[$i]['price']-$course[$i]['discount']))?>
        </tr>
    <?php endfor;?>
    </tbody>
</table>
<p class="align-right">
    <strong>
        Итого: <u> <?=$summ;?> руб.</u> <br />
        НДС: не облагается (ст. 149 п.2 пп14 НК РФ) <br />
        Всего к оплате:     <u> <?=$summ;?> руб. </u>
    </strong>
</p>
<p>
    2.1.Сведения о слушателях и объеме выполняемых работ указываются в приложении №1 к настоящему договору.<br>
    2.2. Предоставляемые Исполнителем услуги не облагаются НДС согласно статьи 149 п. 2 главы 21 Налогового кодекса Российской Федерации.<br>
    2.3. Все услуги оплачиваются в рублях РФ.<br>
    2.4. Исполнитель вправе в одностороннем порядке пересматривать цены на Услуги и вводить новые тарифы. Информацию о введении новых тарифов и цен. Исполнитель публикует на Портале.<br>
    2.5. Датой вступления в силу новых тарифов является дата их объявления на Портале, утвержденная приказом директора.<br>
    2.6. В случае изменения тарифов (цен) Заказчику, ранее внесшему плату в соответствии с прежними тарифами (ценами) услуги оказываются по прежним тарифам.<br>
    2.7. Услуги предоставляются Заказчику на условиях предоплаты суммы, не меньшей, чем 100% стоимости выбранной Услуги.<br>
    2.8. Оплата Услуг Заказчиком производиться по безналичному расчету.<br>
    2.9. После регистрации Заказчиком на Портале и выбора Заказчиком Услуг, Заказчик получает счет для оплаты выбранных Услуг. (Счет на оплату генерируются системой автоматически).<br>
    2.10. Факт оплаты Услуги считается подтвержденным после поступления сведений из банка Исполнителя о зачислении денежных средств на расчетный счет Исполнителя.
</p>
<p>
    <strong>3. Права и обязанности Сторон</strong>
</p>
<p>
    <strong>3.1. Исполнитель обязуется:</strong>
</p>
<p>
    3.1.1. Принять Заявку Заказчика на Услугу при получении от него регистрационных данных
    согласно формам и правилам, устанавливаемым Исполнителем.<br>
    3.1.2. Предоставить Заказчику возможность обучения по выбранной Программе,
    в соответствии с утвержденным учебным планом и графиком учебного процесса. (Обеспечение
    Заказчика доступом к сети Интернет и оплата телекоммуникационных услуг производится
    Заказчиком самостоятельно).<br>
    3.1.3. Обеспечить проведение учебных мероприятий, предусмотренных учебным планом
    с использованием дистанционных образовательных технологий в течение срока проведения
    Программы при помощи программных средств дистанционного учебно-методического комплекса.<br>
    3.1.4. Публиковать на Портале информацию об изменении тарифов на оплату, перечня
    и объемов предоставления услуг, а также информацию, связанную с условиями предоставления
    услуг.<br>
    3.1.5. Выдать Заказчику при положительном результате итогового экзамена документ
    об успешном прохождении повышения квалификации. (Форма документа устанавливается
    Исполнителем).<br>
    3.1.6. Предоставить Заказчику акт об оказании услуг и счет-фактуру на дату оказания услуг.<br>
    3.1.7. Отвечать на запросы от заинтересованных лиц.
</p>
<p>
    <strong>3.2. Исполнитель  вправе: </strong>
</p>
<p>
    3.2.1. Отказать в предоставлении Услуги Заказчику в случае не поступления оплаты
    за Услуги в установленные Исполнителем сроки или других действий Заказчика, необходимых
    для предоставления Услуг.<br>
    3.2.2. Прекратить отношения с Заказчиком по настоящему Договору в одностороннем
    порядке при нарушении Заказчиком условий настоящего Договора. Моментом расторжения
    договора считается дата направления соответствующего сообщения Заказчику по электронной
    почте.<br>
    3.2.3. Исполнитель оставляет за собой право отклонить Заявку Заказчика
    с мотивированным уведомлением его по электронной почте.<br>
    3.2.4. Самостоятельно выбирать систему оценок, формы, порядок и периодичность
    контроля знаний.
</p>
<p>
    <strong>3.3. Заказчик обязуется: </strong>
</p>
<p>
    3.3.1. Самостоятельно знакомиться на Портале с информацией о видах Услуг, тарифах
    на них, параметрах и условиях их предоставления.<br>
    3.3.2. Оплачивать выбранные Услугу в соответствии с тарифами, а также осуществлять
    документооборот в сроки и на условиях, установленных Исполнителем.<br>
    3.3.3. Не передавать третьим лицам полномочий по доступу к учебно-методическому
    комплексу и учебному процессу Исполнителя.<br>
    3.3.4. Использовать учебные материалы, полученные от Исполнителя, только
    для индивидуального пользования или передавать их для пользования Слушателям.
    Не копировать, не тиражировать и не распространять учебные материалы любым способом
    на коммерческой или добровольной основе.
</p>
<p>
    <strong>3.4. Заказчик  вправе:</strong>
</p>
<p>
    3.4.1. Получать от Исполнителя Услуги в соответствии с условиями настоящего Договора.<br>
    3.4.2. Направлять Исполнителю претензии по получаемым Услугам в письменном виде
    по электронной почте e- mail: roscentrdpo@roscentrdpo.ru<br>
    3.4.3.При обнаружении недостатка  платных образовательных услуг, в том числе оказания их не в  полном объеме, предусмотренном образовательными программами (частью образовательной программы), заказчик вправе по своему выбору потребовать:<br>
    -безвозмездного оказания образовательных услуг;<br>
    -соразмерного уменьшения стоимости оказанных платных образовательных услуг;<br>
    -возмещения понесенных им расходов по устранению недостатков оказанных платных образовательных услуг своими силами или третьими лицами.<br>
    3.4.4.Отказаться от исполнения договора и потребовать полного возмещения убытков, если в установленный договором срок недостатки платных образовательных услуг не устранены Исполнителем. Заказчик также вправе отказаться от исполнения договора, если им обнаружен существенный недостаток оказанных платных образовательных услуг или иные существенные отступления от условий договора.
</p>
<p>
    <strong>4. Ответственность Сторон</strong>
</p>
<p>
    4.1. Заказчик несет ответственность за правильность и своевременность производимых
    им платежей, достоверность отправляемых Исполнителю регистрационных данных и Заявок
    на Услуги, выполнение инструкций, положений, требований, регламентирующих
    предоставляемые Услуги и высылаемых Исполнителем Заказчику по e-mail и/или публикуемых
    с помощью Портала.<br />
    4.2. Исполнитель несет ответственность за качество и своевременность предоставляемых
    Услуг при выполнении  Заказчиком установленных правил и требований.<br />
    4.3. Исполнитель не несет ответственности за непредставление Услуг при нарушении
    Заказчиком установленных Исполнителем правил платежей, достоверность отправляемых
    Исполнителю регистрационных данных, оформления и пересылки Заявок на Услугу, а также
    при наличии независящих от Исполнителя технических, организационных, почтовых, финансовых
    и иных причин, препятствующих оказанию Услуг. Произведенная в данных случаях оплата
    не возвращается и на другие Услуги не переносится.<br />
    4.4. Исполнитель не несет ответственности за неполучение Заказчиком Услуг в следующих
    случаях:<br />
    4.4.1. Указанный Заказчиком в заявке e-mail адрес содержит ошибки;<br />
    4.4.2. Представленные при регистрации Заказчиком сведения с ошибками в данных
    заполняемой формы;<br />
    4.4.3. Указанный Заказчиком в заявке e-mail адрес на момент рассылки недоступен.<br />
    4.5. В случае, если Заказчик не получил полностью или частично ожидаемые Услуги
    Исполнителя по причинам, изложенным в п.4.4, произведенная им оплата не возвращается
    и на другие Услуги не переносится. Со стороны Исполнителя Услуга считается оказанной,
    но со стороны Заказчика не принятой по его вине, либо по вине третьих лиц.<br />
    4.6. Исполнитель не несет ответственности за качество каналов связи общего пользования
    или служб, предоставляющих доступ Заказчика к его Услугам.
</p>
<p>
    <strong>5. Прочие условия договора</strong>
</p>
<p>
    5.1. Настоящий договор вступает в силу с момента подписания и действует до выполнения Сторонами своих обязательств.<br />
    5.2. Стороны принимают следующие условия процедуры образовательного процесса:<br />
    - началом обучения (повышения квалификации) считается дата поступления денежных средств перечисленных Заказчиком на счет Исполнителя, что подтверждается Исполнителем открытием Заказчику образовательного портала и изданием приказа о начале курса обучения (повышения квалификации) слушателей, заявленных Заказчиком.<br />
    - окончанием обучения (повышения квалификации), считается дата успешной сдачи итогового тестирования по образовательной программе последним слушателем, заявленным Заказчиком и служит основанием для издания приказа об окончании курса обучения (повышения квалификации) всех слушателей, заявленных Заказчиком и оформления квалификационных удостоверений всем слушателям, заявленным Заказчиком.
</p>
<p>
    <strong>6. Заключительные положения</strong>
</p>
<p>
    6.1. Настоящий Договор, может быть, расторгнут досрочно:<br />
    - по соглашению Сторон в любое время;<br />
    - по инициативе любой из Сторон с письменным уведомлением другой Стороны не менее
    чем за 10 (десять) дней до предполагаемой даты расторжения;<br />
    - по иным основаниям, предусмотренным настоящим Договором и/или действующим
    законодательством РФ;<br />
    - по инициативе любой из Сторон в случае нарушения другой Стороной своих обязательств
    по настоящему Договору с уведомлением о расторжении договора с момента получения
    другой Стороной такого уведомления.<br />
    6.2. Изменение условий Договора в отношении отдельного Заказчика оформляется в виде
    дополнительных соглашений к настоящему Договору.<br />
    6.3. Исполнитель оставляет за собой право изменять или дополнять любые из условий
    настоящего Договора в любое время. В случае, если изменения окажутся для Заказчика
    неприемлемыми, он должен в течение 14 дней с момента опубликования изменений уведомить
    Исполнителя об этом. Если уведомления не поступило, то считается, что Заказчик продолжает
    принимать участие в договорных отношениях.<br />
    6.4. Претензии Заказчика по предоставляемым Услугам принимаются Исполнителем
    к рассмотрению в письменном виде по электронной почте в срок не позднее 14-х календарных
    дней с даты возникновения спорной ситуации.<br />
    6.5. Рассмотрение претензий к Исполнителю, связанных с предоставлением Услуг,
    осуществляется только при предъявлении Заказчиком соответствующих финансовых
    документов, подтверждающих оплату Услуг, высланных заявок, предыдущей переписки и всей
    необходимой документации, в том числе и запрашиваемой у  Исполнителя.<br />
    6.6. По всем вопросам, не урегулированным настоящим Договором, стороны
    руководствуются действующим законодательством Российской Федерации.
</p>
<p>
    <strong>7. Реквизиты сторон</strong>
</p>
<table class="table">
    <thead>
    <tr>
        <th>Исполнитель:</th>
        <th>Заказчик:</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>АНО ДПО «Южно-окружной центр повышения квалификации»</td>
        <td><?=$customer['fio'];?></td>
    </tr>
<?php if(!empty($customer['passport_number'])):?>
    <tr>
        <td>&nbsp;</td>
        <td>
            паспорт серия <u><?=$customer['passport_seria'];?></u> и №<u><?=$customer['passport_number'];?></u>,
            выдан <u><?=$customer['passport_data'];?></u>
        </td>
    </tr>
<?php endif; ?>
    <tr>
        <td>ИНН: 6162990031</td>
        <td>ИНН: <?=$customer['inn'];?></td>
    </tr>
    <tr>
        <td>КПП: 616201001</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Юридический адрес:<br/>344001, г.Ростов-на-Дону, ул.Республиканская, 86</td>
        <td>Почтовый адрес:<br/><?=$customer['postaddress'];?></td>
    </tr>
    <tr>
        <td>e-mail: <?=mailto('roscentrdpo@roscentrdpo.ru');?></td>
        <td>e-mail: <?=mailto($customer['email']);?></td>
    </tr>
    <tr>
        <td>Банковские реквизиты:<br/>р/с 40703810600000001104, в банке ОАО КБ «Центр-Инвест» г.Ростов-на-Дону, БИК 046015762, к/с 30101810100000000762</td>
        <td>Банковские реквизиты:<br/>р/с <?=$customer['accountnumber'];?>, в банке <?=$customer['bank'];?>, БИК <?=$customer['bik'];?>, к/с <?=$customer['accountkornumber'];?></td>
    </tr>
    </tbody>
</table>
<p>
<table class="table no-border">
    <tbody>
    <tr>
        <td width="40%">Заместитель директора</td>
        <td width="25%">Климова О.В.</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    </tbody>
</table>
</p>