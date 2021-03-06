<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'ДХЦП';
$L['bootproto_label'] = 'ИП додељивање';
$L['bootproto_none_label'] = 'Статична';
$L['blue_label'] = 'Гостињска (плава)';
$L['device_label'] = 'Уређај';
$L['gateway_label'] = 'Мрежни пролаз';
$L['green_label'] = 'ЛАН (зелена)';
$L['hwaddr_label'] = 'МАЦ адреса';
$L['ipaddr_label'] = 'ИП адреса';
$L['orange_label'] = 'ДМЗ (наранџаста)';
$L['Key_label'] = 'Уређај';
$L['netmask_label'] = 'Мрежна маска';
$L['NetworkAdapter_Description'] = 'Измени подешавања мреже';
$L['NetworkAdapter_Tags'] = 'мрежа адаптер етернет мреже';
$L['NetworkAdapter_Title'] = 'Мрежа';
$L['red_label'] = 'Интернет (црвена)';
$L['role_label'] = 'Улога';
$L['update_header_label'] = 'Ажурирај уређај';
$L['interface-config_label'] = 'Подешавање интерфејса';
$L['valid_platform,interface-config,interface-role,3'] = "ДХЦП може бити коришћен једино са црвеним и зеленим интерфејсима";
$L['valid_platform,interface-config,interface-role,4'] = "Не можете обрисати последњи зелени интерфејс";
$L['No'] = 'Не';
$L['Yes'] = 'Да';
$L['type_alias_label'] = 'Псеудоним';
$L['type_bridge_label'] = 'Мост';
$L['type_bond_label'] = 'Веза';
$L['type_vlan_label'] = 'ВЛАН';
$L['SetIpAddress_header'] = 'Подеси ИП додељивање - ${0}';
$L['CreateLogicalInterface_label'] = 'Нови логички интерфејс';
$L['CreateLogicalInterface_header'] = 'Нови логички интерфејс';
$L['vlanTag_label'] = 'Етикета';
$L['vlan_label'] = 'Интерфејс';
$L['InterfaceType_label'] = 'Тип';
$L['Next_label'] = 'Следеће';
$L['Back_label'] = 'Назад';
$L['Edit_label'] = 'Измени';
$L['Edit_header'] = 'Измени ${dev} - ${bus} ${model}';
$L['Edit_description'] = "Статус линка је \${link}\nБрзина \${speed} Мбит/с\nДрајвер \${driver}\nМАЦ адреса \${mac}";
$L['Link_status_up'] = 'Повезан';
$L['Link_status_down'] = 'Неповезан';
$L['Link_status_na'] = 'Н/Д';
$L['speed_label'] = 'Брзина ${0}';
$L['Confirm_header'] = 'Креирај ${role} интерфејс ${device}';
$L['Action_create_bridge'] = 'Креирај нови мост интерфејс ${device} са ${parts}';
$L['Action_create_bond'] = 'Креирај нови ${bondMode} интерфејс везе ${device} са ${parts}';
$L['Action_create_vlan'] = 'Креирај нови ВЛАН интерфејс ${device} на ${parts}';
$L['Action_create_role'] = 'Подеси улогу на "${role}"';
$L['Action_set_static_ip'] = 'Подеси статичку ИП ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Преузми конфигурацију ИП адресе од ДХЦП сервера';
$L['Action_use_gateway'] = 'Користи мрежни пролаз ${gateway}';
$L['Action_use_no_gateway'] = 'Немој подешавати мрежни пролаз';
$L['Create_label'] = 'Креирај интерфејс';
$L['bridged_label'] = 'Бриџован';
$L['slave_label'] = 'Подређен';
$L['CreateIpAlias_header'] = 'Креирај псеудоним ИП "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Ослободи ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Ослободи улогу ${role}  додељену физичкој адреси интерфејса ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Уклони ${device} из везе ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Уклони ${device} из моста ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Обриши';
$L['DeleteLogicalInterface_header'] = 'Потврди брисање ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Брисање везаног интерфејса \${device}.\nИзаберите наследника из његовог подређеног интерфејса да му доделите тренутну улогу и ИП подешавања.";
$L['DeleteLogicalInterface_bridge_message'] = "Брисање интерфејса моста \${device}.\nИзаберите наследника из бриџованих интерфејса да му доделите тренутну улогу и ИП подешавања.";
$L['DeleteLogicalInterface_vlan_message'] = "Потврди брисање ВЛАН \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Потврди брисање псеудонима \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Ослободи улогу';
$L['Release_label'] = 'Ослободи улогу';
$L['CleanPhysicalInterface_label'] = 'Обриши';
$L['CreateIpAlias_label'] = 'Креирај ИП псеудоним';
$L['successor_label'] = 'Наследник';
$L['NoSuccessor_label'] = 'Ни један';
$L['bond_label'] = 'Веза';
$L['bridge_label'] = 'Мост';
$L['alias_label'] = 'Псеудоним';
$L['hotspot_label'] = 'Приступна тачка';
$L['RenameInterface_header'] = 'Додели улоге физичким интерфејсима';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Физички интерфејси';
$L['CleanPhysicalInterface_header'] = 'Уклони ${0}';
$L['Confirm device ${0} removal'] = 'Уклони ${0} уређај из базе?';
$L['Clean_label'] = 'Уклони';
$L['Refresh_label'] = 'Освежи статус линка';
$L['roleis_label'] = 'улога';
$L['MAC: ${0}'] = 'МАЦ ${0}';
$L['Model: ${0}'] = 'Модел ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Све улоге су исправно додељене мрежним картицама.';
$L['type_xdsl_label'] = 'ПППоЕ на ппп0';
$L['xdsl_label'] = 'ПППоЕ';
$L['PppoeUser_label'] = 'Корисничко име';
$L['PppoePassword_label'] = 'Лозинка';
$L['PppoeInterface_label'] = 'Етернет интерфејс';
$L['PppoeProvider_label'] = 'Пружалац услуге';
$L['pppoe_label'] = 'ПППоЕ (црвено)';
$L['SetPppoeParameters_label'] = 'Подеси ПППоЕ';
$L['SetPppoeParameters_header'] = 'Подеси ПППоЕ уређај ппп0';
$L['ReleasePhysicalInterface_pppoe_message'] = "Ослободи ПППоЕ црвену улогу са \${device}?\nПовезани ппп0 уређај ће такође бити уклоњен.";
$L['DeleteLogicalInterface_xdsl_message'] = "Уклони логички ПППоЕ уређај ппп0?";
$L['valid_pppoe_already_configured'] = 'ПППоЕ уређај ппп0 је већ подешен';
$L['valid_pppoe_red_role_only'] = 'ПППоЕ уређај ппп0 мора бити додељен црвеној улози';
$L['PppoeAuthType_label'] = 'Тип аутентификације';
$L['AuthType_auto'] = 'Аутоматска';
$L['AuthType_pap'] = 'ПАП';
$L['AuthType_chap'] = 'ЦХАП';
$L['bondMode_label'] = 'Режим';
$L['BondMode_0_label'] = 'балансирање раунд робин';
$L['BondMode_1_label'] = 'активна резервна копија';
$L['BondMode_2_label'] = 'балансирани XOR';
$L['BondMode_3_label'] = 'емитовање';
$L['BondMode_4_label'] = '802.3ад';
$L['BondMode_5_label'] = 'балансирање ТЛБ';
$L['BondMode_6_label'] = 'балансирање АЛБ';
$L['red_label'] = 'Интернет (црвена)';
$L['multiwan_label'] = 'Мулти ВАН';
$L['Weight_label'] = 'Тежина линка';
$L['ProviderName_label'] = 'Име линка';
$L['UpstreamProxy_label'] = 'Прокси подешавања';
$L['DNS_label'] = 'ДНС сервери';
$L['trafficshaping_label'] = 'Обликовање саобраћаја';
$L['FwInBandwidth_label'] = 'Долазни проток (кбпс)';
$L['FwOutBandwidth_label'] = 'Одлазни проток (кбпс)';
