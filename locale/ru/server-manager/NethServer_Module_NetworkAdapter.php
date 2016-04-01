<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'Назначения IP';
$L['bootproto_none_label'] = 'Постояный';
$L['blue_label'] = 'Гости (синий)';
$L['device_label'] = 'Устройство';
$L['gateway_label'] = 'Шлюз';
$L['green_label'] = 'LAN (зеленый)';
$L['hwaddr_label'] = 'Адрес MAC';
$L['ipaddr_label'] = 'Адрес IP';
$L['orange_label'] = 'DMZ (оранжевый)';
$L['Key_label'] = 'Устройство';
$L['netmask_label'] = 'Сетевая маска';
$L['NetworkAdapter_Description'] = 'Изменить настройки сети';
$L['NetworkAdapter_Tags'] = 'сеть адаптер устройство сети ethernet';
$L['NetworkAdapter_Title'] = 'Сеть';
$L['red_label'] = 'Internet (Красный)';
$L['role_label'] = 'Роль';
$L['update_header_label'] = 'Обновить устройство';
$L['interface-config_label'] = 'Настройка интерфейса';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP может быть использован только на Красных интерфейсах";
$L['valid_platform,interface-config,interface-role,4'] = "Невозможно удалить последний Зеленый интерфейс";
$L['No'] = 'Нет';
$L['Yes'] = 'Да';
$L['type_alias_label'] = 'Псевдоним';
$L['type_bridge_label'] = 'Мост';
$L['type_bond_label'] = 'Объединение';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Настроить назначение IP - ${0}';
$L['CreateLogicalInterface_label'] = 'Новый интерфейс';
$L['CreateLogicalInterface_header'] = 'Новый логический интерфейс';
$L['vlanTag_label'] = 'Тэг';
$L['vlan_label'] = 'Интерфейс';
$L['InterfaceType_label'] = 'Тип';
$L['Next_label'] = 'Далее';
$L['Back_label'] = 'Назад';
$L['Edit_label'] = 'Изменить';
$L['Edit_header'] = 'Изменить ${dev} - ${bus} ${model}';
$L['Edit_description'] = "Состояние соединения \${link}\nСкорость \${speed} Mbit/s\nДрайвер \${driver}\nАдрес Mac \${mac}";
$L['Link_status_up'] = 'включить';
$L['Link_status_down'] = 'отключить';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Скорость ${0}';
$L['Confirm_header'] = 'Создать ${role} устройство ${device}';
$L['Action_create_bridge'] = 'Создать новый мост ${device} с ${parts}';
$L['Action_create_bond'] = 'Create a new ${bondMode} bond interface ${device} with ${parts}';
$L['Action_create_vlan'] = 'Создать новое устройство VLAN ${device} на ${parts}';
$L['Action_create_role'] = 'Установить роль "${role}"';
$L['Action_set_static_ip'] = 'Установить постоянный IP ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Получить настройку IP с сервера DHCP';
$L['Action_use_gateway'] = 'Использовать шлюз ${gateway}';
$L['Action_use_no_gateway'] = 'Не устанавливать шлюз';
$L['Create_label'] = 'Создать интерфейс';
$L['bridged_label'] = 'Режим моста';
$L['slave_label'] = 'Подчиненный';
$L['CreateIpAlias_header'] = 'Создать псевдоним "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Освободить ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Очистить роль ${role} назначенную физическому устройству ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Удалить ${device} из объединения ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Удалить ${device} из моста ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Удалить';
$L['DeleteLogicalInterface_header'] = 'Подтвердить удаление ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Удаление объединенного интерфейса \${device}.\nИспользовать освободившееся устройство для назначения текущих значений роли и IP.";
$L['DeleteLogicalInterface_bridge_message'] = "Удаление моста \${device}.\nИспользовать освободившееся устройство для назначения текущих значений роли и IP/";
$L['DeleteLogicalInterface_vlan_message'] = "Подтверждение удаления VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Подтверждение удаления псевдонима \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Освободить роль';
$L['Release_label'] = 'Освободить роль';
$L['CleanPhysicalInterface_label'] = 'Удалить';
$L['CreateIpAlias_label'] = 'Создать псевдоним IP';
$L['successor_label'] = 'Преемник';
$L['NoSuccessor_label'] = 'Ничего';
$L['bond_label'] = 'Объединение';
$L['bridge_label'] = 'Мост';
$L['alias_label'] = 'Псевдоним';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Назначить роль физическому устройству';
$L['[leave untouched]'] = 'Оставить нетронутым';
$L['cards_label'] = 'Физическое устройство';
$L['CleanPhysicalInterface_header'] = 'Удалить ${0}';
$L['Confirm device ${0} removal'] = 'Удалить устройство ${0} из базы данных?';
$L['Clean_label'] = 'Удалить';
$L['Refresh_label'] = 'Обновить состояние соединения';
$L['roleis_label'] = 'роль';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Модель ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Все роли назначены сетевым платам.';
$L['type_xdsl_label'] = 'PPPoE на ppp0';
$L['xdsl_label'] = 'PPPoE';
$L['PppoeUser_label'] = 'Имя пользователя';
$L['PppoePassword_label'] = 'Пароль';
$L['PppoeInterface_label'] = 'Ethernet интерфейс';
$L['PppoeProvider_label'] = 'Провайдер';
$L['pppoe_label'] = 'PPPoE (красный)';
$L['SetPppoeParameters_label'] = 'Настройка PPPoE';
$L['SetPppoeParameters_header'] = 'Настройка PPPoE устройства ppp0';
$L['ReleasePhysicalInterface_pppoe_message'] = "Освободить красную роль PPPoE от \${device}?\nСвязанное с этим ppp0 устройство будет удалено.";
$L['DeleteLogicalInterface_xdsl_message'] = "Удалить логическое PPPoE устройство ppp0?";
$L['valid_pppoe_already_configured'] = 'PPPoE устройство ppp0 уже настроено';
$L['valid_pppoe_red_role_only'] = 'PPPoE устройству ppp0 должна быть присвоена красная роль';
$L['PppoeAuthType_label'] = 'Тип аутентификации';
$L['AuthType_auto'] = 'Автоматика';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';
$L['bondMode_label'] = 'Mode';
$L['BondMode_0_label'] = 'balance round robin';
$L['BondMode_1_label'] = 'active backup';
$L['BondMode_2_label'] = 'balance XOR';
$L['BondMode_3_label'] = 'broadcast';
$L['BondMode_4_label'] = '802.3ad';
$L['BondMode_5_label'] = 'balance TLB';
$L['BondMode_6_label'] = 'balance ALB';