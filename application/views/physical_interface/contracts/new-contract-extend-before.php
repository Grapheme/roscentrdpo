<p class="page-break">&nbsp;</p>
<p class="center title">
    <strong>Приложение №1 к договору № <?=number_order($order['number'],$order['year']);?></strong>
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
<?php
$info = $this->fizunionmodel->read_fullinfo_physical($this->uri->segment(5));
$admin = new Admin_interface();
for($i=0;$i<count($info);$i++):
    if($info[$i]['status']):
        $info[$i]['dateover'] = $admin->operation_dot_date($info[$i]['dateover']);
    else:
        $info[$i]['dateover'] = '---';
    endif;
    $info[$i]['orderdate'] = $admin->operation_dot_date($info[$i]['orderdate']);
    if($info[$i]['paid']):
        $info[$i]['paiddate'] = $admin->operation_dot_date($info[$i]['paiddate']);
    else:
        $info[$i]['paiddate'] = '---';
    endif;
    $info[$i]['userpaiddate'] = $admin->operation_dot_date($info[$i]['userpaiddate']);
endfor;
?>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>№ п/п</th>
        <th>Фамилия, Имя, Отчество (при наличии) слушателя</th>
        <th>Должность</th>
        <th>№ телефона</th>
        <th>Место жительства слушателя</th>
        <th>Наименование оказанных услуг</th>
        <th>Объем учебного плана, час.</th>
        <th>Цена, руб.</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($info as $index => $record):?>
        <tr>
            <td><?=$index+1?></td>
            <td><?=$record['fio'];?></td>
            <td></td>
            <td><?=$record['phones'];?></td>
            <td><?=$record['postaddress'];?></td>
            <td><?=$record['ctitle'];?></td>
            <td><?=$record['chours'];?></td>
            <td><?=$record['сprice'];?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
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
        <td width="25%">Заместитель директора</td>
        <td width="25%">Климова О.В.</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    </tbody>
</table>
</p>