<?php

namespace Wuyu\World\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChineseRegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chinese_regions = [
            [
                'name' => '北京市',
                'code' => '110000',
                'phone_code' => '010',
                'children' => [
                    [
                        'name' => '北京城区',
                        'code' => '110100',
                        'phone_code' => '010',
                        'children' => [
                            ['name' => '东城区','code' => '110101','phone_code' => '010'],
                            ['name' => '西城区','code' => '110102','phone_code' => '010'],
                            ['name' => '朝阳区','code' => '110105','phone_code' => '010'],
                            ['name' => '丰台区','code' => '110106','phone_code' => '010'],
                            ['name' => '石景山区','code' => '110107','phone_code' => '010'],
                            ['name' => '海淀区','code' => '110108','phone_code' => '010'],
                            ['name' => '门头沟区','code' => '110109','phone_code' => '010'],
                            ['name' => '房山区','code' => '110111','phone_code' => '010'],
                            ['name' => '通州区','code' => '110112','phone_code' => '010'],
                            ['name' => '顺义区','code' => '110113','phone_code' => '010'],
                            ['name' => '昌平区','code' => '110114','phone_code' => '010'],
                            ['name' => '大兴区','code' => '110115','phone_code' => '010'],
                            ['name' => '怀柔区','code' => '110116','phone_code' => '010'],
                            ['name' => '平谷区','code' => '110117','phone_code' => '010'],
                            ['name' => '密云区','code' => '110118','phone_code' => '010'],
                            ['name' => '延庆区','code' => '110119','phone_code' => '010'],
                        ]
                    ]
                ]
            ],
            [
                'name' => '天津市',
                'code' => '120000',
                'phone_code' => '022',
                'children' => [
                    [
                        'name' => '天津城区',
                        'code' => '120100',
                        'phone_code' => '022',
                        'children' => [
                            ['name' => '和平区','code' => '120101','phone_code' => '022'],
                            ['name' => '河东区','code' => '120102','phone_code' => '022'],
                            ['name' => '河西区','code' => '120103','phone_code' => '022'],
                            ['name' => '南开区','code' => '120104','phone_code' => '022'],
                            ['name' => '河北区','code' => '120105','phone_code' => '022'],
                            ['name' => '红桥区','code' => '120106','phone_code' => '022'],
                            ['name' => '东丽区','code' => '120110','phone_code' => '022'],
                            ['name' => '西青区','code' => '120111','phone_code' => '022'],
                            ['name' => '津南区','code' => '120112','phone_code' => '022'],
                            ['name' => '北辰区','code' => '120113','phone_code' => '022'],
                            ['name' => '武清区','code' => '120114','phone_code' => '022'],
                            ['name' => '宝坻区','code' => '120115','phone_code' => '022'],
                            ['name' => '滨海新区','code' => '120116','phone_code' => '022'],
                            ['name' => '宁河区','code' => '120117','phone_code' => '022'],
                            ['name' => '静海区','code' => '120118','phone_code' => '022'],
                            ['name' => '蓟州区','code' => '120119','phone_code' => '022'],
                        ]
                    ]
                ]
            ],
            [
                'name' => '河北省',
                'code' => '130000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '石家庄市',
                        'code' => '130100',
                        'phone_code' => '0311',
                        'children' => [
                            ['name' => '长安区','code' => '130102','phone_code' => '0311'],
                            ['name' => '桥西区','code' => '130104','phone_code' => '0311'],
                            ['name' => '新华区','code' => '130105','phone_code' => '0311'],
                            ['name' => '井陉矿区','code' => '130107','phone_code' => '0311'],
                            ['name' => '裕华区','code' => '130108','phone_code' => '0311'],
                            ['name' => '藁城区','code' => '130109','phone_code' => '0311'],
                            ['name' => '鹿泉区','code' => '130110','phone_code' => '0311'],
                            ['name' => '栾城区','code' => '130111','phone_code' => '0311'],
                            ['name' => '井陉县','code' => '130121','phone_code' => '0311'],
                            ['name' => '正定县','code' => '130123','phone_code' => '0311'],
                            ['name' => '行唐县','code' => '130125','phone_code' => '0311'],
                            ['name' => '灵寿县','code' => '130126','phone_code' => '0311'],
                            ['name' => '高邑县','code' => '130127','phone_code' => '0311'],
                            ['name' => '深泽县','code' => '130128','phone_code' => '0311'],
                            ['name' => '赞皇县','code' => '130129','phone_code' => '0311'],
                            ['name' => '无极县','code' => '130130','phone_code' => '0311'],
                            ['name' => '平山县','code' => '130131','phone_code' => '0311'],
                            ['name' => '元氏县','code' => '130132','phone_code' => '0311'],
                            ['name' => '赵县','code' => '130133','phone_code' => '0311'],
                            ['name' => '辛集市','code' => '130181','phone_code' => '0311'],
                            ['name' => '晋州市','code' => '130183','phone_code' => '0311'],
                            ['name' => '新乐市','code' => '130184','phone_code' => '0311'],
                        ]
                    ],
                    [
                        'name' => '唐山市',
                        'code' => '130200',
                        'phone_code' => '0315',
                        'children' => [
                            ['name' => '路南区','code' => '130202','phone_code' => '0315'],
                            ['name' => '路北区','code' => '130203','phone_code' => '0315'],
                            ['name' => '古冶区','code' => '130204','phone_code' => '0315'],
                            ['name' => '开平区','code' => '130205','phone_code' => '0315'],
                            ['name' => '丰南区','code' => '130207','phone_code' => '0315'],
                            ['name' => '丰润区','code' => '130208','phone_code' => '0315'],
                            ['name' => '曹妃甸区','code' => '130209','phone_code' => '0315'],
                            ['name' => '滦县','code' => '130223','phone_code' => '0315'],
                            ['name' => '滦南县','code' => '130224','phone_code' => '0315'],
                            ['name' => '乐亭县','code' => '130225','phone_code' => '0315'],
                            ['name' => '迁西县','code' => '130227','phone_code' => '0315'],
                            ['name' => '玉田县','code' => '130229','phone_code' => '0315'],
                            ['name' => '遵化市','code' => '130281','phone_code' => '0315'],
                            ['name' => '迁安市','code' => '130283','phone_code' => '0315'],
                        ]
                    ],
                    [
                        'name' => '秦皇岛市',
                        'code' => '130300',
                        'phone_code' => '0335',
                        'children' => [
                            ['name' => '海港区','code' => '130302','phone_code' => '0335'],
                            ['name' => '山海关区','code' => '130303','phone_code' => '0335'],
                            ['name' => '北戴河区','code' => '130304','phone_code' => '0335'],
                            ['name' => '抚宁区','code' => '130306','phone_code' => '0335'],
                            ['name' => '青龙满族自治县','code' => '130321','phone_code' => '0335'],
                            ['name' => '昌黎县','code' => '130322','phone_code' => '0335'],
                            ['name' => '卢龙县','code' => '130324','phone_code' => '0335'],
                        ]
                    ],
                    [
                        'name' => '邯郸市',
                        'code' => '130400',
                        'phone_code' => '0310',
                        'children' => [
                            ['name' => '邯山区','code' => '130402','phone_code' => '0310'],
                            ['name' => '丛台区','code' => '130403','phone_code' => '0310'],
                            ['name' => '复兴区','code' => '130404','phone_code' => '0310'],
                            ['name' => '峰峰矿区','code' => '130406','phone_code' => '0310'],
                            ['name' => '临漳县','code' => '130423','phone_code' => '0310'],
                            ['name' => '成安县','code' => '130424','phone_code' => '0310'],
                            ['name' => '大名县','code' => '130425','phone_code' => '0310'],
                            ['name' => '涉县','code' => '130426','phone_code' => '0310'],
                            ['name' => '磁县','code' => '130427','phone_code' => '0310'],
                            ['name' => '肥乡区','code' => '130407','phone_code' => '0310'],
                            ['name' => '永年区','code' => '130408','phone_code' => '0310'],
                            ['name' => '邱县','code' => '130430','phone_code' => '0310'],
                            ['name' => '鸡泽县','code' => '130431','phone_code' => '0310'],
                            ['name' => '广平县','code' => '130432','phone_code' => '0310'],
                            ['name' => '馆陶县','code' => '130433','phone_code' => '0310'],
                            ['name' => '魏县','code' => '130434','phone_code' => '0310'],
                            ['name' => '曲周县','code' => '130435','phone_code' => '0310'],
                            ['name' => '武安市','code' => '130481','phone_code' => '0310'],
                        ]
                    ],
                    [
                        'name' => '邢台市',
                        'code' => '130500',
                        'phone_code' => '0319',
                        'children' => [
                            ['name' => '桥东区','code' => '130502','phone_code' => '0319'],
                            ['name' => '桥西区','code' => '130503','phone_code' => '0319'],
                            ['name' => '邢台县','code' => '130521','phone_code' => '0319'],
                            ['name' => '临城县','code' => '130522','phone_code' => '0319'],
                            ['name' => '内丘县','code' => '130523','phone_code' => '0319'],
                            ['name' => '柏乡县','code' => '130524','phone_code' => '0319'],
                            ['name' => '隆尧县','code' => '130525','phone_code' => '0319'],
                            ['name' => '任县','code' => '130526','phone_code' => '0319'],
                            ['name' => '南和县','code' => '130527','phone_code' => '0319'],
                            ['name' => '宁晋县','code' => '130528','phone_code' => '0319'],
                            ['name' => '巨鹿县','code' => '130529','phone_code' => '0319'],
                            ['name' => '新河县','code' => '130530','phone_code' => '0319'],
                            ['name' => '广宗县','code' => '130531','phone_code' => '0319'],
                            ['name' => '平乡县','code' => '130532','phone_code' => '0319'],
                            ['name' => '威县','code' => '130533','phone_code' => '0319'],
                            ['name' => '清河县','code' => '130534','phone_code' => '0319'],
                            ['name' => '临西县','code' => '130535','phone_code' => '0319'],
                            ['name' => '南宫市','code' => '130581','phone_code' => '0319'],
                            ['name' => '沙河市','code' => '130582','phone_code' => '0319'],
                        ]
                    ],
                    [
                        'name' => '保定市',
                        'code' => '130600',
                        'phone_code' => '0312',
                        'children' => [
                            ['name' => '竞秀区','code' => '130602','phone_code' => '0312'],
                            ['name' => '莲池区','code' => '130606','phone_code' => '0312'],
                            ['name' => '满城区','code' => '130607','phone_code' => '0312'],
                            ['name' => '清苑区','code' => '130608','phone_code' => '0312'],
                            ['name' => '徐水区','code' => '130609','phone_code' => '0312'],
                            ['name' => '涞水县','code' => '130623','phone_code' => '0312'],
                            ['name' => '阜平县','code' => '130624','phone_code' => '0312'],
                            ['name' => '定兴县','code' => '130626','phone_code' => '0312'],
                            ['name' => '唐县','code' => '130627','phone_code' => '0312'],
                            ['name' => '高阳县','code' => '130628','phone_code' => '0312'],
                            ['name' => '容城县','code' => '130629','phone_code' => '0312'],
                            ['name' => '涞源县','code' => '130630','phone_code' => '0312'],
                            ['name' => '望都县','code' => '130631','phone_code' => '0312'],
                            ['name' => '安新县','code' => '130632','phone_code' => '0312'],
                            ['name' => '易县','code' => '130633','phone_code' => '0312'],
                            ['name' => '曲阳县','code' => '130634','phone_code' => '0312'],
                            ['name' => '蠡县','code' => '130635','phone_code' => '0312'],
                            ['name' => '顺平县','code' => '130636','phone_code' => '0312'],
                            ['name' => '博野县','code' => '130637','phone_code' => '0312'],
                            ['name' => '雄县','code' => '130638','phone_code' => '0312'],
                            ['name' => '涿州市','code' => '130681','phone_code' => '0312'],
                            ['name' => '定州市','code' => '130682','phone_code' => '0312'],
                            ['name' => '安国市','code' => '130683','phone_code' => '0312'],
                            ['name' => '高碑店市','code' => '130684','phone_code' => '0312'],
                        ]
                    ],
                    [
                        'name' => '张家口市',
                        'code' => '130700',
                        'phone_code' => '0313',
                        'children' => [
                            ['name' => '桥东区','code' => '130702','phone_code' => '0313'],
                            ['name' => '桥西区','code' => '130703','phone_code' => '0313'],
                            ['name' => '宣化区','code' => '130705','phone_code' => '0313'],
                            ['name' => '下花园区','code' => '130706','phone_code' => '0313'],
                            ['name' => '万全区','code' => '130708','phone_code' => '0313'],
                            ['name' => '崇礼区','code' => '130709','phone_code' => '0313'],
                            ['name' => '张北县','code' => '130722','phone_code' => '0313'],
                            ['name' => '康保县','code' => '130723','phone_code' => '0313'],
                            ['name' => '沽源县','code' => '130724','phone_code' => '0313'],
                            ['name' => '尚义县','code' => '130725','phone_code' => '0313'],
                            ['name' => '蔚县','code' => '130726','phone_code' => '0313'],
                            ['name' => '阳原县','code' => '130727','phone_code' => '0313'],
                            ['name' => '怀安县','code' => '130728','phone_code' => '0313'],
                            ['name' => '怀来县','code' => '130730','phone_code' => '0313'],
                            ['name' => '涿鹿县','code' => '130731','phone_code' => '0313'],
                            ['name' => '赤城县','code' => '130732','phone_code' => '0313'],
                        ]
                    ],
                    [
                        'name' => '承德市',
                        'code' => '130800',
                        'phone_code' => '0314',
                        'children' => [
                            ['name' => '双桥区','code' => '130802','phone_code' => '0314'],
                            ['name' => '双滦区','code' => '130803','phone_code' => '0314'],
                            ['name' => '鹰手营子矿区','code' => '130804','phone_code' => '0314'],
                            ['name' => '承德县','code' => '130821','phone_code' => '0314'],
                            ['name' => '兴隆县','code' => '130822','phone_code' => '0314'],
                            ['name' => '平泉市','code' => '130881','phone_code' => '0314'],
                            ['name' => '滦平县','code' => '130824','phone_code' => '0314'],
                            ['name' => '隆化县','code' => '130825','phone_code' => '0314'],
                            ['name' => '丰宁满族自治县','code' => '130826','phone_code' => '0314'],
                            ['name' => '宽城满族自治县','code' => '130827','phone_code' => '0314'],
                            ['name' => '围场满族蒙古族自治县','code' => '130828','phone_code' => '0314'],
                        ]
                    ],
                    [
                        'name' => '沧州市',
                        'code' => '130900',
                        'phone_code' => '0317',
                        'children' => [
                            ['name' => '新华区','code' => '130902','phone_code' => '0317'],
                            ['name' => '运河区','code' => '130903','phone_code' => '0317'],
                            ['name' => '沧县','code' => '130921','phone_code' => '0317'],
                            ['name' => '青县','code' => '130922','phone_code' => '0317'],
                            ['name' => '东光县','code' => '130923','phone_code' => '0317'],
                            ['name' => '海兴县','code' => '130924','phone_code' => '0317'],
                            ['name' => '盐山县','code' => '130925','phone_code' => '0317'],
                            ['name' => '肃宁县','code' => '130926','phone_code' => '0317'],
                            ['name' => '南皮县','code' => '130927','phone_code' => '0317'],
                            ['name' => '吴桥县','code' => '130928','phone_code' => '0317'],
                            ['name' => '献县','code' => '130929','phone_code' => '0317'],
                            ['name' => '孟村回族自治县','code' => '130930','phone_code' => '0317'],
                            ['name' => '泊头市','code' => '130981','phone_code' => '0317'],
                            ['name' => '任丘市','code' => '130982','phone_code' => '0317'],
                            ['name' => '黄骅市','code' => '130983','phone_code' => '0317'],
                            ['name' => '河间市','code' => '130984','phone_code' => '0317'],
                        ]
                    ],
                    [
                        'name' => '廊坊市',
                        'code' => '131000',
                        'phone_code' => '0316',
                        'children' => [
                            ['name' => '安次区','code' => '131002','phone_code' => '0316'],
                            ['name' => '广阳区','code' => '131003','phone_code' => '0316'],
                            ['name' => '固安县','code' => '131022','phone_code' => '0316'],
                            ['name' => '永清县','code' => '131023','phone_code' => '0316'],
                            ['name' => '香河县','code' => '131024','phone_code' => '0316'],
                            ['name' => '大城县','code' => '131025','phone_code' => '0316'],
                            ['name' => '文安县','code' => '131026','phone_code' => '0316'],
                            ['name' => '大厂回族自治县','code' => '131028','phone_code' => '0316'],
                            ['name' => '霸州市','code' => '131081','phone_code' => '0316'],
                            ['name' => '三河市','code' => '131082','phone_code' => '0316'],
                        ]
                    ],
                    [
                        'name' => '衡水市',
                        'code' => '131100',
                        'phone_code' => '0318',
                        'children' => [
                            ['name' => '桃城区','code' => '131102','phone_code' => '0318'],
                            ['name' => '冀州区','code' => '131103','phone_code' => '0318'],
                            ['name' => '枣强县','code' => '131121','phone_code' => '0318'],
                            ['name' => '武邑县','code' => '131122','phone_code' => '0318'],
                            ['name' => '武强县','code' => '131123','phone_code' => '0318'],
                            ['name' => '饶阳县','code' => '131124','phone_code' => '0318'],
                            ['name' => '安平县','code' => '131125','phone_code' => '0318'],
                            ['name' => '故城县','code' => '131126','phone_code' => '0318'],
                            ['name' => '景县','code' => '131127','phone_code' => '0318'],
                            ['name' => '阜城县','code' => '131128','phone_code' => '0318'],
                            ['name' => '深州市','code' => '131182','phone_code' => '0318'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '山西省',
                'code' => '140000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '太原市',
                        'code' => '140100',
                        'phone_code' => '0351',
                        'children' => [
                            ['name' => '小店区','code' => '140105','phone_code' => '0351'],
                            ['name' => '迎泽区','code' => '140106','phone_code' => '0351'],
                            ['name' => '杏花岭区','code' => '140107','phone_code' => '0351'],
                            ['name' => '尖草坪区','code' => '140108','phone_code' => '0351'],
                            ['name' => '万柏林区','code' => '140109','phone_code' => '0351'],
                            ['name' => '晋源区','code' => '140110','phone_code' => '0351'],
                            ['name' => '清徐县','code' => '140121','phone_code' => '0351'],
                            ['name' => '阳曲县','code' => '140122','phone_code' => '0351'],
                            ['name' => '娄烦县','code' => '140123','phone_code' => '0351'],
                            ['name' => '古交市','code' => '140181','phone_code' => '0351'],
                        ]
                    ],
                    [
                        'name' => '大同市',
                        'code' => '140200',
                        'phone_code' => '0352',
                        'children' => [
                            ['name' => '城区','code' => '140202','phone_code' => '0352'],
                            ['name' => '矿区','code' => '140203','phone_code' => '0352'],
                            ['name' => '南郊区','code' => '140211','phone_code' => '0352'],
                            ['name' => '新荣区','code' => '140212','phone_code' => '0352'],
                            ['name' => '阳高县','code' => '140221','phone_code' => '0352'],
                            ['name' => '天镇县','code' => '140222','phone_code' => '0352'],
                            ['name' => '广灵县','code' => '140223','phone_code' => '0352'],
                            ['name' => '灵丘县','code' => '140224','phone_code' => '0352'],
                            ['name' => '浑源县','code' => '140225','phone_code' => '0352'],
                            ['name' => '左云县','code' => '140226','phone_code' => '0352'],
                            ['name' => '大同县','code' => '140227','phone_code' => '0352'],
                        ]
                    ],
                    [
                        'name' => '阳泉市',
                        'code' => '140300',
                        'phone_code' => '0353',
                        'children' => [
                            ['name' => '城区','code' => '140302','phone_code' => '0353'],
                            ['name' => '矿区','code' => '140303','phone_code' => '0353'],
                            ['name' => '郊区','code' => '140311','phone_code' => '0353'],
                            ['name' => '平定县','code' => '140321','phone_code' => '0353'],
                            ['name' => '盂县','code' => '140322','phone_code' => '0353'],
                        ]
                    ],
                    [
                        'name' => '长治市',
                        'code' => '140400',
                        'phone_code' => '0355',
                        'children' => [
                            ['name' => '城区','code' => '140402','phone_code' => '0355'],
                            ['name' => '郊区','code' => '140411','phone_code' => '0355'],
                            ['name' => '长治县','code' => '140421','phone_code' => '0355'],
                            ['name' => '襄垣县','code' => '140423','phone_code' => '0355'],
                            ['name' => '屯留县','code' => '140424','phone_code' => '0355'],
                            ['name' => '平顺县','code' => '140425','phone_code' => '0355'],
                            ['name' => '黎城县','code' => '140426','phone_code' => '0355'],
                            ['name' => '壶关县','code' => '140427','phone_code' => '0355'],
                            ['name' => '长子县','code' => '140428','phone_code' => '0355'],
                            ['name' => '武乡县','code' => '140429','phone_code' => '0355'],
                            ['name' => '沁县','code' => '140430','phone_code' => '0355'],
                            ['name' => '沁源县','code' => '140431','phone_code' => '0355'],
                            ['name' => '潞城市','code' => '140481','phone_code' => '0355'],
                        ]
                    ],
                    [
                        'name' => '晋城市',
                        'code' => '140500',
                        'phone_code' => '0356',
                        'children' => [
                            ['name' => '城区','code' => '140502','phone_code' => '0356'],
                            ['name' => '沁水县','code' => '140521','phone_code' => '0356'],
                            ['name' => '阳城县','code' => '140522','phone_code' => '0356'],
                            ['name' => '陵川县','code' => '140524','phone_code' => '0356'],
                            ['name' => '泽州县','code' => '140525','phone_code' => '0356'],
                            ['name' => '高平市','code' => '140581','phone_code' => '0356'],
                        ]
                    ],
                    [
                        'name' => '朔州市',
                        'code' => '140600',
                        'phone_code' => '0349',
                        'children' => [
                            ['name' => '朔城区','code' => '140602','phone_code' => '0349'],
                            ['name' => '平鲁区','code' => '140603','phone_code' => '0349'],
                            ['name' => '山阴县','code' => '140621','phone_code' => '0349'],
                            ['name' => '应县','code' => '140622','phone_code' => '0349'],
                            ['name' => '右玉县','code' => '140623','phone_code' => '0349'],
                            ['name' => '怀仁县','code' => '140624','phone_code' => '0349'],
                        ]
                    ],
                    [
                        'name' => '晋中市',
                        'code' => '140700',
                        'phone_code' => '0354',
                        'children' => [
                            ['name' => '榆次区','code' => '140702','phone_code' => '0354'],
                            ['name' => '榆社县','code' => '140721','phone_code' => '0354'],
                            ['name' => '左权县','code' => '140722','phone_code' => '0354'],
                            ['name' => '和顺县','code' => '140723','phone_code' => '0354'],
                            ['name' => '昔阳县','code' => '140724','phone_code' => '0354'],
                            ['name' => '寿阳县','code' => '140725','phone_code' => '0354'],
                            ['name' => '太谷县','code' => '140726','phone_code' => '0354'],
                            ['name' => '祁县','code' => '140727','phone_code' => '0354'],
                            ['name' => '平遥县','code' => '140728','phone_code' => '0354'],
                            ['name' => '灵石县','code' => '140729','phone_code' => '0354'],
                            ['name' => '介休市','code' => '140781','phone_code' => '0354'],
                        ]
                    ],
                    [
                        'name' => '运城市',
                        'code' => '140800',
                        'phone_code' => '0359',
                        'children' => [
                            ['name' => '盐湖区','code' => '140802','phone_code' => '0359'],
                            ['name' => '临猗县','code' => '140821','phone_code' => '0359'],
                            ['name' => '万荣县','code' => '140822','phone_code' => '0359'],
                            ['name' => '闻喜县','code' => '140823','phone_code' => '0359'],
                            ['name' => '稷山县','code' => '140824','phone_code' => '0359'],
                            ['name' => '新绛县','code' => '140825','phone_code' => '0359'],
                            ['name' => '绛县','code' => '140826','phone_code' => '0359'],
                            ['name' => '垣曲县','code' => '140827','phone_code' => '0359'],
                            ['name' => '夏县','code' => '140828','phone_code' => '0359'],
                            ['name' => '平陆县','code' => '140829','phone_code' => '0359'],
                            ['name' => '芮城县','code' => '140830','phone_code' => '0359'],
                            ['name' => '永济市','code' => '140881','phone_code' => '0359'],
                            ['name' => '河津市','code' => '140882','phone_code' => '0359'],
                        ]
                    ],
                    [
                        'name' => '忻州市',
                        'code' => '140900',
                        'phone_code' => '0350',
                        'children' => [
                            ['name' => '忻府区','code' => '140902','phone_code' => '0350'],
                            ['name' => '定襄县','code' => '140921','phone_code' => '0350'],
                            ['name' => '五台县','code' => '140922','phone_code' => '0350'],
                            ['name' => '代县','code' => '140923','phone_code' => '0350'],
                            ['name' => '繁峙县','code' => '140924','phone_code' => '0350'],
                            ['name' => '宁武县','code' => '140925','phone_code' => '0350'],
                            ['name' => '静乐县','code' => '140926','phone_code' => '0350'],
                            ['name' => '神池县','code' => '140927','phone_code' => '0350'],
                            ['name' => '五寨县','code' => '140928','phone_code' => '0350'],
                            ['name' => '岢岚县','code' => '140929','phone_code' => '0350'],
                            ['name' => '河曲县','code' => '140930','phone_code' => '0350'],
                            ['name' => '保德县','code' => '140931','phone_code' => '0350'],
                            ['name' => '偏关县','code' => '140932','phone_code' => '0350'],
                            ['name' => '原平市','code' => '140981','phone_code' => '0350'],
                        ]
                    ],
                    [
                        'name' => '临汾市',
                        'code' => '141000',
                        'phone_code' => '0357',
                        'children' => [
                            ['name' => '尧都区','code' => '141002','phone_code' => '0357'],
                            ['name' => '曲沃县','code' => '141021','phone_code' => '0357'],
                            ['name' => '翼城县','code' => '141022','phone_code' => '0357'],
                            ['name' => '襄汾县','code' => '141023','phone_code' => '0357'],
                            ['name' => '洪洞县','code' => '141024','phone_code' => '0357'],
                            ['name' => '古县','code' => '141025','phone_code' => '0357'],
                            ['name' => '安泽县','code' => '141026','phone_code' => '0357'],
                            ['name' => '浮山县','code' => '141027','phone_code' => '0357'],
                            ['name' => '吉县','code' => '141028','phone_code' => '0357'],
                            ['name' => '乡宁县','code' => '141029','phone_code' => '0357'],
                            ['name' => '大宁县','code' => '141030','phone_code' => '0357'],
                            ['name' => '隰县','code' => '141031','phone_code' => '0357'],
                            ['name' => '永和县','code' => '141032','phone_code' => '0357'],
                            ['name' => '蒲县','code' => '141033','phone_code' => '0357'],
                            ['name' => '汾西县','code' => '141034','phone_code' => '0357'],
                            ['name' => '侯马市','code' => '141081','phone_code' => '0357'],
                            ['name' => '霍州市','code' => '141082','phone_code' => '0357'],
                        ]
                    ],
                    [
                        'name' => '吕梁市',
                        'code' => '141100',
                        'phone_code' => '0358',
                        'children' => [
                            ['name' => '离石区','code' => '141102','phone_code' => '0358'],
                            ['name' => '文水县','code' => '141121','phone_code' => '0358'],
                            ['name' => '交城县','code' => '141122','phone_code' => '0358'],
                            ['name' => '兴县','code' => '141123','phone_code' => '0358'],
                            ['name' => '临县','code' => '141124','phone_code' => '0358'],
                            ['name' => '柳林县','code' => '141125','phone_code' => '0358'],
                            ['name' => '石楼县','code' => '141126','phone_code' => '0358'],
                            ['name' => '岚县','code' => '141127','phone_code' => '0358'],
                            ['name' => '方山县','code' => '141128','phone_code' => '0358'],
                            ['name' => '中阳县','code' => '141129','phone_code' => '0358'],
                            ['name' => '交口县','code' => '141130','phone_code' => '0358'],
                            ['name' => '孝义市','code' => '141181','phone_code' => '0358'],
                            ['name' => '汾阳市','code' => '141182','phone_code' => '0358'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '内蒙古自治区',
                'code' => '150000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '呼和浩特市',
                        'code' => '150100',
                        'phone_code' => '0471',
                        'children' => [
                            ['name' => '新城区','code' => '150102','phone_code' => '0471'],
                            ['name' => '回民区','code' => '150103','phone_code' => '0471'],
                            ['name' => '玉泉区','code' => '150104','phone_code' => '0471'],
                            ['name' => '赛罕区','code' => '150105','phone_code' => '0471'],
                            ['name' => '土默特左旗','code' => '150121','phone_code' => '0471'],
                            ['name' => '托克托县','code' => '150122','phone_code' => '0471'],
                            ['name' => '和林格尔县','code' => '150123','phone_code' => '0471'],
                            ['name' => '清水河县','code' => '150124','phone_code' => '0471'],
                            ['name' => '武川县','code' => '150125','phone_code' => '0471'],
                        ]
                    ],
                    [
                        'name' => '包头市',
                        'code' => '150200',
                        'phone_code' => '0472',
                        'children' => [
                            ['name' => '东河区','code' => '150202','phone_code' => '0472'],
                            ['name' => '昆都仑区','code' => '150203','phone_code' => '0472'],
                            ['name' => '青山区','code' => '150204','phone_code' => '0472'],
                            ['name' => '石拐区','code' => '150205','phone_code' => '0472'],
                            ['name' => '白云鄂博矿区','code' => '150206','phone_code' => '0472'],
                            ['name' => '九原区','code' => '150207','phone_code' => '0472'],
                            ['name' => '土默特右旗','code' => '150221','phone_code' => '0472'],
                            ['name' => '固阳县','code' => '150222','phone_code' => '0472'],
                            ['name' => '达尔罕茂明安联合旗','code' => '150223','phone_code' => '0472'],
                        ]
                    ],
                    [
                        'name' => '乌海市',
                        'code' => '150300',
                        'phone_code' => '0473',
                        'children' => [
                            ['name' => '海勃湾区','code' => '150302','phone_code' => '0473'],
                            ['name' => '海南区','code' => '150303','phone_code' => '0473'],
                            ['name' => '乌达区','code' => '150304','phone_code' => '0473'],
                        ]
                    ],
                    [
                        'name' => '赤峰市',
                        'code' => '150400',
                        'phone_code' => '0476',
                        'children' => [
                            ['name' => '红山区','code' => '150402','phone_code' => '0476'],
                            ['name' => '元宝山区','code' => '150403','phone_code' => '0476'],
                            ['name' => '松山区','code' => '150404','phone_code' => '0476'],
                            ['name' => '阿鲁科尔沁旗','code' => '150421','phone_code' => '0476'],
                            ['name' => '巴林左旗','code' => '150422','phone_code' => '0476'],
                            ['name' => '巴林右旗','code' => '150423','phone_code' => '0476'],
                            ['name' => '林西县','code' => '150424','phone_code' => '0476'],
                            ['name' => '克什克腾旗','code' => '150425','phone_code' => '0476'],
                            ['name' => '翁牛特旗','code' => '150426','phone_code' => '0476'],
                            ['name' => '喀喇沁旗','code' => '150428','phone_code' => '0476'],
                            ['name' => '宁城县','code' => '150429','phone_code' => '0476'],
                            ['name' => '敖汉旗','code' => '150430','phone_code' => '0476'],
                        ]
                    ],
                    [
                        'name' => '通辽市',
                        'code' => '150500',
                        'phone_code' => '0475',
                        'children' => [
                            ['name' => '科尔沁区','code' => '150502','phone_code' => '0475'],
                            ['name' => '科尔沁左翼中旗','code' => '150521','phone_code' => '0475'],
                            ['name' => '科尔沁左翼后旗','code' => '150522','phone_code' => '0475'],
                            ['name' => '开鲁县','code' => '150523','phone_code' => '0475'],
                            ['name' => '库伦旗','code' => '150524','phone_code' => '0475'],
                            ['name' => '奈曼旗','code' => '150525','phone_code' => '0475'],
                            ['name' => '扎鲁特旗','code' => '150526','phone_code' => '0475'],
                            ['name' => '霍林郭勒市','code' => '150581','phone_code' => '0475'],
                        ]
                    ],
                    [
                        'name' => '鄂尔多斯市',
                        'code' => '150600',
                        'phone_code' => '0477',
                        'children' => [
                            ['name' => '东胜区','code' => '150602','phone_code' => '0477'],
                            ['name' => '康巴什区','code' => '150603','phone_code' => '0477'],
                            ['name' => '达拉特旗','code' => '150621','phone_code' => '0477'],
                            ['name' => '准格尔旗','code' => '150622','phone_code' => '0477'],
                            ['name' => '鄂托克前旗','code' => '150623','phone_code' => '0477'],
                            ['name' => '鄂托克旗','code' => '150624','phone_code' => '0477'],
                            ['name' => '杭锦旗','code' => '150625','phone_code' => '0477'],
                            ['name' => '乌审旗','code' => '150626','phone_code' => '0477'],
                            ['name' => '伊金霍洛旗','code' => '150627','phone_code' => '0477'],
                        ]
                    ],
                    [
                        'name' => '呼伦贝尔市',
                        'code' => '150700',
                        'phone_code' => '0470',
                        'children' => [
                            ['name' => '海拉尔区','code' => '150702','phone_code' => '0470'],
                            ['name' => '扎赉诺尔区','code' => '150703','phone_code' => '0470'],
                            ['name' => '阿荣旗','code' => '150721','phone_code' => '0470'],
                            ['name' => '莫力达瓦达斡尔族自治旗','code' => '150722','phone_code' => '0470'],
                            ['name' => '鄂伦春自治旗','code' => '150723','phone_code' => '0470'],
                            ['name' => '鄂温克族自治旗','code' => '150724','phone_code' => '0470'],
                            ['name' => '陈巴尔虎旗','code' => '150725','phone_code' => '0470'],
                            ['name' => '新巴尔虎左旗','code' => '150726','phone_code' => '0470'],
                            ['name' => '新巴尔虎右旗','code' => '150727','phone_code' => '0470'],
                            ['name' => '满洲里市','code' => '150781','phone_code' => '0470'],
                            ['name' => '牙克石市','code' => '150782','phone_code' => '0470'],
                            ['name' => '扎兰屯市','code' => '150783','phone_code' => '0470'],
                            ['name' => '额尔古纳市','code' => '150784','phone_code' => '0470'],
                            ['name' => '根河市','code' => '150785','phone_code' => '0470'],
                        ]
                    ],
                    [
                        'name' => '巴彦淖尔市',
                        'code' => '150800',
                        'phone_code' => '0478',
                        'children' => [
                            ['name' => '临河区','code' => '150802','phone_code' => '0478'],
                            ['name' => '五原县','code' => '150821','phone_code' => '0478'],
                            ['name' => '磴口县','code' => '150822','phone_code' => '0478'],
                            ['name' => '乌拉特前旗','code' => '150823','phone_code' => '0478'],
                            ['name' => '乌拉特中旗','code' => '150824','phone_code' => '0478'],
                            ['name' => '乌拉特后旗','code' => '150825','phone_code' => '0478'],
                            ['name' => '杭锦后旗','code' => '150826','phone_code' => '0478'],
                        ]
                    ],
                    [
                        'name' => '乌兰察布市',
                        'code' => '150900',
                        'phone_code' => '0474',
                        'children' => [
                            ['name' => '集宁区','code' => '150902','phone_code' => '0474'],
                            ['name' => '卓资县','code' => '150921','phone_code' => '0474'],
                            ['name' => '化德县','code' => '150922','phone_code' => '0474'],
                            ['name' => '商都县','code' => '150923','phone_code' => '0474'],
                            ['name' => '兴和县','code' => '150924','phone_code' => '0474'],
                            ['name' => '凉城县','code' => '150925','phone_code' => '0474'],
                            ['name' => '察哈尔右翼前旗','code' => '150926','phone_code' => '0474'],
                            ['name' => '察哈尔右翼中旗','code' => '150927','phone_code' => '0474'],
                            ['name' => '察哈尔右翼后旗','code' => '150928','phone_code' => '0474'],
                            ['name' => '四子王旗','code' => '150929','phone_code' => '0474'],
                            ['name' => '丰镇市','code' => '150981','phone_code' => '0474'],
                        ]
                    ],
                    [
                        'name' => '兴安盟',
                        'code' => '152200',
                        'phone_code' => '0482',
                        'children' => [
                            ['name' => '乌兰浩特市','code' => '152201','phone_code' => '0482'],
                            ['name' => '阿尔山市','code' => '152202','phone_code' => '0482'],
                            ['name' => '科尔沁右翼前旗','code' => '152221','phone_code' => '0482'],
                            ['name' => '科尔沁右翼中旗','code' => '152222','phone_code' => '0482'],
                            ['name' => '扎赉特旗','code' => '152223','phone_code' => '0482'],
                            ['name' => '突泉县','code' => '152224','phone_code' => '0482'],
                        ]
                    ],
                    [
                        'name' => '锡林郭勒盟',
                        'code' => '152500',
                        'phone_code' => '0479',
                        'children' => [
                            ['name' => '二连浩特市','code' => '152501','phone_code' => '0479'],
                            ['name' => '锡林浩特市','code' => '152502','phone_code' => '0479'],
                            ['name' => '阿巴嘎旗','code' => '152522','phone_code' => '0479'],
                            ['name' => '苏尼特左旗','code' => '152523','phone_code' => '0479'],
                            ['name' => '苏尼特右旗','code' => '152524','phone_code' => '0479'],
                            ['name' => '东乌珠穆沁旗','code' => '152525','phone_code' => '0479'],
                            ['name' => '西乌珠穆沁旗','code' => '152526','phone_code' => '0479'],
                            ['name' => '太仆寺旗','code' => '152527','phone_code' => '0479'],
                            ['name' => '镶黄旗','code' => '152528','phone_code' => '0479'],
                            ['name' => '正镶白旗','code' => '152529','phone_code' => '0479'],
                            ['name' => '正蓝旗','code' => '152530','phone_code' => '0479'],
                            ['name' => '多伦县','code' => '152531','phone_code' => '0479'],
                        ]
                    ],
                    [
                        'name' => '阿拉善盟',
                        'code' => '152900',
                        'phone_code' => '0483',
                        'children' => [
                            ['name' => '阿拉善左旗','code' => '152921','phone_code' => '0483'],
                            ['name' => '阿拉善右旗','code' => '152922','phone_code' => '0483'],
                            ['name' => '额济纳旗','code' => '152923','phone_code' => '0483'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '辽宁省',
                'code' => '210000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '沈阳市',
                        'code' => '210100',
                        'phone_code' => '024',
                        'children' => [
                            ['name' => '和平区','code' => '210102','phone_code' => '024'],
                            ['name' => '沈河区','code' => '210103','phone_code' => '024'],
                            ['name' => '大东区','code' => '210104','phone_code' => '024'],
                            ['name' => '皇姑区','code' => '210105','phone_code' => '024'],
                            ['name' => '铁西区','code' => '210106','phone_code' => '024'],
                            ['name' => '苏家屯区','code' => '210111','phone_code' => '024'],
                            ['name' => '浑南区','code' => '210112','phone_code' => '024'],
                            ['name' => '沈北新区','code' => '210113','phone_code' => '024'],
                            ['name' => '于洪区','code' => '210114','phone_code' => '024'],
                            ['name' => '辽中区','code' => '210115','phone_code' => '024'],
                            ['name' => '康平县','code' => '210123','phone_code' => '024'],
                            ['name' => '法库县','code' => '210124','phone_code' => '024'],
                            ['name' => '新民市','code' => '210181','phone_code' => '024'],
                        ]
                    ],
                    [
                        'name' => '大连市',
                        'code' => '210200',
                        'phone_code' => '0411',
                        'children' => [
                            ['name' => '中山区','code' => '210202','phone_code' => '0411'],
                            ['name' => '西岗区','code' => '210203','phone_code' => '0411'],
                            ['name' => '沙河口区','code' => '210204','phone_code' => '0411'],
                            ['name' => '甘井子区','code' => '210211','phone_code' => '0411'],
                            ['name' => '旅顺口区','code' => '210212','phone_code' => '0411'],
                            ['name' => '金州区','code' => '210213','phone_code' => '0411'],
                            ['name' => '普兰店区','code' => '210214','phone_code' => '0411'],
                            ['name' => '长海县','code' => '210224','phone_code' => '0411'],
                            ['name' => '瓦房店市','code' => '210281','phone_code' => '0411'],
                            ['name' => '庄河市','code' => '210283','phone_code' => '0411'],
                        ]
                    ],
                    [
                        'name' => '鞍山市',
                        'code' => '210300',
                        'phone_code' => '0412',
                        'children' => [
                            ['name' => '铁东区','code' => '210302','phone_code' => '0412'],
                            ['name' => '铁西区','code' => '210303','phone_code' => '0412'],
                            ['name' => '立山区','code' => '210304','phone_code' => '0412'],
                            ['name' => '千山区','code' => '210311','phone_code' => '0412'],
                            ['name' => '台安县','code' => '210321','phone_code' => '0412'],
                            ['name' => '岫岩满族自治县','code' => '210323','phone_code' => '0412'],
                            ['name' => '海城市','code' => '210381','phone_code' => '0412'],
                        ]
                    ],
                    [
                        'name' => '抚顺市',
                        'code' => '210400',
                        'phone_code' => '0413',
                        'children' => [
                            ['name' => '新抚区','code' => '210402','phone_code' => '0413'],
                            ['name' => '东洲区','code' => '210403','phone_code' => '0413'],
                            ['name' => '望花区','code' => '210404','phone_code' => '0413'],
                            ['name' => '顺城区','code' => '210411','phone_code' => '0413'],
                            ['name' => '抚顺县','code' => '210421','phone_code' => '0413'],
                            ['name' => '新宾满族自治县','code' => '210422','phone_code' => '0413'],
                            ['name' => '清原满族自治县','code' => '210423','phone_code' => '0413'],
                        ]
                    ],
                    [
                        'name' => '本溪市',
                        'code' => '210500',
                        'phone_code' => '0414',
                        'children' => [
                            ['name' => '平山区','code' => '210502','phone_code' => '0414'],
                            ['name' => '溪湖区','code' => '210503','phone_code' => '0414'],
                            ['name' => '明山区','code' => '210504','phone_code' => '0414'],
                            ['name' => '南芬区','code' => '210505','phone_code' => '0414'],
                            ['name' => '本溪满族自治县','code' => '210521','phone_code' => '0414'],
                            ['name' => '桓仁满族自治县','code' => '210522','phone_code' => '0414'],
                        ]
                    ],
                    [
                        'name' => '丹东市',
                        'code' => '210600',
                        'phone_code' => '0415',
                        'children' => [
                            ['name' => '元宝区','code' => '210602','phone_code' => '0415'],
                            ['name' => '振兴区','code' => '210603','phone_code' => '0415'],
                            ['name' => '振安区','code' => '210604','phone_code' => '0415'],
                            ['name' => '宽甸满族自治县','code' => '210624','phone_code' => '0415'],
                            ['name' => '东港市','code' => '210681','phone_code' => '0415'],
                            ['name' => '凤城市','code' => '210682','phone_code' => '0415'],
                        ]
                    ],
                    [
                        'name' => '锦州市',
                        'code' => '210700',
                        'phone_code' => '0416',
                        'children' => [
                            ['name' => '古塔区','code' => '210702','phone_code' => '0416'],
                            ['name' => '凌河区','code' => '210703','phone_code' => '0416'],
                            ['name' => '太和区','code' => '210711','phone_code' => '0416'],
                            ['name' => '黑山县','code' => '210726','phone_code' => '0416'],
                            ['name' => '义县','code' => '210727','phone_code' => '0416'],
                            ['name' => '凌海市','code' => '210781','phone_code' => '0416'],
                            ['name' => '北镇市','code' => '210782','phone_code' => '0416'],
                        ]
                    ],
                    [
                        'name' => '营口市',
                        'code' => '210800',
                        'phone_code' => '0417',
                        'children' => [
                            ['name' => '站前区','code' => '210802','phone_code' => '0417'],
                            ['name' => '西市区','code' => '210803','phone_code' => '0417'],
                            ['name' => '鲅鱼圈区','code' => '210804','phone_code' => '0417'],
                            ['name' => '老边区','code' => '210811','phone_code' => '0417'],
                            ['name' => '盖州市','code' => '210881','phone_code' => '0417'],
                            ['name' => '大石桥市','code' => '210882','phone_code' => '0417'],
                        ]
                    ],
                    [
                        'name' => '阜新市',
                        'code' => '210900',
                        'phone_code' => '0418',
                        'children' => [
                            ['name' => '海州区','code' => '210902','phone_code' => '0418'],
                            ['name' => '新邱区','code' => '210903','phone_code' => '0418'],
                            ['name' => '太平区','code' => '210904','phone_code' => '0418'],
                            ['name' => '清河门区','code' => '210905','phone_code' => '0418'],
                            ['name' => '细河区','code' => '210911','phone_code' => '0418'],
                            ['name' => '阜新蒙古族自治县','code' => '210921','phone_code' => '0418'],
                            ['name' => '彰武县','code' => '210922','phone_code' => '0418'],
                        ]
                    ],
                    [
                        'name' => '辽阳市',
                        'code' => '211000',
                        'phone_code' => '0419',
                        'children' => [
                            ['name' => '白塔区','code' => '211002','phone_code' => '0419'],
                            ['name' => '文圣区','code' => '211003','phone_code' => '0419'],
                            ['name' => '宏伟区','code' => '211004','phone_code' => '0419'],
                            ['name' => '弓长岭区','code' => '211005','phone_code' => '0419'],
                            ['name' => '太子河区','code' => '211011','phone_code' => '0419'],
                            ['name' => '辽阳县','code' => '211021','phone_code' => '0419'],
                            ['name' => '灯塔市','code' => '211081','phone_code' => '0419'],
                        ]
                    ],
                    [
                        'name' => '盘锦市',
                        'code' => '211100',
                        'phone_code' => '0427',
                        'children' => [
                            ['name' => '双台子区','code' => '211102','phone_code' => '0427'],
                            ['name' => '兴隆台区','code' => '211103','phone_code' => '0427'],
                            ['name' => '大洼区','code' => '211104','phone_code' => '0427'],
                            ['name' => '盘山县','code' => '211122','phone_code' => '0427'],
                        ]
                    ],
                    [
                        'name' => '铁岭市',
                        'code' => '211200',
                        'phone_code' => '0410',
                        'children' => [
                            ['name' => '银州区','code' => '211202','phone_code' => '0410'],
                            ['name' => '清河区','code' => '211204','phone_code' => '0410'],
                            ['name' => '铁岭县','code' => '211221','phone_code' => '0410'],
                            ['name' => '西丰县','code' => '211223','phone_code' => '0410'],
                            ['name' => '昌图县','code' => '211224','phone_code' => '0410'],
                            ['name' => '调兵山市','code' => '211281','phone_code' => '0410'],
                            ['name' => '开原市','code' => '211282','phone_code' => '0410'],
                        ]
                    ],
                    [
                        'name' => '朝阳市',
                        'code' => '211300',
                        'phone_code' => '0421',
                        'children' => [
                            ['name' => '双塔区','code' => '211302','phone_code' => '0421'],
                            ['name' => '龙城区','code' => '211303','phone_code' => '0421'],
                            ['name' => '朝阳县','code' => '211321','phone_code' => '0421'],
                            ['name' => '建平县','code' => '211322','phone_code' => '0421'],
                            ['name' => '喀喇沁左翼蒙古族自治县','code' => '211324','phone_code' => '0421'],
                            ['name' => '北票市','code' => '211381','phone_code' => '0421'],
                            ['name' => '凌源市','code' => '211382','phone_code' => '0421'],
                        ]
                    ],
                    [
                        'name' => '葫芦岛市',
                        'code' => '211400',
                        'phone_code' => '0429',
                        'children' => [
                            ['name' => '连山区','code' => '211402','phone_code' => '0429'],
                            ['name' => '龙港区','code' => '211403','phone_code' => '0429'],
                            ['name' => '南票区','code' => '211404','phone_code' => '0429'],
                            ['name' => '绥中县','code' => '211421','phone_code' => '0429'],
                            ['name' => '建昌县','code' => '211422','phone_code' => '0429'],
                            ['name' => '兴城市','code' => '211481','phone_code' => '0429'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '吉林省',
                'code' => '220000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '长春市',
                        'code' => '220100',
                        'phone_code' => '0431',
                        'children' => [
                            ['name' => '南关区','code' => '220102','phone_code' => '0431'],
                            ['name' => '宽城区','code' => '220103','phone_code' => '0431'],
                            ['name' => '朝阳区','code' => '220104','phone_code' => '0431'],
                            ['name' => '二道区','code' => '220105','phone_code' => '0431'],
                            ['name' => '绿园区','code' => '220106','phone_code' => '0431'],
                            ['name' => '双阳区','code' => '220112','phone_code' => '0431'],
                            ['name' => '九台区','code' => '220113','phone_code' => '0431'],
                            ['name' => '农安县','code' => '220122','phone_code' => '0431'],
                            ['name' => '榆树市','code' => '220182','phone_code' => '0431'],
                            ['name' => '德惠市','code' => '220183','phone_code' => '0431'],
                        ]
                    ],
                    [
                        'name' => '吉林市',
                        'code' => '220200',
                        'phone_code' => '0432',
                        'children' => [
                            ['name' => '昌邑区','code' => '220202','phone_code' => '0432'],
                            ['name' => '龙潭区','code' => '220203','phone_code' => '0432'],
                            ['name' => '船营区','code' => '220204','phone_code' => '0432'],
                            ['name' => '丰满区','code' => '220211','phone_code' => '0432'],
                            ['name' => '永吉县','code' => '220221','phone_code' => '0432'],
                            ['name' => '蛟河市','code' => '220281','phone_code' => '0432'],
                            ['name' => '桦甸市','code' => '220282','phone_code' => '0432'],
                            ['name' => '舒兰市','code' => '220283','phone_code' => '0432'],
                            ['name' => '磐石市','code' => '220284','phone_code' => '0432'],
                        ]
                    ],
                    [
                        'name' => '四平市',
                        'code' => '220300',
                        'phone_code' => '0434',
                        'children' => [
                            ['name' => '铁西区','code' => '220302','phone_code' => '0434'],
                            ['name' => '铁东区','code' => '220303','phone_code' => '0434'],
                            ['name' => '梨树县','code' => '220322','phone_code' => '0434'],
                            ['name' => '伊通满族自治县','code' => '220323','phone_code' => '0434'],
                            ['name' => '公主岭市','code' => '220381','phone_code' => '0434'],
                            ['name' => '双辽市','code' => '220382','phone_code' => '0434'],
                        ]
                    ],
                    [
                        'name' => '辽源市',
                        'code' => '220400',
                        'phone_code' => '0437',
                        'children' => [
                            ['name' => '龙山区','code' => '220402','phone_code' => '0437'],
                            ['name' => '西安区','code' => '220403','phone_code' => '0437'],
                            ['name' => '东丰县','code' => '220421','phone_code' => '0437'],
                            ['name' => '东辽县','code' => '220422','phone_code' => '0437'],
                        ]
                    ],
                    [
                        'name' => '通化市',
                        'code' => '220500',
                        'phone_code' => '0435',
                        'children' => [
                            ['name' => '东昌区','code' => '220502','phone_code' => '0435'],
                            ['name' => '二道江区','code' => '220503','phone_code' => '0435'],
                            ['name' => '通化县','code' => '220521','phone_code' => '0435'],
                            ['name' => '辉南县','code' => '220523','phone_code' => '0435'],
                            ['name' => '柳河县','code' => '220524','phone_code' => '0435'],
                            ['name' => '梅河口市','code' => '220581','phone_code' => '0435'],
                            ['name' => '集安市','code' => '220582','phone_code' => '0435'],
                        ]
                    ],
                    [
                        'name' => '白山市',
                        'code' => '220600',
                        'phone_code' => '0439',
                        'children' => [
                            ['name' => '浑江区','code' => '220602','phone_code' => '0439'],
                            ['name' => '江源区','code' => '220605','phone_code' => '0439'],
                            ['name' => '抚松县','code' => '220621','phone_code' => '0439'],
                            ['name' => '靖宇县','code' => '220622','phone_code' => '0439'],
                            ['name' => '长白朝鲜族自治县','code' => '220623','phone_code' => '0439'],
                            ['name' => '临江市','code' => '220681','phone_code' => '0439'],
                        ]
                    ],
                    [
                        'name' => '松原市',
                        'code' => '220700',
                        'phone_code' => '0438',
                        'children' => [
                            ['name' => '宁江区','code' => '220702','phone_code' => '0438'],
                            ['name' => '前郭尔罗斯蒙古族自治县','code' => '220721','phone_code' => '0438'],
                            ['name' => '长岭县','code' => '220722','phone_code' => '0438'],
                            ['name' => '乾安县','code' => '220723','phone_code' => '0438'],
                            ['name' => '扶余市','code' => '220781','phone_code' => '0438'],
                        ]
                    ],
                    [
                        'name' => '白城市',
                        'code' => '220800',
                        'phone_code' => '0436',
                        'children' => [
                            ['name' => '洮北区','code' => '220802','phone_code' => '0436'],
                            ['name' => '镇赉县','code' => '220821','phone_code' => '0436'],
                            ['name' => '通榆县','code' => '220822','phone_code' => '0436'],
                            ['name' => '洮南市','code' => '220881','phone_code' => '0436'],
                            ['name' => '大安市','code' => '220882','phone_code' => '0436'],
                        ]
                    ],
                    [
                        'name' => '延边朝鲜族自治州',
                        'code' => '222400',
                        'phone_code' => '1433',
                        'children' => [
                            ['name' => '延吉市','code' => '222401','phone_code' => '1433'],
                            ['name' => '图们市','code' => '222402','phone_code' => '1433'],
                            ['name' => '敦化市','code' => '222403','phone_code' => '1433'],
                            ['name' => '珲春市','code' => '222404','phone_code' => '1433'],
                            ['name' => '龙井市','code' => '222405','phone_code' => '1433'],
                            ['name' => '和龙市','code' => '222406','phone_code' => '1433'],
                            ['name' => '汪清县','code' => '222424','phone_code' => '1433'],
                            ['name' => '安图县','code' => '222426','phone_code' => '1433'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '黑龙江省',
                'code' => '230000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '哈尔滨市',
                        'code' => '230100',
                        'phone_code' => '0451',
                        'children' => [
                            ['name' => '道里区','code' => '230102','phone_code' => '0451'],
                            ['name' => '南岗区','code' => '230103','phone_code' => '0451'],
                            ['name' => '道外区','code' => '230104','phone_code' => '0451'],
                            ['name' => '平房区','code' => '230108','phone_code' => '0451'],
                            ['name' => '松北区','code' => '230109','phone_code' => '0451'],
                            ['name' => '香坊区','code' => '230110','phone_code' => '0451'],
                            ['name' => '呼兰区','code' => '230111','phone_code' => '0451'],
                            ['name' => '阿城区','code' => '230112','phone_code' => '0451'],
                            ['name' => '双城区','code' => '230113','phone_code' => '0451'],
                            ['name' => '依兰县','code' => '230123','phone_code' => '0451'],
                            ['name' => '方正县','code' => '230124','phone_code' => '0451'],
                            ['name' => '宾县','code' => '230125','phone_code' => '0451'],
                            ['name' => '巴彦县','code' => '230126','phone_code' => '0451'],
                            ['name' => '木兰县','code' => '230127','phone_code' => '0451'],
                            ['name' => '通河县','code' => '230128','phone_code' => '0451'],
                            ['name' => '延寿县','code' => '230129','phone_code' => '0451'],
                            ['name' => '尚志市','code' => '230183','phone_code' => '0451'],
                            ['name' => '五常市','code' => '230184','phone_code' => '0451'],
                        ]
                    ],
                    [
                        'name' => '齐齐哈尔市',
                        'code' => '230200',
                        'phone_code' => '0452',
                        'children' => [
                            ['name' => '龙沙区','code' => '230202','phone_code' => '0452'],
                            ['name' => '建华区','code' => '230203','phone_code' => '0452'],
                            ['name' => '铁锋区','code' => '230204','phone_code' => '0452'],
                            ['name' => '昂昂溪区','code' => '230205','phone_code' => '0452'],
                            ['name' => '富拉尔基区','code' => '230206','phone_code' => '0452'],
                            ['name' => '碾子山区','code' => '230207','phone_code' => '0452'],
                            ['name' => '梅里斯达斡尔族区','code' => '230208','phone_code' => '0452'],
                            ['name' => '龙江县','code' => '230221','phone_code' => '0452'],
                            ['name' => '依安县','code' => '230223','phone_code' => '0452'],
                            ['name' => '泰来县','code' => '230224','phone_code' => '0452'],
                            ['name' => '甘南县','code' => '230225','phone_code' => '0452'],
                            ['name' => '富裕县','code' => '230227','phone_code' => '0452'],
                            ['name' => '克山县','code' => '230229','phone_code' => '0452'],
                            ['name' => '克东县','code' => '230230','phone_code' => '0452'],
                            ['name' => '拜泉县','code' => '230231','phone_code' => '0452'],
                            ['name' => '讷河市','code' => '230281','phone_code' => '0452'],
                        ]
                    ],
                    [
                        'name' => '鸡西市',
                        'code' => '230300',
                        'phone_code' => '0467',
                        'children' => [
                            ['name' => '鸡冠区','code' => '230302','phone_code' => '0467'],
                            ['name' => '恒山区','code' => '230303','phone_code' => '0467'],
                            ['name' => '滴道区','code' => '230304','phone_code' => '0467'],
                            ['name' => '梨树区','code' => '230305','phone_code' => '0467'],
                            ['name' => '城子河区','code' => '230306','phone_code' => '0467'],
                            ['name' => '麻山区','code' => '230307','phone_code' => '0467'],
                            ['name' => '鸡东县','code' => '230321','phone_code' => '0467'],
                            ['name' => '虎林市','code' => '230381','phone_code' => '0467'],
                            ['name' => '密山市','code' => '230382','phone_code' => '0467'],
                        ]
                    ],
                    [
                        'name' => '鹤岗市',
                        'code' => '230400',
                        'phone_code' => '0468',
                        'children' => [
                            ['name' => '向阳区','code' => '230402','phone_code' => '0468'],
                            ['name' => '工农区','code' => '230403','phone_code' => '0468'],
                            ['name' => '南山区','code' => '230404','phone_code' => '0468'],
                            ['name' => '兴安区','code' => '230405','phone_code' => '0468'],
                            ['name' => '东山区','code' => '230406','phone_code' => '0468'],
                            ['name' => '兴山区','code' => '230407','phone_code' => '0468'],
                            ['name' => '萝北县','code' => '230421','phone_code' => '0468'],
                            ['name' => '绥滨县','code' => '230422','phone_code' => '0468'],
                        ]
                    ],
                    [
                        'name' => '双鸭山市',
                        'code' => '230500',
                        'phone_code' => '0469',
                        'children' => [
                            ['name' => '尖山区','code' => '230502','phone_code' => '0469'],
                            ['name' => '岭东区','code' => '230503','phone_code' => '0469'],
                            ['name' => '四方台区','code' => '230505','phone_code' => '0469'],
                            ['name' => '宝山区','code' => '230506','phone_code' => '0469'],
                            ['name' => '集贤县','code' => '230521','phone_code' => '0469'],
                            ['name' => '友谊县','code' => '230522','phone_code' => '0469'],
                            ['name' => '宝清县','code' => '230523','phone_code' => '0469'],
                            ['name' => '饶河县','code' => '230524','phone_code' => '0469'],
                        ]
                    ],
                    [
                        'name' => '大庆市',
                        'code' => '230600',
                        'phone_code' => '0459',
                        'children' => [
                            ['name' => '萨尔图区','code' => '230602','phone_code' => '0459'],
                            ['name' => '龙凤区','code' => '230603','phone_code' => '0459'],
                            ['name' => '让胡路区','code' => '230604','phone_code' => '0459'],
                            ['name' => '红岗区','code' => '230605','phone_code' => '0459'],
                            ['name' => '大同区','code' => '230606','phone_code' => '0459'],
                            ['name' => '肇州县','code' => '230621','phone_code' => '0459'],
                            ['name' => '肇源县','code' => '230622','phone_code' => '0459'],
                            ['name' => '林甸县','code' => '230623','phone_code' => '0459'],
                            ['name' => '杜尔伯特蒙古族自治县','code' => '230624','phone_code' => '0459'],
                        ]
                    ],
                    [
                        'name' => '伊春市',
                        'code' => '230700',
                        'phone_code' => '0458',
                        'children' => [
                            ['name' => '伊春区','code' => '230702','phone_code' => '0458'],
                            ['name' => '南岔区','code' => '230703','phone_code' => '0458'],
                            ['name' => '友好区','code' => '230704','phone_code' => '0458'],
                            ['name' => '西林区','code' => '230705','phone_code' => '0458'],
                            ['name' => '翠峦区','code' => '230706','phone_code' => '0458'],
                            ['name' => '新青区','code' => '230707','phone_code' => '0458'],
                            ['name' => '美溪区','code' => '230708','phone_code' => '0458'],
                            ['name' => '金山屯区','code' => '230709','phone_code' => '0458'],
                            ['name' => '五营区','code' => '230710','phone_code' => '0458'],
                            ['name' => '乌马河区','code' => '230711','phone_code' => '0458'],
                            ['name' => '汤旺河区','code' => '230712','phone_code' => '0458'],
                            ['name' => '带岭区','code' => '230713','phone_code' => '0458'],
                            ['name' => '乌伊岭区','code' => '230714','phone_code' => '0458'],
                            ['name' => '红星区','code' => '230715','phone_code' => '0458'],
                            ['name' => '上甘岭区','code' => '230716','phone_code' => '0458'],
                            ['name' => '嘉荫县','code' => '230722','phone_code' => '0458'],
                            ['name' => '铁力市','code' => '230781','phone_code' => '0458'],
                        ]
                    ],
                    [
                        'name' => '佳木斯市',
                        'code' => '230800',
                        'phone_code' => '0454',
                        'children' => [
                            ['name' => '向阳区','code' => '230803','phone_code' => '0454'],
                            ['name' => '前进区','code' => '230804','phone_code' => '0454'],
                            ['name' => '东风区','code' => '230805','phone_code' => '0454'],
                            ['name' => '郊区','code' => '230811','phone_code' => '0454'],
                            ['name' => '桦南县','code' => '230822','phone_code' => '0454'],
                            ['name' => '桦川县','code' => '230826','phone_code' => '0454'],
                            ['name' => '汤原县','code' => '230828','phone_code' => '0454'],
                            ['name' => '同江市','code' => '230881','phone_code' => '0454'],
                            ['name' => '富锦市','code' => '230882','phone_code' => '0454'],
                            ['name' => '抚远市','code' => '230883','phone_code' => '0454'],
                        ]
                    ],
                    [
                        'name' => '七台河市',
                        'code' => '230900',
                        'phone_code' => '0464',
                        'children' => [
                            ['name' => '新兴区','code' => '230902','phone_code' => '0464'],
                            ['name' => '桃山区','code' => '230903','phone_code' => '0464'],
                            ['name' => '茄子河区','code' => '230904','phone_code' => '0464'],
                            ['name' => '勃利县','code' => '230921','phone_code' => '0464'],
                        ]
                    ],
                    [
                        'name' => '牡丹江市',
                        'code' => '231000',
                        'phone_code' => '0453',
                        'children' => [
                            ['name' => '东安区','code' => '231002','phone_code' => '0453'],
                            ['name' => '阳明区','code' => '231003','phone_code' => '0453'],
                            ['name' => '爱民区','code' => '231004','phone_code' => '0453'],
                            ['name' => '西安区','code' => '231005','phone_code' => '0453'],
                            ['name' => '林口县','code' => '231025','phone_code' => '0453'],
                            ['name' => '绥芬河市','code' => '231081','phone_code' => '0453'],
                            ['name' => '海林市','code' => '231083','phone_code' => '0453'],
                            ['name' => '宁安市','code' => '231084','phone_code' => '0453'],
                            ['name' => '穆棱市','code' => '231085','phone_code' => '0453'],
                            ['name' => '东宁市','code' => '231086','phone_code' => '0453'],
                        ]
                    ],
                    [
                        'name' => '黑河市',
                        'code' => '231100',
                        'phone_code' => '0456',
                        'children' => [
                            ['name' => '爱辉区','code' => '231102','phone_code' => '0456'],
                            ['name' => '嫩江县','code' => '231121','phone_code' => '0456'],
                            ['name' => '逊克县','code' => '231123','phone_code' => '0456'],
                            ['name' => '孙吴县','code' => '231124','phone_code' => '0456'],
                            ['name' => '北安市','code' => '231181','phone_code' => '0456'],
                            ['name' => '五大连池市','code' => '231182','phone_code' => '0456'],
                        ]
                    ],
                    [
                        'name' => '绥化市',
                        'code' => '231200',
                        'phone_code' => '0455',
                        'children' => [
                            ['name' => '北林区','code' => '231202','phone_code' => '0455'],
                            ['name' => '望奎县','code' => '231221','phone_code' => '0455'],
                            ['name' => '兰西县','code' => '231222','phone_code' => '0455'],
                            ['name' => '青冈县','code' => '231223','phone_code' => '0455'],
                            ['name' => '庆安县','code' => '231224','phone_code' => '0455'],
                            ['name' => '明水县','code' => '231225','phone_code' => '0455'],
                            ['name' => '绥棱县','code' => '231226','phone_code' => '0455'],
                            ['name' => '安达市','code' => '231281','phone_code' => '0455'],
                            ['name' => '肇东市','code' => '231282','phone_code' => '0455'],
                            ['name' => '海伦市','code' => '231283','phone_code' => '0455'],
                        ]
                    ],
                    [
                        'name' => '大兴安岭地区',
                        'code' => '232700',
                        'phone_code' => '0457',
                        'children' => [
                            ['name' => '加格达奇区','code' => '232701','phone_code' => '0457'],
                            ['name' => '呼玛县','code' => '232721','phone_code' => '0457'],
                            ['name' => '塔河县','code' => '232722','phone_code' => '0457'],
                            ['name' => '漠河县','code' => '232723','phone_code' => '0457'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '上海市',
                'code' => '310000',
                'phone_code' => '021',
                'children' => [
                    [
                        'name' => '上海城区',
                        'code' => '310100',
                        'phone_code' => '021',
                        'children' => [
                            ['name' => '黄浦区','code' => '310101','phone_code' => '021'],
                            ['name' => '徐汇区','code' => '310104','phone_code' => '021'],
                            ['name' => '长宁区','code' => '310105','phone_code' => '021'],
                            ['name' => '静安区','code' => '310106','phone_code' => '021'],
                            ['name' => '普陀区','code' => '310107','phone_code' => '021'],
                            ['name' => '虹口区','code' => '310109','phone_code' => '021'],
                            ['name' => '杨浦区','code' => '310110','phone_code' => '021'],
                            ['name' => '闵行区','code' => '310112','phone_code' => '021'],
                            ['name' => '宝山区','code' => '310113','phone_code' => '021'],
                            ['name' => '嘉定区','code' => '310114','phone_code' => '021'],
                            ['name' => '浦东新区','code' => '310115','phone_code' => '021'],
                            ['name' => '金山区','code' => '310116','phone_code' => '021'],
                            ['name' => '松江区','code' => '310117','phone_code' => '021'],
                            ['name' => '青浦区','code' => '310118','phone_code' => '021'],
                            ['name' => '奉贤区','code' => '310120','phone_code' => '021'],
                            ['name' => '崇明区','code' => '310151','phone_code' => '021'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '江苏省',
                'code' => '320000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '南京市',
                        'code' => '320100',
                        'phone_code' => '025',
                        'children' => [
                            ['name' => '玄武区','code' => '320102','phone_code' => '025'],
                            ['name' => '秦淮区','code' => '320104','phone_code' => '025'],
                            ['name' => '建邺区','code' => '320105','phone_code' => '025'],
                            ['name' => '鼓楼区','code' => '320106','phone_code' => '025'],
                            ['name' => '浦口区','code' => '320111','phone_code' => '025'],
                            ['name' => '栖霞区','code' => '320113','phone_code' => '025'],
                            ['name' => '雨花台区','code' => '320114','phone_code' => '025'],
                            ['name' => '江宁区','code' => '320115','phone_code' => '025'],
                            ['name' => '六合区','code' => '320116','phone_code' => '025'],
                            ['name' => '溧水区','code' => '320117','phone_code' => '025'],
                            ['name' => '高淳区','code' => '320118','phone_code' => '025'],
                        ]
                    ],
                    [
                        'name' => '无锡市',
                        'code' => '320200',
                        'phone_code' => '0510',
                        'children' => [
                            ['name' => '锡山区','code' => '320205','phone_code' => '0510'],
                            ['name' => '惠山区','code' => '320206','phone_code' => '0510'],
                            ['name' => '滨湖区','code' => '320211','phone_code' => '0510'],
                            ['name' => '梁溪区','code' => '320213','phone_code' => '0510'],
                            ['name' => '新吴区','code' => '320214','phone_code' => '0510'],
                            ['name' => '江阴市','code' => '320281','phone_code' => '0510'],
                            ['name' => '宜兴市','code' => '320282','phone_code' => '0510'],
                        ]
                    ],
                    [
                        'name' => '徐州市',
                        'code' => '320300',
                        'phone_code' => '0516',
                        'children' => [
                            ['name' => '鼓楼区','code' => '320302','phone_code' => '0516'],
                            ['name' => '云龙区','code' => '320303','phone_code' => '0516'],
                            ['name' => '贾汪区','code' => '320305','phone_code' => '0516'],
                            ['name' => '泉山区','code' => '320311','phone_code' => '0516'],
                            ['name' => '铜山区','code' => '320312','phone_code' => '0516'],
                            ['name' => '丰县','code' => '320321','phone_code' => '0516'],
                            ['name' => '沛县','code' => '320322','phone_code' => '0516'],
                            ['name' => '睢宁县','code' => '320324','phone_code' => '0516'],
                            ['name' => '新沂市','code' => '320381','phone_code' => '0516'],
                            ['name' => '邳州市','code' => '320382','phone_code' => '0516'],
                        ]
                    ],
                    [
                        'name' => '常州市',
                        'code' => '320400',
                        'phone_code' => '0519',
                        'children' => [
                            ['name' => '天宁区','code' => '320402','phone_code' => '0519'],
                            ['name' => '钟楼区','code' => '320404','phone_code' => '0519'],
                            ['name' => '新北区','code' => '320411','phone_code' => '0519'],
                            ['name' => '武进区','code' => '320412','phone_code' => '0519'],
                            ['name' => '金坛区','code' => '320413','phone_code' => '0519'],
                            ['name' => '溧阳市','code' => '320481','phone_code' => '0519'],
                        ]
                    ],
                    [
                        'name' => '苏州市',
                        'code' => '320500',
                        'phone_code' => '0512',
                        'children' => [
                            ['name' => '虎丘区','code' => '320505','phone_code' => '0512'],
                            ['name' => '吴中区','code' => '320506','phone_code' => '0512'],
                            ['name' => '相城区','code' => '320507','phone_code' => '0512'],
                            ['name' => '姑苏区','code' => '320508','phone_code' => '0512'],
                            ['name' => '吴江区','code' => '320509','phone_code' => '0512'],
                            ['name' => '常熟市','code' => '320581','phone_code' => '0512'],
                            ['name' => '张家港市','code' => '320582','phone_code' => '0512'],
                            ['name' => '昆山市','code' => '320583','phone_code' => '0512'],
                            ['name' => '太仓市','code' => '320585','phone_code' => '0512'],
                        ]
                    ],
                    [
                        'name' => '南通市',
                        'code' => '320600',
                        'phone_code' => '0513',
                        'children' => [
                            ['name' => '崇川区','code' => '320602','phone_code' => '0513'],
                            ['name' => '港闸区','code' => '320611','phone_code' => '0513'],
                            ['name' => '通州区','code' => '320612','phone_code' => '0513'],
                            ['name' => '海安县','code' => '320621','phone_code' => '0513'],
                            ['name' => '如东县','code' => '320623','phone_code' => '0513'],
                            ['name' => '启东市','code' => '320681','phone_code' => '0513'],
                            ['name' => '如皋市','code' => '320682','phone_code' => '0513'],
                            ['name' => '海门市','code' => '320684','phone_code' => '0513'],
                        ]
                    ],
                    [
                        'name' => '连云港市',
                        'code' => '320700',
                        'phone_code' => '0518',
                        'children' => [
                            ['name' => '连云区','code' => '320703','phone_code' => '0518'],
                            ['name' => '海州区','code' => '320706','phone_code' => '0518'],
                            ['name' => '赣榆区','code' => '320707','phone_code' => '0518'],
                            ['name' => '东海县','code' => '320722','phone_code' => '0518'],
                            ['name' => '灌云县','code' => '320723','phone_code' => '0518'],
                            ['name' => '灌南县','code' => '320724','phone_code' => '0518'],
                        ]
                    ],
                    [
                        'name' => '淮安市',
                        'code' => '320800',
                        'phone_code' => '0517',
                        'children' => [
                            ['name' => '清江浦区','code' => '320812','phone_code' => '0517'],
                            ['name' => '淮安区','code' => '320803','phone_code' => '0517'],
                            ['name' => '淮阴区','code' => '320804','phone_code' => '0517'],
                            ['name' => '洪泽区','code' => '320813','phone_code' => '0517'],
                            ['name' => '涟水县','code' => '320826','phone_code' => '0517'],
                            ['name' => '盱眙县','code' => '320830','phone_code' => '0517'],
                            ['name' => '金湖县','code' => '320831','phone_code' => '0517'],
                        ]
                    ],
                    [
                        'name' => '盐城市',
                        'code' => '320900',
                        'phone_code' => '0515',
                        'children' => [
                            ['name' => '亭湖区','code' => '320902','phone_code' => '0515'],
                            ['name' => '盐都区','code' => '320903','phone_code' => '0515'],
                            ['name' => '大丰区','code' => '320904','phone_code' => '0515'],
                            ['name' => '响水县','code' => '320921','phone_code' => '0515'],
                            ['name' => '滨海县','code' => '320922','phone_code' => '0515'],
                            ['name' => '阜宁县','code' => '320923','phone_code' => '0515'],
                            ['name' => '射阳县','code' => '320924','phone_code' => '0515'],
                            ['name' => '建湖县','code' => '320925','phone_code' => '0515'],
                            ['name' => '东台市','code' => '320981','phone_code' => '0515'],
                        ]
                    ],
                    [
                        'name' => '扬州市',
                        'code' => '321000',
                        'phone_code' => '0514',
                        'children' => [
                            ['name' => '广陵区','code' => '321002','phone_code' => '0514'],
                            ['name' => '邗江区','code' => '321003','phone_code' => '0514'],
                            ['name' => '江都区','code' => '321012','phone_code' => '0514'],
                            ['name' => '宝应县','code' => '321023','phone_code' => '0514'],
                            ['name' => '仪征市','code' => '321081','phone_code' => '0514'],
                            ['name' => '高邮市','code' => '321084','phone_code' => '0514'],
                        ]
                    ],
                    [
                        'name' => '镇江市',
                        'code' => '321100',
                        'phone_code' => '0511',
                        'children' => [
                            ['name' => '京口区','code' => '321102','phone_code' => '0511'],
                            ['name' => '润州区','code' => '321111','phone_code' => '0511'],
                            ['name' => '丹徒区','code' => '321112','phone_code' => '0511'],
                            ['name' => '丹阳市','code' => '321181','phone_code' => '0511'],
                            ['name' => '扬中市','code' => '321182','phone_code' => '0511'],
                            ['name' => '句容市','code' => '321183','phone_code' => '0511'],
                        ]
                    ],
                    [
                        'name' => '泰州市',
                        'code' => '321200',
                        'phone_code' => '0523',
                        'children' => [
                            ['name' => '海陵区','code' => '321202','phone_code' => '0523'],
                            ['name' => '高港区','code' => '321203','phone_code' => '0523'],
                            ['name' => '姜堰区','code' => '321204','phone_code' => '0523'],
                            ['name' => '兴化市','code' => '321281','phone_code' => '0523'],
                            ['name' => '靖江市','code' => '321282','phone_code' => '0523'],
                            ['name' => '泰兴市','code' => '321283','phone_code' => '0523'],
                        ]
                    ],
                    [
                        'name' => '宿迁市',
                        'code' => '321300',
                        'phone_code' => '0527',
                        'children' => [
                            ['name' => '宿城区','code' => '321302','phone_code' => '0527'],
                            ['name' => '宿豫区','code' => '321311','phone_code' => '0527'],
                            ['name' => '沭阳县','code' => '321322','phone_code' => '0527'],
                            ['name' => '泗阳县','code' => '321323','phone_code' => '0527'],
                            ['name' => '泗洪县','code' => '321324','phone_code' => '0527'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '浙江省',
                'code' => '330000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '杭州市',
                        'code' => '330100',
                        'phone_code' => '0571',
                        'children' => [
                            ['name' => '上城区','code' => '330102','phone_code' => '0571'],
                            ['name' => '下城区','code' => '330103','phone_code' => '0571'],
                            ['name' => '江干区','code' => '330104','phone_code' => '0571'],
                            ['name' => '拱墅区','code' => '330105','phone_code' => '0571'],
                            ['name' => '西湖区','code' => '330106','phone_code' => '0571'],
                            ['name' => '滨江区','code' => '330108','phone_code' => '0571'],
                            ['name' => '萧山区','code' => '330109','phone_code' => '0571'],
                            ['name' => '余杭区','code' => '330110','phone_code' => '0571'],
                            ['name' => '富阳区','code' => '330111','phone_code' => '0571'],
                            ['name' => '桐庐县','code' => '330122','phone_code' => '0571'],
                            ['name' => '淳安县','code' => '330127','phone_code' => '0571'],
                            ['name' => '建德市','code' => '330182','phone_code' => '0571'],
                            ['name' => '临安市','code' => '330185','phone_code' => '0571'],
                        ]
                    ],
                    [
                        'name' => '宁波市',
                        'code' => '330200',
                        'phone_code' => '0574',
                        'children' => [
                            ['name' => '海曙区','code' => '330203','phone_code' => '0574'],
                            ['name' => '江北区','code' => '330205','phone_code' => '0574'],
                            ['name' => '北仑区','code' => '330206','phone_code' => '0574'],
                            ['name' => '镇海区','code' => '330211','phone_code' => '0574'],
                            ['name' => '鄞州区','code' => '330212','phone_code' => '0574'],
                            ['name' => '象山县','code' => '330225','phone_code' => '0574'],
                            ['name' => '宁海县','code' => '330226','phone_code' => '0574'],
                            ['name' => '余姚市','code' => '330281','phone_code' => '0574'],
                            ['name' => '慈溪市','code' => '330282','phone_code' => '0574'],
                            ['name' => '奉化区','code' => '330213','phone_code' => '0574'],
                        ]
                    ],
                    [
                        'name' => '温州市',
                        'code' => '330300',
                        'phone_code' => '0577',
                        'children' => [
                            ['name' => '鹿城区','code' => '330302','phone_code' => '0577'],
                            ['name' => '龙湾区','code' => '330303','phone_code' => '0577'],
                            ['name' => '瓯海区','code' => '330304','phone_code' => '0577'],
                            ['name' => '洞头区','code' => '330305','phone_code' => '0577'],
                            ['name' => '永嘉县','code' => '330324','phone_code' => '0577'],
                            ['name' => '平阳县','code' => '330326','phone_code' => '0577'],
                            ['name' => '苍南县','code' => '330327','phone_code' => '0577'],
                            ['name' => '文成县','code' => '330328','phone_code' => '0577'],
                            ['name' => '泰顺县','code' => '330329','phone_code' => '0577'],
                            ['name' => '瑞安市','code' => '330381','phone_code' => '0577'],
                            ['name' => '乐清市','code' => '330382','phone_code' => '0577'],
                        ]
                    ],
                    [
                        'name' => '嘉兴市',
                        'code' => '330400',
                        'phone_code' => '0573',
                        'children' => [
                            ['name' => '南湖区','code' => '330402','phone_code' => '0573'],
                            ['name' => '秀洲区','code' => '330411','phone_code' => '0573'],
                            ['name' => '嘉善县','code' => '330421','phone_code' => '0573'],
                            ['name' => '海盐县','code' => '330424','phone_code' => '0573'],
                            ['name' => '海宁市','code' => '330481','phone_code' => '0573'],
                            ['name' => '平湖市','code' => '330482','phone_code' => '0573'],
                            ['name' => '桐乡市','code' => '330483','phone_code' => '0573'],
                        ]
                    ],
                    [
                        'name' => '湖州市',
                        'code' => '330500',
                        'phone_code' => '0572',
                        'children' => [
                            ['name' => '吴兴区','code' => '330502','phone_code' => '0572'],
                            ['name' => '南浔区','code' => '330503','phone_code' => '0572'],
                            ['name' => '德清县','code' => '330521','phone_code' => '0572'],
                            ['name' => '长兴县','code' => '330522','phone_code' => '0572'],
                            ['name' => '安吉县','code' => '330523','phone_code' => '0572'],
                        ]
                    ],
                    [
                        'name' => '绍兴市',
                        'code' => '330600',
                        'phone_code' => '0575',
                        'children' => [
                            ['name' => '越城区','code' => '330602','phone_code' => '0575'],
                            ['name' => '柯桥区','code' => '330603','phone_code' => '0575'],
                            ['name' => '上虞区','code' => '330604','phone_code' => '0575'],
                            ['name' => '新昌县','code' => '330624','phone_code' => '0575'],
                            ['name' => '诸暨市','code' => '330681','phone_code' => '0575'],
                            ['name' => '嵊州市','code' => '330683','phone_code' => '0575'],
                        ]
                    ],
                    [
                        'name' => '金华市',
                        'code' => '330700',
                        'phone_code' => '0579',
                        'children' => [
                            ['name' => '婺城区','code' => '330702','phone_code' => '0579'],
                            ['name' => '金东区','code' => '330703','phone_code' => '0579'],
                            ['name' => '武义县','code' => '330723','phone_code' => '0579'],
                            ['name' => '浦江县','code' => '330726','phone_code' => '0579'],
                            ['name' => '磐安县','code' => '330727','phone_code' => '0579'],
                            ['name' => '兰溪市','code' => '330781','phone_code' => '0579'],
                            ['name' => '义乌市','code' => '330782','phone_code' => '0579'],
                            ['name' => '东阳市','code' => '330783','phone_code' => '0579'],
                            ['name' => '永康市','code' => '330784','phone_code' => '0579'],
                        ]
                    ],
                    [
                        'name' => '衢州市',
                        'code' => '330800',
                        'phone_code' => '0570',
                        'children' => [
                            ['name' => '柯城区','code' => '330802','phone_code' => '0570'],
                            ['name' => '衢江区','code' => '330803','phone_code' => '0570'],
                            ['name' => '常山县','code' => '330822','phone_code' => '0570'],
                            ['name' => '开化县','code' => '330824','phone_code' => '0570'],
                            ['name' => '龙游县','code' => '330825','phone_code' => '0570'],
                            ['name' => '江山市','code' => '330881','phone_code' => '0570'],
                        ]
                    ],
                    [
                        'name' => '舟山市',
                        'code' => '330900',
                        'phone_code' => '0580',
                        'children' => [
                            ['name' => '定海区','code' => '330902','phone_code' => '0580'],
                            ['name' => '普陀区','code' => '330903','phone_code' => '0580'],
                            ['name' => '岱山县','code' => '330921','phone_code' => '0580'],
                            ['name' => '嵊泗县','code' => '330922','phone_code' => '0580'],
                        ]
                    ],
                    [
                        'name' => '台州市',
                        'code' => '331000',
                        'phone_code' => '0576',
                        'children' => [
                            ['name' => '椒江区','code' => '331002','phone_code' => '0576'],
                            ['name' => '黄岩区','code' => '331003','phone_code' => '0576'],
                            ['name' => '路桥区','code' => '331004','phone_code' => '0576'],
                            ['name' => '玉环市','code' => '331021','phone_code' => '0576'],
                            ['name' => '三门县','code' => '331022','phone_code' => '0576'],
                            ['name' => '天台县','code' => '331023','phone_code' => '0576'],
                            ['name' => '仙居县','code' => '331024','phone_code' => '0576'],
                            ['name' => '温岭市','code' => '331081','phone_code' => '0576'],
                            ['name' => '临海市','code' => '331082','phone_code' => '0576'],
                        ]
                    ],
                    [
                        'name' => '丽水市',
                        'code' => '331100',
                        'phone_code' => '0578',
                        'children' => [
                            ['name' => '莲都区','code' => '331102','phone_code' => '0578'],
                            ['name' => '青田县','code' => '331121','phone_code' => '0578'],
                            ['name' => '缙云县','code' => '331122','phone_code' => '0578'],
                            ['name' => '遂昌县','code' => '331123','phone_code' => '0578'],
                            ['name' => '松阳县','code' => '331124','phone_code' => '0578'],
                            ['name' => '云和县','code' => '331125','phone_code' => '0578'],
                            ['name' => '庆元县','code' => '331126','phone_code' => '0578'],
                            ['name' => '景宁畲族自治县','code' => '331127','phone_code' => '0578'],
                            ['name' => '龙泉市','code' => '331181','phone_code' => '0578'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '安徽省',
                'code' => '340000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '合肥市',
                        'code' => '340100',
                        'phone_code' => '0551',
                        'children' => [
                            ['name' => '瑶海区','code' => '340102','phone_code' => '0551'],
                            ['name' => '庐阳区','code' => '340103','phone_code' => '0551'],
                            ['name' => '蜀山区','code' => '340104','phone_code' => '0551'],
                            ['name' => '包河区','code' => '340111','phone_code' => '0551'],
                            ['name' => '长丰县','code' => '340121','phone_code' => '0551'],
                            ['name' => '肥东县','code' => '340122','phone_code' => '0551'],
                            ['name' => '肥西县','code' => '340123','phone_code' => '0551'],
                            ['name' => '庐江县','code' => '340124','phone_code' => '0551'],
                            ['name' => '巢湖市','code' => '340181','phone_code' => '0551'],
                        ]
                    ],
                    [
                        'name' => '芜湖市',
                        'code' => '340200',
                        'phone_code' => '0553',
                        'children' => [
                            ['name' => '镜湖区','code' => '340202','phone_code' => '0553'],
                            ['name' => '弋江区','code' => '340203','phone_code' => '0553'],
                            ['name' => '鸠江区','code' => '340207','phone_code' => '0553'],
                            ['name' => '三山区','code' => '340208','phone_code' => '0553'],
                            ['name' => '芜湖县','code' => '340221','phone_code' => '0553'],
                            ['name' => '繁昌县','code' => '340222','phone_code' => '0553'],
                            ['name' => '南陵县','code' => '340223','phone_code' => '0553'],
                            ['name' => '无为县','code' => '340225','phone_code' => '0553'],
                        ]
                    ],
                    [
                        'name' => '蚌埠市',
                        'code' => '340300',
                        'phone_code' => '0552',
                        'children' => [
                            ['name' => '龙子湖区','code' => '340302','phone_code' => '0552'],
                            ['name' => '蚌山区','code' => '340303','phone_code' => '0552'],
                            ['name' => '禹会区','code' => '340304','phone_code' => '0552'],
                            ['name' => '淮上区','code' => '340311','phone_code' => '0552'],
                            ['name' => '怀远县','code' => '340321','phone_code' => '0552'],
                            ['name' => '五河县','code' => '340322','phone_code' => '0552'],
                            ['name' => '固镇县','code' => '340323','phone_code' => '0552'],
                        ]
                    ],
                    [
                        'name' => '淮南市',
                        'code' => '340400',
                        'phone_code' => '0554',
                        'children' => [
                            ['name' => '大通区','code' => '340402','phone_code' => '0554'],
                            ['name' => '田家庵区','code' => '340403','phone_code' => '0554'],
                            ['name' => '谢家集区','code' => '340404','phone_code' => '0554'],
                            ['name' => '八公山区','code' => '340405','phone_code' => '0554'],
                            ['name' => '潘集区','code' => '340406','phone_code' => '0554'],
                            ['name' => '凤台县','code' => '340421','phone_code' => '0554'],
                            ['name' => '寿县','code' => '340422','phone_code' => '0554'],
                        ]
                    ],
                    [
                        'name' => '马鞍山市',
                        'code' => '340500',
                        'phone_code' => '0555',
                        'children' => [
                            ['name' => '花山区','code' => '340503','phone_code' => '0555'],
                            ['name' => '雨山区','code' => '340504','phone_code' => '0555'],
                            ['name' => '博望区','code' => '340506','phone_code' => '0555'],
                            ['name' => '当涂县','code' => '340521','phone_code' => '0555'],
                            ['name' => '含山县','code' => '340522','phone_code' => '0555'],
                            ['name' => '和县','code' => '340523','phone_code' => '0555'],
                        ]
                    ],
                    [
                        'name' => '淮北市',
                        'code' => '340600',
                        'phone_code' => '0561',
                        'children' => [
                            ['name' => '杜集区','code' => '340602','phone_code' => '0561'],
                            ['name' => '相山区','code' => '340603','phone_code' => '0561'],
                            ['name' => '烈山区','code' => '340604','phone_code' => '0561'],
                            ['name' => '濉溪县','code' => '340621','phone_code' => '0561'],
                        ]
                    ],
                    [
                        'name' => '铜陵市',
                        'code' => '340700',
                        'phone_code' => '0562',
                        'children' => [
                            ['name' => '铜官区','code' => '340705','phone_code' => '0562'],
                            ['name' => '义安区','code' => '340706','phone_code' => '0562'],
                            ['name' => '郊区','code' => '340711','phone_code' => '0562'],
                            ['name' => '枞阳县','code' => '340722','phone_code' => '0562'],
                        ]
                    ],
                    [
                        'name' => '安庆市',
                        'code' => '340800',
                        'phone_code' => '0556',
                        'children' => [
                            ['name' => '迎江区','code' => '340802','phone_code' => '0556'],
                            ['name' => '大观区','code' => '340803','phone_code' => '0556'],
                            ['name' => '宜秀区','code' => '340811','phone_code' => '0556'],
                            ['name' => '怀宁县','code' => '340822','phone_code' => '0556'],
                            ['name' => '潜山县','code' => '340824','phone_code' => '0556'],
                            ['name' => '太湖县','code' => '340825','phone_code' => '0556'],
                            ['name' => '宿松县','code' => '340826','phone_code' => '0556'],
                            ['name' => '望江县','code' => '340827','phone_code' => '0556'],
                            ['name' => '岳西县','code' => '340828','phone_code' => '0556'],
                            ['name' => '桐城市','code' => '340881','phone_code' => '0556'],
                        ]
                    ],
                    [
                        'name' => '黄山市',
                        'code' => '341000',
                        'phone_code' => '0559',
                        'children' => [
                            ['name' => '屯溪区','code' => '341002','phone_code' => '0559'],
                            ['name' => '黄山区','code' => '341003','phone_code' => '0559'],
                            ['name' => '徽州区','code' => '341004','phone_code' => '0559'],
                            ['name' => '歙县','code' => '341021','phone_code' => '0559'],
                            ['name' => '休宁县','code' => '341022','phone_code' => '0559'],
                            ['name' => '黟县','code' => '341023','phone_code' => '0559'],
                            ['name' => '祁门县','code' => '341024','phone_code' => '0559'],
                        ]
                    ],
                    [
                        'name' => '滁州市',
                        'code' => '341100',
                        'phone_code' => '0550',
                        'children' => [
                            ['name' => '琅琊区','code' => '341102','phone_code' => '0550'],
                            ['name' => '南谯区','code' => '341103','phone_code' => '0550'],
                            ['name' => '来安县','code' => '341122','phone_code' => '0550'],
                            ['name' => '全椒县','code' => '341124','phone_code' => '0550'],
                            ['name' => '定远县','code' => '341125','phone_code' => '0550'],
                            ['name' => '凤阳县','code' => '341126','phone_code' => '0550'],
                            ['name' => '天长市','code' => '341181','phone_code' => '0550'],
                            ['name' => '明光市','code' => '341182','phone_code' => '0550'],
                        ]
                    ],
                    [
                        'name' => '阜阳市',
                        'code' => '341200',
                        'phone_code' => '1558',
                        'children' => [
                            ['name' => '颍州区','code' => '341202','phone_code' => '1558'],
                            ['name' => '颍东区','code' => '341203','phone_code' => '1558'],
                            ['name' => '颍泉区','code' => '341204','phone_code' => '1558'],
                            ['name' => '临泉县','code' => '341221','phone_code' => '1558'],
                            ['name' => '太和县','code' => '341222','phone_code' => '1558'],
                            ['name' => '阜南县','code' => '341225','phone_code' => '1558'],
                            ['name' => '颍上县','code' => '341226','phone_code' => '1558'],
                            ['name' => '界首市','code' => '341282','phone_code' => '1558'],
                        ]
                    ],
                    [
                        'name' => '宿州市',
                        'code' => '341300',
                        'phone_code' => '0557',
                        'children' => [
                            ['name' => '埇桥区','code' => '341302','phone_code' => '0557'],
                            ['name' => '砀山县','code' => '341321','phone_code' => '0557'],
                            ['name' => '萧县','code' => '341322','phone_code' => '0557'],
                            ['name' => '灵璧县','code' => '341323','phone_code' => '0557'],
                            ['name' => '泗县','code' => '341324','phone_code' => '0557'],
                        ]
                    ],
                    [
                        'name' => '六安市',
                        'code' => '341500',
                        'phone_code' => '0564',
                        'children' => [
                            ['name' => '金安区','code' => '341502','phone_code' => '0564'],
                            ['name' => '裕安区','code' => '341503','phone_code' => '0564'],
                            ['name' => '叶集区','code' => '341504','phone_code' => '0564'],
                            ['name' => '霍邱县','code' => '341522','phone_code' => '0564'],
                            ['name' => '舒城县','code' => '341523','phone_code' => '0564'],
                            ['name' => '金寨县','code' => '341524','phone_code' => '0564'],
                            ['name' => '霍山县','code' => '341525','phone_code' => '0564'],
                        ]
                    ],
                    [
                        'name' => '亳州市',
                        'code' => '341600',
                        'phone_code' => '0558',
                        'children' => [
                            ['name' => '谯城区','code' => '341602','phone_code' => '0558'],
                            ['name' => '涡阳县','code' => '341621','phone_code' => '0558'],
                            ['name' => '蒙城县','code' => '341622','phone_code' => '0558'],
                            ['name' => '利辛县','code' => '341623','phone_code' => '0558'],
                        ]
                    ],
                    [
                        'name' => '池州市',
                        'code' => '341700',
                        'phone_code' => '0566',
                        'children' => [
                            ['name' => '贵池区','code' => '341702','phone_code' => '0566'],
                            ['name' => '东至县','code' => '341721','phone_code' => '0566'],
                            ['name' => '石台县','code' => '341722','phone_code' => '0566'],
                            ['name' => '青阳县','code' => '341723','phone_code' => '0566'],
                        ]
                    ],
                    [
                        'name' => '宣城市',
                        'code' => '341800',
                        'phone_code' => '0563',
                        'children' => [
                            ['name' => '宣州区','code' => '341802','phone_code' => '0563'],
                            ['name' => '郎溪县','code' => '341821','phone_code' => '0563'],
                            ['name' => '广德县','code' => '341822','phone_code' => '0563'],
                            ['name' => '泾县','code' => '341823','phone_code' => '0563'],
                            ['name' => '绩溪县','code' => '341824','phone_code' => '0563'],
                            ['name' => '旌德县','code' => '341825','phone_code' => '0563'],
                            ['name' => '宁国市','code' => '341881','phone_code' => '0563'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '福建省',
                'code' => '350000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '福州市',
                        'code' => '350100',
                        'phone_code' => '0591',
                        'children' => [
                            ['name' => '鼓楼区','code' => '350102','phone_code' => '0591'],
                            ['name' => '台江区','code' => '350103','phone_code' => '0591'],
                            ['name' => '仓山区','code' => '350104','phone_code' => '0591'],
                            ['name' => '马尾区','code' => '350105','phone_code' => '0591'],
                            ['name' => '晋安区','code' => '350111','phone_code' => '0591'],
                            ['name' => '闽侯县','code' => '350121','phone_code' => '0591'],
                            ['name' => '连江县','code' => '350122','phone_code' => '0591'],
                            ['name' => '罗源县','code' => '350123','phone_code' => '0591'],
                            ['name' => '闽清县','code' => '350124','phone_code' => '0591'],
                            ['name' => '永泰县','code' => '350125','phone_code' => '0591'],
                            ['name' => '平潭县','code' => '350128','phone_code' => '0591'],
                            ['name' => '福清市','code' => '350181','phone_code' => '0591'],
                            ['name' => '长乐市','code' => '350182','phone_code' => '0591'],
                        ]
                    ],
                    [
                        'name' => '厦门市',
                        'code' => '350200',
                        'phone_code' => '0592',
                        'children' => [
                            ['name' => '思明区','code' => '350203','phone_code' => '0592'],
                            ['name' => '海沧区','code' => '350205','phone_code' => '0592'],
                            ['name' => '湖里区','code' => '350206','phone_code' => '0592'],
                            ['name' => '集美区','code' => '350211','phone_code' => '0592'],
                            ['name' => '同安区','code' => '350212','phone_code' => '0592'],
                            ['name' => '翔安区','code' => '350213','phone_code' => '0592'],
                        ]
                    ],
                    [
                        'name' => '莆田市',
                        'code' => '350300',
                        'phone_code' => '0594',
                        'children' => [
                            ['name' => '城厢区','code' => '350302','phone_code' => '0594'],
                            ['name' => '涵江区','code' => '350303','phone_code' => '0594'],
                            ['name' => '荔城区','code' => '350304','phone_code' => '0594'],
                            ['name' => '秀屿区','code' => '350305','phone_code' => '0594'],
                            ['name' => '仙游县','code' => '350322','phone_code' => '0594'],
                        ]
                    ],
                    [
                        'name' => '三明市',
                        'code' => '350400',
                        'phone_code' => '0598',
                        'children' => [
                            ['name' => '梅列区','code' => '350402','phone_code' => '0598'],
                            ['name' => '三元区','code' => '350403','phone_code' => '0598'],
                            ['name' => '明溪县','code' => '350421','phone_code' => '0598'],
                            ['name' => '清流县','code' => '350423','phone_code' => '0598'],
                            ['name' => '宁化县','code' => '350424','phone_code' => '0598'],
                            ['name' => '大田县','code' => '350425','phone_code' => '0598'],
                            ['name' => '尤溪县','code' => '350426','phone_code' => '0598'],
                            ['name' => '沙县','code' => '350427','phone_code' => '0598'],
                            ['name' => '将乐县','code' => '350428','phone_code' => '0598'],
                            ['name' => '泰宁县','code' => '350429','phone_code' => '0598'],
                            ['name' => '建宁县','code' => '350430','phone_code' => '0598'],
                            ['name' => '永安市','code' => '350481','phone_code' => '0598'],
                        ]
                    ],
                    [
                        'name' => '泉州市',
                        'code' => '350500',
                        'phone_code' => '0595',
                        'children' => [
                            ['name' => '鲤城区','code' => '350502','phone_code' => '0595'],
                            ['name' => '丰泽区','code' => '350503','phone_code' => '0595'],
                            ['name' => '洛江区','code' => '350504','phone_code' => '0595'],
                            ['name' => '泉港区','code' => '350505','phone_code' => '0595'],
                            ['name' => '惠安县','code' => '350521','phone_code' => '0595'],
                            ['name' => '安溪县','code' => '350524','phone_code' => '0595'],
                            ['name' => '永春县','code' => '350525','phone_code' => '0595'],
                            ['name' => '德化县','code' => '350526','phone_code' => '0595'],
                            ['name' => '金门县','code' => '350527','phone_code' => '0595'],
                            ['name' => '石狮市','code' => '350581','phone_code' => '0595'],
                            ['name' => '晋江市','code' => '350582','phone_code' => '0595'],
                            ['name' => '南安市','code' => '350583','phone_code' => '0595'],
                        ]
                    ],
                    [
                        'name' => '漳州市',
                        'code' => '350600',
                        'phone_code' => '0596',
                        'children' => [
                            ['name' => '芗城区','code' => '350602','phone_code' => '0596'],
                            ['name' => '龙文区','code' => '350603','phone_code' => '0596'],
                            ['name' => '云霄县','code' => '350622','phone_code' => '0596'],
                            ['name' => '漳浦县','code' => '350623','phone_code' => '0596'],
                            ['name' => '诏安县','code' => '350624','phone_code' => '0596'],
                            ['name' => '长泰县','code' => '350625','phone_code' => '0596'],
                            ['name' => '东山县','code' => '350626','phone_code' => '0596'],
                            ['name' => '南靖县','code' => '350627','phone_code' => '0596'],
                            ['name' => '平和县','code' => '350628','phone_code' => '0596'],
                            ['name' => '华安县','code' => '350629','phone_code' => '0596'],
                            ['name' => '龙海市','code' => '350681','phone_code' => '0596'],
                        ]
                    ],
                    [
                        'name' => '南平市',
                        'code' => '350700',
                        'phone_code' => '0599',
                        'children' => [
                            ['name' => '延平区','code' => '350702','phone_code' => '0599'],
                            ['name' => '建阳区','code' => '350703','phone_code' => '0599'],
                            ['name' => '顺昌县','code' => '350721','phone_code' => '0599'],
                            ['name' => '浦城县','code' => '350722','phone_code' => '0599'],
                            ['name' => '光泽县','code' => '350723','phone_code' => '0599'],
                            ['name' => '松溪县','code' => '350724','phone_code' => '0599'],
                            ['name' => '政和县','code' => '350725','phone_code' => '0599'],
                            ['name' => '邵武市','code' => '350781','phone_code' => '0599'],
                            ['name' => '武夷山市','code' => '350782','phone_code' => '0599'],
                            ['name' => '建瓯市','code' => '350783','phone_code' => '0599'],
                        ]
                    ],
                    [
                        'name' => '龙岩市',
                        'code' => '350800',
                        'phone_code' => '0597',
                        'children' => [
                            ['name' => '新罗区','code' => '350802','phone_code' => '0597'],
                            ['name' => '永定区','code' => '350803','phone_code' => '0597'],
                            ['name' => '长汀县','code' => '350821','phone_code' => '0597'],
                            ['name' => '上杭县','code' => '350823','phone_code' => '0597'],
                            ['name' => '武平县','code' => '350824','phone_code' => '0597'],
                            ['name' => '连城县','code' => '350825','phone_code' => '0597'],
                            ['name' => '漳平市','code' => '350881','phone_code' => '0597'],
                        ]
                    ],
                    [
                        'name' => '宁德市',
                        'code' => '350900',
                        'phone_code' => '0593',
                        'children' => [
                            ['name' => '蕉城区','code' => '350902','phone_code' => '0593'],
                            ['name' => '霞浦县','code' => '350921','phone_code' => '0593'],
                            ['name' => '古田县','code' => '350922','phone_code' => '0593'],
                            ['name' => '屏南县','code' => '350923','phone_code' => '0593'],
                            ['name' => '寿宁县','code' => '350924','phone_code' => '0593'],
                            ['name' => '周宁县','code' => '350925','phone_code' => '0593'],
                            ['name' => '柘荣县','code' => '350926','phone_code' => '0593'],
                            ['name' => '福安市','code' => '350981','phone_code' => '0593'],
                            ['name' => '福鼎市','code' => '350982','phone_code' => '0593'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '江西省',
                'code' => '360000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '南昌市',
                        'code' => '360100',
                        'phone_code' => '0791',
                        'children' => [
                            ['name' => '东湖区','code' => '360102','phone_code' => '0791'],
                            ['name' => '西湖区','code' => '360103','phone_code' => '0791'],
                            ['name' => '青云谱区','code' => '360104','phone_code' => '0791'],
                            ['name' => '湾里区','code' => '360105','phone_code' => '0791'],
                            ['name' => '青山湖区','code' => '360111','phone_code' => '0791'],
                            ['name' => '新建区','code' => '360112','phone_code' => '0791'],
                            ['name' => '南昌县','code' => '360121','phone_code' => '0791'],
                            ['name' => '安义县','code' => '360123','phone_code' => '0791'],
                            ['name' => '进贤县','code' => '360124','phone_code' => '0791'],
                        ]
                    ],
                    [
                        'name' => '景德镇市',
                        'code' => '360200',
                        'phone_code' => '0798',
                        'children' => [
                            ['name' => '昌江区','code' => '360202','phone_code' => '0798'],
                            ['name' => '珠山区','code' => '360203','phone_code' => '0798'],
                            ['name' => '浮梁县','code' => '360222','phone_code' => '0798'],
                            ['name' => '乐平市','code' => '360281','phone_code' => '0798'],
                        ]
                    ],
                    [
                        'name' => '萍乡市',
                        'code' => '360300',
                        'phone_code' => '0799',
                        'children' => [
                            ['name' => '安源区','code' => '360302','phone_code' => '0799'],
                            ['name' => '湘东区','code' => '360313','phone_code' => '0799'],
                            ['name' => '莲花县','code' => '360321','phone_code' => '0799'],
                            ['name' => '上栗县','code' => '360322','phone_code' => '0799'],
                            ['name' => '芦溪县','code' => '360323','phone_code' => '0799'],
                        ]
                    ],
                    [
                        'name' => '九江市',
                        'code' => '360400',
                        'phone_code' => '0792',
                        'children' => [
                            ['name' => '濂溪区','code' => '360402','phone_code' => '0792'],
                            ['name' => '浔阳区','code' => '360403','phone_code' => '0792'],
                            ['name' => '九江县','code' => '360421','phone_code' => '0792'],
                            ['name' => '武宁县','code' => '360423','phone_code' => '0792'],
                            ['name' => '修水县','code' => '360424','phone_code' => '0792'],
                            ['name' => '永修县','code' => '360425','phone_code' => '0792'],
                            ['name' => '德安县','code' => '360426','phone_code' => '0792'],
                            ['name' => '庐山市','code' => '360483','phone_code' => '0792'],
                            ['name' => '都昌县','code' => '360428','phone_code' => '0792'],
                            ['name' => '湖口县','code' => '360429','phone_code' => '0792'],
                            ['name' => '彭泽县','code' => '360430','phone_code' => '0792'],
                            ['name' => '瑞昌市','code' => '360481','phone_code' => '0792'],
                            ['name' => '共青城市','code' => '360482','phone_code' => '0792'],
                        ]
                    ],
                    [
                        'name' => '新余市',
                        'code' => '360500',
                        'phone_code' => '0790',
                        'children' => [
                            ['name' => '渝水区','code' => '360502','phone_code' => '0790'],
                            ['name' => '分宜县','code' => '360521','phone_code' => '0790'],
                        ]
                    ],
                    [
                        'name' => '鹰潭市',
                        'code' => '360600',
                        'phone_code' => '0701',
                        'children' => [
                            ['name' => '月湖区','code' => '360602','phone_code' => '0701'],
                            ['name' => '余江县','code' => '360622','phone_code' => '0701'],
                            ['name' => '贵溪市','code' => '360681','phone_code' => '0701'],
                        ]
                    ],
                    [
                        'name' => '赣州市',
                        'code' => '360700',
                        'phone_code' => '0797',
                        'children' => [
                            ['name' => '章贡区','code' => '360702','phone_code' => '0797'],
                            ['name' => '南康区','code' => '360703','phone_code' => '0797'],
                            ['name' => '赣县区','code' => '360704','phone_code' => '0797'],
                            ['name' => '信丰县','code' => '360722','phone_code' => '0797'],
                            ['name' => '大余县','code' => '360723','phone_code' => '0797'],
                            ['name' => '上犹县','code' => '360724','phone_code' => '0797'],
                            ['name' => '崇义县','code' => '360725','phone_code' => '0797'],
                            ['name' => '安远县','code' => '360726','phone_code' => '0797'],
                            ['name' => '龙南县','code' => '360727','phone_code' => '0797'],
                            ['name' => '定南县','code' => '360728','phone_code' => '0797'],
                            ['name' => '全南县','code' => '360729','phone_code' => '0797'],
                            ['name' => '宁都县','code' => '360730','phone_code' => '0797'],
                            ['name' => '于都县','code' => '360731','phone_code' => '0797'],
                            ['name' => '兴国县','code' => '360732','phone_code' => '0797'],
                            ['name' => '会昌县','code' => '360733','phone_code' => '0797'],
                            ['name' => '寻乌县','code' => '360734','phone_code' => '0797'],
                            ['name' => '石城县','code' => '360735','phone_code' => '0797'],
                            ['name' => '瑞金市','code' => '360781','phone_code' => '0797'],
                        ]
                    ],
                    [
                        'name' => '吉安市',
                        'code' => '360800',
                        'phone_code' => '0796',
                        'children' => [
                            ['name' => '吉州区','code' => '360802','phone_code' => '0796'],
                            ['name' => '青原区','code' => '360803','phone_code' => '0796'],
                            ['name' => '吉安县','code' => '360821','phone_code' => '0796'],
                            ['name' => '吉水县','code' => '360822','phone_code' => '0796'],
                            ['name' => '峡江县','code' => '360823','phone_code' => '0796'],
                            ['name' => '新干县','code' => '360824','phone_code' => '0796'],
                            ['name' => '永丰县','code' => '360825','phone_code' => '0796'],
                            ['name' => '泰和县','code' => '360826','phone_code' => '0796'],
                            ['name' => '遂川县','code' => '360827','phone_code' => '0796'],
                            ['name' => '万安县','code' => '360828','phone_code' => '0796'],
                            ['name' => '安福县','code' => '360829','phone_code' => '0796'],
                            ['name' => '永新县','code' => '360830','phone_code' => '0796'],
                            ['name' => '井冈山市','code' => '360881','phone_code' => '0796'],
                        ]
                    ],
                    [
                        'name' => '宜春市',
                        'code' => '360900',
                        'phone_code' => '0795',
                        'children' => [
                            ['name' => '袁州区','code' => '360902','phone_code' => '0795'],
                            ['name' => '奉新县','code' => '360921','phone_code' => '0795'],
                            ['name' => '万载县','code' => '360922','phone_code' => '0795'],
                            ['name' => '上高县','code' => '360923','phone_code' => '0795'],
                            ['name' => '宜丰县','code' => '360924','phone_code' => '0795'],
                            ['name' => '靖安县','code' => '360925','phone_code' => '0795'],
                            ['name' => '铜鼓县','code' => '360926','phone_code' => '0795'],
                            ['name' => '丰城市','code' => '360981','phone_code' => '0795'],
                            ['name' => '樟树市','code' => '360982','phone_code' => '0795'],
                            ['name' => '高安市','code' => '360983','phone_code' => '0795'],
                        ]
                    ],
                    [
                        'name' => '抚州市',
                        'code' => '361000',
                        'phone_code' => '0794',
                        'children' => [
                            ['name' => '临川区','code' => '361002','phone_code' => '0794'],
                            ['name' => '南城县','code' => '361021','phone_code' => '0794'],
                            ['name' => '黎川县','code' => '361022','phone_code' => '0794'],
                            ['name' => '南丰县','code' => '361023','phone_code' => '0794'],
                            ['name' => '崇仁县','code' => '361024','phone_code' => '0794'],
                            ['name' => '乐安县','code' => '361025','phone_code' => '0794'],
                            ['name' => '宜黄县','code' => '361026','phone_code' => '0794'],
                            ['name' => '金溪县','code' => '361027','phone_code' => '0794'],
                            ['name' => '资溪县','code' => '361028','phone_code' => '0794'],
                            ['name' => '东乡区','code' => '361003','phone_code' => '0794'],
                            ['name' => '广昌县','code' => '361030','phone_code' => '0794'],
                        ]
                    ],
                    [
                        'name' => '上饶市',
                        'code' => '361100',
                        'phone_code' => '0793',
                        'children' => [
                            ['name' => '信州区','code' => '361102','phone_code' => '0793'],
                            ['name' => '广丰区','code' => '361103','phone_code' => '0793'],
                            ['name' => '上饶县','code' => '361121','phone_code' => '0793'],
                            ['name' => '玉山县','code' => '361123','phone_code' => '0793'],
                            ['name' => '铅山县','code' => '361124','phone_code' => '0793'],
                            ['name' => '横峰县','code' => '361125','phone_code' => '0793'],
                            ['name' => '弋阳县','code' => '361126','phone_code' => '0793'],
                            ['name' => '余干县','code' => '361127','phone_code' => '0793'],
                            ['name' => '鄱阳县','code' => '361128','phone_code' => '0793'],
                            ['name' => '万年县','code' => '361129','phone_code' => '0793'],
                            ['name' => '婺源县','code' => '361130','phone_code' => '0793'],
                            ['name' => '德兴市','code' => '361181','phone_code' => '0793'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '山东省',
                'code' => '370000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '济南市',
                        'code' => '370100',
                        'phone_code' => '0531',
                        'children' => [
                            ['name' => '历下区','code' => '370102','phone_code' => '0531'],
                            ['name' => '市中区','code' => '370103','phone_code' => '0531'],
                            ['name' => '槐荫区','code' => '370104','phone_code' => '0531'],
                            ['name' => '天桥区','code' => '370105','phone_code' => '0531'],
                            ['name' => '历城区','code' => '370112','phone_code' => '0531'],
                            ['name' => '长清区','code' => '370113','phone_code' => '0531'],
                            ['name' => '平阴县','code' => '370124','phone_code' => '0531'],
                            ['name' => '济阳县','code' => '370125','phone_code' => '0531'],
                            ['name' => '商河县','code' => '370126','phone_code' => '0531'],
                            ['name' => '章丘区','code' => '370114','phone_code' => '0531'],
                        ]
                    ],
                    [
                        'name' => '青岛市',
                        'code' => '370200',
                        'phone_code' => '0532',
                        'children' => [
                            ['name' => '市南区','code' => '370202','phone_code' => '0532'],
                            ['name' => '市北区','code' => '370203','phone_code' => '0532'],
                            ['name' => '黄岛区','code' => '370211','phone_code' => '0532'],
                            ['name' => '崂山区','code' => '370212','phone_code' => '0532'],
                            ['name' => '李沧区','code' => '370213','phone_code' => '0532'],
                            ['name' => '城阳区','code' => '370214','phone_code' => '0532'],
                            ['name' => '胶州市','code' => '370281','phone_code' => '0532'],
                            ['name' => '即墨市','code' => '370282','phone_code' => '0532'],
                            ['name' => '平度市','code' => '370283','phone_code' => '0532'],
                            ['name' => '莱西市','code' => '370285','phone_code' => '0532'],
                        ]
                    ],
                    [
                        'name' => '淄博市',
                        'code' => '370300',
                        'phone_code' => '0533',
                        'children' => [
                            ['name' => '淄川区','code' => '370302','phone_code' => '0533'],
                            ['name' => '张店区','code' => '370303','phone_code' => '0533'],
                            ['name' => '博山区','code' => '370304','phone_code' => '0533'],
                            ['name' => '临淄区','code' => '370305','phone_code' => '0533'],
                            ['name' => '周村区','code' => '370306','phone_code' => '0533'],
                            ['name' => '桓台县','code' => '370321','phone_code' => '0533'],
                            ['name' => '高青县','code' => '370322','phone_code' => '0533'],
                            ['name' => '沂源县','code' => '370323','phone_code' => '0533'],
                        ]
                    ],
                    [
                        'name' => '枣庄市',
                        'code' => '370400',
                        'phone_code' => '0632',
                        'children' => [
                            ['name' => '市中区','code' => '370402','phone_code' => '0632'],
                            ['name' => '薛城区','code' => '370403','phone_code' => '0632'],
                            ['name' => '峄城区','code' => '370404','phone_code' => '0632'],
                            ['name' => '台儿庄区','code' => '370405','phone_code' => '0632'],
                            ['name' => '山亭区','code' => '370406','phone_code' => '0632'],
                            ['name' => '滕州市','code' => '370481','phone_code' => '0632'],
                        ]
                    ],
                    [
                        'name' => '东营市',
                        'code' => '370500',
                        'phone_code' => '0546',
                        'children' => [
                            ['name' => '东营区','code' => '370502','phone_code' => '0546'],
                            ['name' => '河口区','code' => '370503','phone_code' => '0546'],
                            ['name' => '垦利区','code' => '370505','phone_code' => '0546'],
                            ['name' => '利津县','code' => '370522','phone_code' => '0546'],
                            ['name' => '广饶县','code' => '370523','phone_code' => '0546'],
                        ]
                    ],
                    [
                        'name' => '烟台市',
                        'code' => '370600',
                        'phone_code' => '0535',
                        'children' => [
                            ['name' => '芝罘区','code' => '370602','phone_code' => '0535'],
                            ['name' => '福山区','code' => '370611','phone_code' => '0535'],
                            ['name' => '牟平区','code' => '370612','phone_code' => '0535'],
                            ['name' => '莱山区','code' => '370613','phone_code' => '0535'],
                            ['name' => '长岛县','code' => '370634','phone_code' => '0535'],
                            ['name' => '龙口市','code' => '370681','phone_code' => '0535'],
                            ['name' => '莱阳市','code' => '370682','phone_code' => '0535'],
                            ['name' => '莱州市','code' => '370683','phone_code' => '0535'],
                            ['name' => '蓬莱市','code' => '370684','phone_code' => '0535'],
                            ['name' => '招远市','code' => '370685','phone_code' => '0535'],
                            ['name' => '栖霞市','code' => '370686','phone_code' => '0535'],
                            ['name' => '海阳市','code' => '370687','phone_code' => '0535'],
                        ]
                    ],
                    [
                        'name' => '潍坊市',
                        'code' => '370700',
                        'phone_code' => '0536',
                        'children' => [
                            ['name' => '潍城区','code' => '370702','phone_code' => '0536'],
                            ['name' => '寒亭区','code' => '370703','phone_code' => '0536'],
                            ['name' => '坊子区','code' => '370704','phone_code' => '0536'],
                            ['name' => '奎文区','code' => '370705','phone_code' => '0536'],
                            ['name' => '临朐县','code' => '370724','phone_code' => '0536'],
                            ['name' => '昌乐县','code' => '370725','phone_code' => '0536'],
                            ['name' => '青州市','code' => '370781','phone_code' => '0536'],
                            ['name' => '诸城市','code' => '370782','phone_code' => '0536'],
                            ['name' => '寿光市','code' => '370783','phone_code' => '0536'],
                            ['name' => '安丘市','code' => '370784','phone_code' => '0536'],
                            ['name' => '高密市','code' => '370785','phone_code' => '0536'],
                            ['name' => '昌邑市','code' => '370786','phone_code' => '0536'],
                        ]
                    ],
                    [
                        'name' => '济宁市',
                        'code' => '370800',
                        'phone_code' => '0537',
                        'children' => [
                            ['name' => '任城区','code' => '370811','phone_code' => '0537'],
                            ['name' => '兖州区','code' => '370812','phone_code' => '0537'],
                            ['name' => '微山县','code' => '370826','phone_code' => '0537'],
                            ['name' => '鱼台县','code' => '370827','phone_code' => '0537'],
                            ['name' => '金乡县','code' => '370828','phone_code' => '0537'],
                            ['name' => '嘉祥县','code' => '370829','phone_code' => '0537'],
                            ['name' => '汶上县','code' => '370830','phone_code' => '0537'],
                            ['name' => '泗水县','code' => '370831','phone_code' => '0537'],
                            ['name' => '梁山县','code' => '370832','phone_code' => '0537'],
                            ['name' => '曲阜市','code' => '370881','phone_code' => '0537'],
                            ['name' => '邹城市','code' => '370883','phone_code' => '0537'],
                        ]
                    ],
                    [
                        'name' => '泰安市',
                        'code' => '370900',
                        'phone_code' => '0538',
                        'children' => [
                            ['name' => '泰山区','code' => '370902','phone_code' => '0538'],
                            ['name' => '岱岳区','code' => '370911','phone_code' => '0538'],
                            ['name' => '宁阳县','code' => '370921','phone_code' => '0538'],
                            ['name' => '东平县','code' => '370923','phone_code' => '0538'],
                            ['name' => '新泰市','code' => '370982','phone_code' => '0538'],
                            ['name' => '肥城市','code' => '370983','phone_code' => '0538'],
                        ]
                    ],
                    [
                        'name' => '威海市',
                        'code' => '371000',
                        'phone_code' => '0631',
                        'children' => [
                            ['name' => '环翠区','code' => '371002','phone_code' => '0631'],
                            ['name' => '文登区','code' => '371003','phone_code' => '0631'],
                            ['name' => '荣成市','code' => '371082','phone_code' => '0631'],
                            ['name' => '乳山市','code' => '371083','phone_code' => '0631'],
                        ]
                    ],
                    [
                        'name' => '日照市',
                        'code' => '371100',
                        'phone_code' => '0633',
                        'children' => [
                            ['name' => '东港区','code' => '371102','phone_code' => '0633'],
                            ['name' => '岚山区','code' => '371103','phone_code' => '0633'],
                            ['name' => '五莲县','code' => '371121','phone_code' => '0633'],
                            ['name' => '莒县','code' => '371122','phone_code' => '0633'],
                        ]
                    ],
                    [
                        'name' => '莱芜市',
                        'code' => '371200',
                        'phone_code' => '0634',
                        'children' => [
                            ['name' => '莱城区','code' => '371202','phone_code' => '0634'],
                            ['name' => '钢城区','code' => '371203','phone_code' => '0634'],
                        ]
                    ],
                    [
                        'name' => '临沂市',
                        'code' => '371300',
                        'phone_code' => '0539',
                        'children' => [
                            ['name' => '兰山区','code' => '371302','phone_code' => '0539'],
                            ['name' => '罗庄区','code' => '371311','phone_code' => '0539'],
                            ['name' => '河东区','code' => '371312','phone_code' => '0539'],
                            ['name' => '沂南县','code' => '371321','phone_code' => '0539'],
                            ['name' => '郯城县','code' => '371322','phone_code' => '0539'],
                            ['name' => '沂水县','code' => '371323','phone_code' => '0539'],
                            ['name' => '兰陵县','code' => '371324','phone_code' => '0539'],
                            ['name' => '费县','code' => '371325','phone_code' => '0539'],
                            ['name' => '平邑县','code' => '371326','phone_code' => '0539'],
                            ['name' => '莒南县','code' => '371327','phone_code' => '0539'],
                            ['name' => '蒙阴县','code' => '371328','phone_code' => '0539'],
                            ['name' => '临沭县','code' => '371329','phone_code' => '0539'],
                        ]
                    ],
                    [
                        'name' => '德州市',
                        'code' => '371400',
                        'phone_code' => '0534',
                        'children' => [
                            ['name' => '德城区','code' => '371402','phone_code' => '0534'],
                            ['name' => '陵城区','code' => '371403','phone_code' => '0534'],
                            ['name' => '宁津县','code' => '371422','phone_code' => '0534'],
                            ['name' => '庆云县','code' => '371423','phone_code' => '0534'],
                            ['name' => '临邑县','code' => '371424','phone_code' => '0534'],
                            ['name' => '齐河县','code' => '371425','phone_code' => '0534'],
                            ['name' => '平原县','code' => '371426','phone_code' => '0534'],
                            ['name' => '夏津县','code' => '371427','phone_code' => '0534'],
                            ['name' => '武城县','code' => '371428','phone_code' => '0534'],
                            ['name' => '乐陵市','code' => '371481','phone_code' => '0534'],
                            ['name' => '禹城市','code' => '371482','phone_code' => '0534'],
                        ]
                    ],
                    [
                        'name' => '聊城市',
                        'code' => '371500',
                        'phone_code' => '0635',
                        'children' => [
                            ['name' => '东昌府区','code' => '371502','phone_code' => '0635'],
                            ['name' => '阳谷县','code' => '371521','phone_code' => '0635'],
                            ['name' => '莘县','code' => '371522','phone_code' => '0635'],
                            ['name' => '茌平县','code' => '371523','phone_code' => '0635'],
                            ['name' => '东阿县','code' => '371524','phone_code' => '0635'],
                            ['name' => '冠县','code' => '371525','phone_code' => '0635'],
                            ['name' => '高唐县','code' => '371526','phone_code' => '0635'],
                            ['name' => '临清市','code' => '371581','phone_code' => '0635'],
                        ]
                    ],
                    [
                        'name' => '滨州市',
                        'code' => '371600',
                        'phone_code' => '0543',
                        'children' => [
                            ['name' => '滨城区','code' => '371602','phone_code' => '0543'],
                            ['name' => '沾化区','code' => '371603','phone_code' => '0543'],
                            ['name' => '惠民县','code' => '371621','phone_code' => '0543'],
                            ['name' => '阳信县','code' => '371622','phone_code' => '0543'],
                            ['name' => '无棣县','code' => '371623','phone_code' => '0543'],
                            ['name' => '博兴县','code' => '371625','phone_code' => '0543'],
                            ['name' => '邹平县','code' => '371626','phone_code' => '0543'],
                        ]
                    ],
                    [
                        'name' => '菏泽市',
                        'code' => '371700',
                        'phone_code' => '0530',
                        'children' => [
                            ['name' => '牡丹区','code' => '371702','phone_code' => '0530'],
                            ['name' => '定陶区','code' => '371703','phone_code' => '0530'],
                            ['name' => '曹县','code' => '371721','phone_code' => '0530'],
                            ['name' => '单县','code' => '371722','phone_code' => '0530'],
                            ['name' => '成武县','code' => '371723','phone_code' => '0530'],
                            ['name' => '巨野县','code' => '371724','phone_code' => '0530'],
                            ['name' => '郓城县','code' => '371725','phone_code' => '0530'],
                            ['name' => '鄄城县','code' => '371726','phone_code' => '0530'],
                            ['name' => '东明县','code' => '371728','phone_code' => '0530'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '河南省',
                'code' => '410000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '郑州市',
                        'code' => '410100',
                        'phone_code' => '0371',
                        'children' => [
                            ['name' => '中原区','code' => '410102','phone_code' => '0371'],
                            ['name' => '二七区','code' => '410103','phone_code' => '0371'],
                            ['name' => '管城回族区','code' => '410104','phone_code' => '0371'],
                            ['name' => '金水区','code' => '410105','phone_code' => '0371'],
                            ['name' => '上街区','code' => '410106','phone_code' => '0371'],
                            ['name' => '惠济区','code' => '410108','phone_code' => '0371'],
                            ['name' => '中牟县','code' => '410122','phone_code' => '0371'],
                            ['name' => '巩义市','code' => '410181','phone_code' => '0371'],
                            ['name' => '荥阳市','code' => '410182','phone_code' => '0371'],
                            ['name' => '新密市','code' => '410183','phone_code' => '0371'],
                            ['name' => '新郑市','code' => '410184','phone_code' => '0371'],
                            ['name' => '登封市','code' => '410185','phone_code' => '0371'],
                        ]
                    ],
                    [
                        'name' => '开封市',
                        'code' => '410200',
                        'phone_code' => '0378',
                        'children' => [
                            ['name' => '龙亭区','code' => '410202','phone_code' => '0378'],
                            ['name' => '顺河回族区','code' => '410203','phone_code' => '0378'],
                            ['name' => '鼓楼区','code' => '410204','phone_code' => '0378'],
                            ['name' => '禹王台区','code' => '410205','phone_code' => '0378'],
                            ['name' => '祥符区','code' => '410212','phone_code' => '0378'],
                            ['name' => '杞县','code' => '410221','phone_code' => '0378'],
                            ['name' => '通许县','code' => '410222','phone_code' => '0378'],
                            ['name' => '尉氏县','code' => '410223','phone_code' => '0378'],
                            ['name' => '兰考县','code' => '410225','phone_code' => '0378'],
                        ]
                    ],
                    [
                        'name' => '洛阳市',
                        'code' => '410300',
                        'phone_code' => '0379',
                        'children' => [
                            ['name' => '老城区','code' => '410302','phone_code' => '0379'],
                            ['name' => '西工区','code' => '410303','phone_code' => '0379'],
                            ['name' => '瀍河回族区','code' => '410304','phone_code' => '0379'],
                            ['name' => '涧西区','code' => '410305','phone_code' => '0379'],
                            ['name' => '吉利区','code' => '410306','phone_code' => '0379'],
                            ['name' => '洛龙区','code' => '410311','phone_code' => '0379'],
                            ['name' => '孟津县','code' => '410322','phone_code' => '0379'],
                            ['name' => '新安县','code' => '410323','phone_code' => '0379'],
                            ['name' => '栾川县','code' => '410324','phone_code' => '0379'],
                            ['name' => '嵩县','code' => '410325','phone_code' => '0379'],
                            ['name' => '汝阳县','code' => '410326','phone_code' => '0379'],
                            ['name' => '宜阳县','code' => '410327','phone_code' => '0379'],
                            ['name' => '洛宁县','code' => '410328','phone_code' => '0379'],
                            ['name' => '伊川县','code' => '410329','phone_code' => '0379'],
                            ['name' => '偃师市','code' => '410381','phone_code' => '0379'],
                        ]
                    ],
                    [
                        'name' => '平顶山市',
                        'code' => '410400',
                        'phone_code' => '0375',
                        'children' => [
                            ['name' => '新华区','code' => '410402','phone_code' => '0375'],
                            ['name' => '卫东区','code' => '410403','phone_code' => '0375'],
                            ['name' => '石龙区','code' => '410404','phone_code' => '0375'],
                            ['name' => '湛河区','code' => '410411','phone_code' => '0375'],
                            ['name' => '宝丰县','code' => '410421','phone_code' => '0375'],
                            ['name' => '叶县','code' => '410422','phone_code' => '0375'],
                            ['name' => '鲁山县','code' => '410423','phone_code' => '0375'],
                            ['name' => '郏县','code' => '410425','phone_code' => '0375'],
                            ['name' => '舞钢市','code' => '410481','phone_code' => '0375'],
                            ['name' => '汝州市','code' => '410482','phone_code' => '0375'],
                        ]
                    ],
                    [
                        'name' => '安阳市',
                        'code' => '410500',
                        'phone_code' => '0372',
                        'children' => [
                            ['name' => '文峰区','code' => '410502','phone_code' => '0372'],
                            ['name' => '北关区','code' => '410503','phone_code' => '0372'],
                            ['name' => '殷都区','code' => '410505','phone_code' => '0372'],
                            ['name' => '龙安区','code' => '410506','phone_code' => '0372'],
                            ['name' => '安阳县','code' => '410522','phone_code' => '0372'],
                            ['name' => '汤阴县','code' => '410523','phone_code' => '0372'],
                            ['name' => '滑县','code' => '410526','phone_code' => '0372'],
                            ['name' => '内黄县','code' => '410527','phone_code' => '0372'],
                            ['name' => '林州市','code' => '410581','phone_code' => '0372'],
                        ]
                    ],
                    [
                        'name' => '鹤壁市',
                        'code' => '410600',
                        'phone_code' => '0392',
                        'children' => [
                            ['name' => '鹤山区','code' => '410602','phone_code' => '0392'],
                            ['name' => '山城区','code' => '410603','phone_code' => '0392'],
                            ['name' => '淇滨区','code' => '410611','phone_code' => '0392'],
                            ['name' => '浚县','code' => '410621','phone_code' => '0392'],
                            ['name' => '淇县','code' => '410622','phone_code' => '0392'],
                        ]
                    ],
                    [
                        'name' => '新乡市',
                        'code' => '410700',
                        'phone_code' => '0373',
                        'children' => [
                            ['name' => '红旗区','code' => '410702','phone_code' => '0373'],
                            ['name' => '卫滨区','code' => '410703','phone_code' => '0373'],
                            ['name' => '凤泉区','code' => '410704','phone_code' => '0373'],
                            ['name' => '牧野区','code' => '410711','phone_code' => '0373'],
                            ['name' => '新乡县','code' => '410721','phone_code' => '0373'],
                            ['name' => '获嘉县','code' => '410724','phone_code' => '0373'],
                            ['name' => '原阳县','code' => '410725','phone_code' => '0373'],
                            ['name' => '延津县','code' => '410726','phone_code' => '0373'],
                            ['name' => '封丘县','code' => '410727','phone_code' => '0373'],
                            ['name' => '长垣县','code' => '410728','phone_code' => '0373'],
                            ['name' => '卫辉市','code' => '410781','phone_code' => '0373'],
                            ['name' => '辉县市','code' => '410782','phone_code' => '0373'],
                        ]
                    ],
                    [
                        'name' => '焦作市',
                        'code' => '410800',
                        'phone_code' => '0391',
                        'children' => [
                            ['name' => '解放区','code' => '410802','phone_code' => '0391'],
                            ['name' => '中站区','code' => '410803','phone_code' => '0391'],
                            ['name' => '马村区','code' => '410804','phone_code' => '0391'],
                            ['name' => '山阳区','code' => '410811','phone_code' => '0391'],
                            ['name' => '修武县','code' => '410821','phone_code' => '0391'],
                            ['name' => '博爱县','code' => '410822','phone_code' => '0391'],
                            ['name' => '武陟县','code' => '410823','phone_code' => '0391'],
                            ['name' => '温县','code' => '410825','phone_code' => '0391'],
                            ['name' => '沁阳市','code' => '410882','phone_code' => '0391'],
                            ['name' => '孟州市','code' => '410883','phone_code' => '0391'],
                        ]
                    ],
                    [
                        'name' => '濮阳市',
                        'code' => '410900',
                        'phone_code' => '0393',
                        'children' => [
                            ['name' => '华龙区','code' => '410902','phone_code' => '0393'],
                            ['name' => '清丰县','code' => '410922','phone_code' => '0393'],
                            ['name' => '南乐县','code' => '410923','phone_code' => '0393'],
                            ['name' => '范县','code' => '410926','phone_code' => '0393'],
                            ['name' => '台前县','code' => '410927','phone_code' => '0393'],
                            ['name' => '濮阳县','code' => '410928','phone_code' => '0393'],
                        ]
                    ],
                    [
                        'name' => '许昌市',
                        'code' => '411000',
                        'phone_code' => '0374',
                        'children' => [
                            ['name' => '魏都区','code' => '411002','phone_code' => '0374'],
                            ['name' => '建安区','code' => '411003','phone_code' => '0374'],
                            ['name' => '鄢陵县','code' => '411024','phone_code' => '0374'],
                            ['name' => '襄城县','code' => '411025','phone_code' => '0374'],
                            ['name' => '禹州市','code' => '411081','phone_code' => '0374'],
                            ['name' => '长葛市','code' => '411082','phone_code' => '0374'],
                        ]
                    ],
                    [
                        'name' => '漯河市',
                        'code' => '411100',
                        'phone_code' => '0395',
                        'children' => [
                            ['name' => '源汇区','code' => '411102','phone_code' => '0395'],
                            ['name' => '郾城区','code' => '411103','phone_code' => '0395'],
                            ['name' => '召陵区','code' => '411104','phone_code' => '0395'],
                            ['name' => '舞阳县','code' => '411121','phone_code' => '0395'],
                            ['name' => '临颍县','code' => '411122','phone_code' => '0395'],
                        ]
                    ],
                    [
                        'name' => '三门峡市',
                        'code' => '411200',
                        'phone_code' => '0398',
                        'children' => [
                            ['name' => '湖滨区','code' => '411202','phone_code' => '0398'],
                            ['name' => '陕州区','code' => '411203','phone_code' => '0398'],
                            ['name' => '渑池县','code' => '411221','phone_code' => '0398'],
                            ['name' => '卢氏县','code' => '411224','phone_code' => '0398'],
                            ['name' => '义马市','code' => '411281','phone_code' => '0398'],
                            ['name' => '灵宝市','code' => '411282','phone_code' => '0398'],
                        ]
                    ],
                    [
                        'name' => '南阳市',
                        'code' => '411300',
                        'phone_code' => '0377',
                        'children' => [
                            ['name' => '宛城区','code' => '411302','phone_code' => '0377'],
                            ['name' => '卧龙区','code' => '411303','phone_code' => '0377'],
                            ['name' => '南召县','code' => '411321','phone_code' => '0377'],
                            ['name' => '方城县','code' => '411322','phone_code' => '0377'],
                            ['name' => '西峡县','code' => '411323','phone_code' => '0377'],
                            ['name' => '镇平县','code' => '411324','phone_code' => '0377'],
                            ['name' => '内乡县','code' => '411325','phone_code' => '0377'],
                            ['name' => '淅川县','code' => '411326','phone_code' => '0377'],
                            ['name' => '社旗县','code' => '411327','phone_code' => '0377'],
                            ['name' => '唐河县','code' => '411328','phone_code' => '0377'],
                            ['name' => '新野县','code' => '411329','phone_code' => '0377'],
                            ['name' => '桐柏县','code' => '411330','phone_code' => '0377'],
                            ['name' => '邓州市','code' => '411381','phone_code' => '0377'],
                        ]
                    ],
                    [
                        'name' => '商丘市',
                        'code' => '411400',
                        'phone_code' => '0370',
                        'children' => [
                            ['name' => '梁园区','code' => '411402','phone_code' => '0370'],
                            ['name' => '睢阳区','code' => '411403','phone_code' => '0370'],
                            ['name' => '民权县','code' => '411421','phone_code' => '0370'],
                            ['name' => '睢县','code' => '411422','phone_code' => '0370'],
                            ['name' => '宁陵县','code' => '411423','phone_code' => '0370'],
                            ['name' => '柘城县','code' => '411424','phone_code' => '0370'],
                            ['name' => '虞城县','code' => '411425','phone_code' => '0370'],
                            ['name' => '夏邑县','code' => '411426','phone_code' => '0370'],
                            ['name' => '永城市','code' => '411481','phone_code' => '0370'],
                        ]
                    ],
                    [
                        'name' => '信阳市',
                        'code' => '411500',
                        'phone_code' => '0376',
                        'children' => [
                            ['name' => '浉河区','code' => '411502','phone_code' => '0376'],
                            ['name' => '平桥区','code' => '411503','phone_code' => '0376'],
                            ['name' => '罗山县','code' => '411521','phone_code' => '0376'],
                            ['name' => '光山县','code' => '411522','phone_code' => '0376'],
                            ['name' => '新县','code' => '411523','phone_code' => '0376'],
                            ['name' => '商城县','code' => '411524','phone_code' => '0376'],
                            ['name' => '固始县','code' => '411525','phone_code' => '0376'],
                            ['name' => '潢川县','code' => '411526','phone_code' => '0376'],
                            ['name' => '淮滨县','code' => '411527','phone_code' => '0376'],
                            ['name' => '息县','code' => '411528','phone_code' => '0376'],
                        ]
                    ],
                    [
                        'name' => '周口市',
                        'code' => '411600',
                        'phone_code' => '0394',
                        'children' => [
                            ['name' => '川汇区','code' => '411602','phone_code' => '0394'],
                            ['name' => '扶沟县','code' => '411621','phone_code' => '0394'],
                            ['name' => '西华县','code' => '411622','phone_code' => '0394'],
                            ['name' => '商水县','code' => '411623','phone_code' => '0394'],
                            ['name' => '沈丘县','code' => '411624','phone_code' => '0394'],
                            ['name' => '郸城县','code' => '411625','phone_code' => '0394'],
                            ['name' => '淮阳县','code' => '411626','phone_code' => '0394'],
                            ['name' => '太康县','code' => '411627','phone_code' => '0394'],
                            ['name' => '鹿邑县','code' => '411628','phone_code' => '0394'],
                            ['name' => '项城市','code' => '411681','phone_code' => '0394'],
                        ]
                    ],
                    [
                        'name' => '驻马店市',
                        'code' => '411700',
                        'phone_code' => '0396',
                        'children' => [
                            ['name' => '驿城区','code' => '411702','phone_code' => '0396'],
                            ['name' => '西平县','code' => '411721','phone_code' => '0396'],
                            ['name' => '上蔡县','code' => '411722','phone_code' => '0396'],
                            ['name' => '平舆县','code' => '411723','phone_code' => '0396'],
                            ['name' => '正阳县','code' => '411724','phone_code' => '0396'],
                            ['name' => '确山县','code' => '411725','phone_code' => '0396'],
                            ['name' => '泌阳县','code' => '411726','phone_code' => '0396'],
                            ['name' => '汝南县','code' => '411727','phone_code' => '0396'],
                            ['name' => '遂平县','code' => '411728','phone_code' => '0396'],
                            ['name' => '新蔡县','code' => '411729','phone_code' => '0396'],
                        ]
                    ],
                    [
                        'name' => '济源市',
                        'code' => '419001',
                        'phone_code' => '1391',
                        'children' => []
                    ],
                ]
            ],
            [
                'name' => '湖北省',
                'code' => '420000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '武汉市',
                        'code' => '420100',
                        'phone_code' => '027',
                        'children' => [
                            ['name' => '江岸区','code' => '420102','phone_code' => '027'],
                            ['name' => '江汉区','code' => '420103','phone_code' => '027'],
                            ['name' => '硚口区','code' => '420104','phone_code' => '027'],
                            ['name' => '汉阳区','code' => '420105','phone_code' => '027'],
                            ['name' => '武昌区','code' => '420106','phone_code' => '027'],
                            ['name' => '青山区','code' => '420107','phone_code' => '027'],
                            ['name' => '洪山区','code' => '420111','phone_code' => '027'],
                            ['name' => '东西湖区','code' => '420112','phone_code' => '027'],
                            ['name' => '汉南区','code' => '420113','phone_code' => '027'],
                            ['name' => '蔡甸区','code' => '420114','phone_code' => '027'],
                            ['name' => '江夏区','code' => '420115','phone_code' => '027'],
                            ['name' => '黄陂区','code' => '420116','phone_code' => '027'],
                            ['name' => '新洲区','code' => '420117','phone_code' => '027'],
                        ]
                    ],
                    [
                        'name' => '黄石市',
                        'code' => '420200',
                        'phone_code' => '0714',
                        'children' => [
                            ['name' => '黄石港区','code' => '420202','phone_code' => '0714'],
                            ['name' => '西塞山区','code' => '420203','phone_code' => '0714'],
                            ['name' => '下陆区','code' => '420204','phone_code' => '0714'],
                            ['name' => '铁山区','code' => '420205','phone_code' => '0714'],
                            ['name' => '阳新县','code' => '420222','phone_code' => '0714'],
                            ['name' => '大冶市','code' => '420281','phone_code' => '0714'],
                        ]
                    ],
                    [
                        'name' => '十堰市',
                        'code' => '420300',
                        'phone_code' => '0719',
                        'children' => [
                            ['name' => '茅箭区','code' => '420302','phone_code' => '0719'],
                            ['name' => '张湾区','code' => '420303','phone_code' => '0719'],
                            ['name' => '郧阳区','code' => '420304','phone_code' => '0719'],
                            ['name' => '郧西县','code' => '420322','phone_code' => '0719'],
                            ['name' => '竹山县','code' => '420323','phone_code' => '0719'],
                            ['name' => '竹溪县','code' => '420324','phone_code' => '0719'],
                            ['name' => '房县','code' => '420325','phone_code' => '0719'],
                            ['name' => '丹江口市','code' => '420381','phone_code' => '0719'],
                        ]
                    ],
                    [
                        'name' => '宜昌市',
                        'code' => '420500',
                        'phone_code' => '0717',
                        'children' => [
                            ['name' => '西陵区','code' => '420502','phone_code' => '0717'],
                            ['name' => '伍家岗区','code' => '420503','phone_code' => '0717'],
                            ['name' => '点军区','code' => '420504','phone_code' => '0717'],
                            ['name' => '猇亭区','code' => '420505','phone_code' => '0717'],
                            ['name' => '夷陵区','code' => '420506','phone_code' => '0717'],
                            ['name' => '远安县','code' => '420525','phone_code' => '0717'],
                            ['name' => '兴山县','code' => '420526','phone_code' => '0717'],
                            ['name' => '秭归县','code' => '420527','phone_code' => '0717'],
                            ['name' => '长阳土家族自治县','code' => '420528','phone_code' => '0717'],
                            ['name' => '五峰土家族自治县','code' => '420529','phone_code' => '0717'],
                            ['name' => '宜都市','code' => '420581','phone_code' => '0717'],
                            ['name' => '当阳市','code' => '420582','phone_code' => '0717'],
                            ['name' => '枝江市','code' => '420583','phone_code' => '0717'],
                        ]
                    ],
                    [
                        'name' => '襄阳市',
                        'code' => '420600',
                        'phone_code' => '0710',
                        'children' => [
                            ['name' => '襄城区','code' => '420602','phone_code' => '0710'],
                            ['name' => '樊城区','code' => '420606','phone_code' => '0710'],
                            ['name' => '襄州区','code' => '420607','phone_code' => '0710'],
                            ['name' => '南漳县','code' => '420624','phone_code' => '0710'],
                            ['name' => '谷城县','code' => '420625','phone_code' => '0710'],
                            ['name' => '保康县','code' => '420626','phone_code' => '0710'],
                            ['name' => '老河口市','code' => '420682','phone_code' => '0710'],
                            ['name' => '枣阳市','code' => '420683','phone_code' => '0710'],
                            ['name' => '宜城市','code' => '420684','phone_code' => '0710'],
                        ]
                    ],
                    [
                        'name' => '鄂州市',
                        'code' => '420700',
                        'phone_code' => '0711',
                        'children' => [
                            ['name' => '梁子湖区','code' => '420702','phone_code' => '0711'],
                            ['name' => '华容区','code' => '420703','phone_code' => '0711'],
                            ['name' => '鄂城区','code' => '420704','phone_code' => '0711'],
                        ]
                    ],
                    [
                        'name' => '荆门市',
                        'code' => '420800',
                        'phone_code' => '0724',
                        'children' => [
                            ['name' => '东宝区','code' => '420802','phone_code' => '0724'],
                            ['name' => '掇刀区','code' => '420804','phone_code' => '0724'],
                            ['name' => '京山县','code' => '420821','phone_code' => '0724'],
                            ['name' => '沙洋县','code' => '420822','phone_code' => '0724'],
                            ['name' => '钟祥市','code' => '420881','phone_code' => '0724'],
                        ]
                    ],
                    [
                        'name' => '孝感市',
                        'code' => '420900',
                        'phone_code' => '0712',
                        'children' => [
                            ['name' => '孝南区','code' => '420902','phone_code' => '0712'],
                            ['name' => '孝昌县','code' => '420921','phone_code' => '0712'],
                            ['name' => '大悟县','code' => '420922','phone_code' => '0712'],
                            ['name' => '云梦县','code' => '420923','phone_code' => '0712'],
                            ['name' => '应城市','code' => '420981','phone_code' => '0712'],
                            ['name' => '安陆市','code' => '420982','phone_code' => '0712'],
                            ['name' => '汉川市','code' => '420984','phone_code' => '0712'],
                        ]
                    ],
                    [
                        'name' => '荆州市',
                        'code' => '421000',
                        'phone_code' => '0716',
                        'children' => [
                            ['name' => '沙市区','code' => '421002','phone_code' => '0716'],
                            ['name' => '荆州区','code' => '421003','phone_code' => '0716'],
                            ['name' => '公安县','code' => '421022','phone_code' => '0716'],
                            ['name' => '监利县','code' => '421023','phone_code' => '0716'],
                            ['name' => '江陵县','code' => '421024','phone_code' => '0716'],
                            ['name' => '石首市','code' => '421081','phone_code' => '0716'],
                            ['name' => '洪湖市','code' => '421083','phone_code' => '0716'],
                            ['name' => '松滋市','code' => '421087','phone_code' => '0716'],
                        ]
                    ],
                    [
                        'name' => '黄冈市',
                        'code' => '421100',
                        'phone_code' => '0713',
                        'children' => [
                            ['name' => '黄州区','code' => '421102','phone_code' => '0713'],
                            ['name' => '团风县','code' => '421121','phone_code' => '0713'],
                            ['name' => '红安县','code' => '421122','phone_code' => '0713'],
                            ['name' => '罗田县','code' => '421123','phone_code' => '0713'],
                            ['name' => '英山县','code' => '421124','phone_code' => '0713'],
                            ['name' => '浠水县','code' => '421125','phone_code' => '0713'],
                            ['name' => '蕲春县','code' => '421126','phone_code' => '0713'],
                            ['name' => '黄梅县','code' => '421127','phone_code' => '0713'],
                            ['name' => '麻城市','code' => '421181','phone_code' => '0713'],
                            ['name' => '武穴市','code' => '421182','phone_code' => '0713'],
                        ]
                    ],
                    [
                        'name' => '咸宁市',
                        'code' => '421200',
                        'phone_code' => '0715',
                        'children' => [
                            ['name' => '咸安区','code' => '421202','phone_code' => '0715'],
                            ['name' => '嘉鱼县','code' => '421221','phone_code' => '0715'],
                            ['name' => '通城县','code' => '421222','phone_code' => '0715'],
                            ['name' => '崇阳县','code' => '421223','phone_code' => '0715'],
                            ['name' => '通山县','code' => '421224','phone_code' => '0715'],
                            ['name' => '赤壁市','code' => '421281','phone_code' => '0715'],
                        ]
                    ],
                    [
                        'name' => '随州市',
                        'code' => '421300',
                        'phone_code' => '0722',
                        'children' => [
                            ['name' => '曾都区','code' => '421303','phone_code' => '0722'],
                            ['name' => '随县','code' => '421321','phone_code' => '0722'],
                            ['name' => '广水市','code' => '421381','phone_code' => '0722'],
                        ]
                    ],
                    [
                        'name' => '恩施土家族苗族自治州',
                        'code' => '422800',
                        'phone_code' => '0718',
                        'children' => [
                            ['name' => '恩施市','code' => '422801','phone_code' => '0718'],
                            ['name' => '利川市','code' => '422802','phone_code' => '0718'],
                            ['name' => '建始县','code' => '422822','phone_code' => '0718'],
                            ['name' => '巴东县','code' => '422823','phone_code' => '0718'],
                            ['name' => '宣恩县','code' => '422825','phone_code' => '0718'],
                            ['name' => '咸丰县','code' => '422826','phone_code' => '0718'],
                            ['name' => '来凤县','code' => '422827','phone_code' => '0718'],
                            ['name' => '鹤峰县','code' => '422828','phone_code' => '0718'],
                        ]
                    ],
                    [
                        'name' => '潜江市',
                        'code' => '429005',
                        'phone_code' => '2728',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '神农架林区',
                        'code' => '429021',
                        'phone_code' => '1719',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '天门市',
                        'code' => '429006',
                        'phone_code' => '1728',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '仙桃市',
                        'code' => '429004',
                        'phone_code' => '0728',
                        'children' => [

                        ]
                    ],
                ]
            ],
            [
                'name' => '湖南省',
                'code' => '430000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '长沙市',
                        'code' => '430100',
                        'phone_code' => '0731',
                        'children' => [
                            ['name' => '芙蓉区','code' => '430102','phone_code' => '0731'],
                            ['name' => '天心区','code' => '430103','phone_code' => '0731'],
                            ['name' => '岳麓区','code' => '430104','phone_code' => '0731'],
                            ['name' => '开福区','code' => '430105','phone_code' => '0731'],
                            ['name' => '雨花区','code' => '430111','phone_code' => '0731'],
                            ['name' => '望城区','code' => '430112','phone_code' => '0731'],
                            ['name' => '长沙县','code' => '430121','phone_code' => '0731'],
                            ['name' => '宁乡市','code' => '430124','phone_code' => '0731'],
                            ['name' => '浏阳市','code' => '430181','phone_code' => '0731'],
                        ]
                    ],
                    [
                        'name' => '株洲市',
                        'code' => '430200',
                        'phone_code' => '0733',
                        'children' => [
                            ['name' => '荷塘区','code' => '430202','phone_code' => '0733'],
                            ['name' => '芦淞区','code' => '430203','phone_code' => '0733'],
                            ['name' => '石峰区','code' => '430204','phone_code' => '0733'],
                            ['name' => '天元区','code' => '430211','phone_code' => '0733'],
                            ['name' => '株洲县','code' => '430221','phone_code' => '0733'],
                            ['name' => '攸县','code' => '430223','phone_code' => '0733'],
                            ['name' => '茶陵县','code' => '430224','phone_code' => '0733'],
                            ['name' => '炎陵县','code' => '430225','phone_code' => '0733'],
                            ['name' => '醴陵市','code' => '430281','phone_code' => '0733'],
                        ]
                    ],
                    [
                        'name' => '湘潭市',
                        'code' => '430300',
                        'phone_code' => '0732',
                        'children' => [
                            ['name' => '雨湖区','code' => '430302','phone_code' => '0732'],
                            ['name' => '岳塘区','code' => '430304','phone_code' => '0732'],
                            ['name' => '湘潭县','code' => '430321','phone_code' => '0732'],
                            ['name' => '湘乡市','code' => '430381','phone_code' => '0732'],
                            ['name' => '韶山市','code' => '430382','phone_code' => '0732'],
                        ]
                    ],
                    [
                        'name' => '衡阳市',
                        'code' => '430400',
                        'phone_code' => '0734',
                        'children' => [
                            ['name' => '珠晖区','code' => '430405','phone_code' => '0734'],
                            ['name' => '雁峰区','code' => '430406','phone_code' => '0734'],
                            ['name' => '石鼓区','code' => '430407','phone_code' => '0734'],
                            ['name' => '蒸湘区','code' => '430408','phone_code' => '0734'],
                            ['name' => '南岳区','code' => '430412','phone_code' => '0734'],
                            ['name' => '衡阳县','code' => '430421','phone_code' => '0734'],
                            ['name' => '衡南县','code' => '430422','phone_code' => '0734'],
                            ['name' => '衡山县','code' => '430423','phone_code' => '0734'],
                            ['name' => '衡东县','code' => '430424','phone_code' => '0734'],
                            ['name' => '祁东县','code' => '430426','phone_code' => '0734'],
                            ['name' => '耒阳市','code' => '430481','phone_code' => '0734'],
                            ['name' => '常宁市','code' => '430482','phone_code' => '0734'],
                        ]
                    ],
                    [
                        'name' => '邵阳市',
                        'code' => '430500',
                        'phone_code' => '0739',
                        'children' => [
                            ['name' => '双清区','code' => '430502','phone_code' => '0739'],
                            ['name' => '大祥区','code' => '430503','phone_code' => '0739'],
                            ['name' => '北塔区','code' => '430511','phone_code' => '0739'],
                            ['name' => '邵东县','code' => '430521','phone_code' => '0739'],
                            ['name' => '新邵县','code' => '430522','phone_code' => '0739'],
                            ['name' => '邵阳县','code' => '430523','phone_code' => '0739'],
                            ['name' => '隆回县','code' => '430524','phone_code' => '0739'],
                            ['name' => '洞口县','code' => '430525','phone_code' => '0739'],
                            ['name' => '绥宁县','code' => '430527','phone_code' => '0739'],
                            ['name' => '新宁县','code' => '430528','phone_code' => '0739'],
                            ['name' => '城步苗族自治县','code' => '430529','phone_code' => '0739'],
                            ['name' => '武冈市','code' => '430581','phone_code' => '0739'],
                        ]
                    ],
                    [
                        'name' => '岳阳市',
                        'code' => '430600',
                        'phone_code' => '0730',
                        'children' => [
                            ['name' => '岳阳楼区','code' => '430602','phone_code' => '0730'],
                            ['name' => '云溪区','code' => '430603','phone_code' => '0730'],
                            ['name' => '君山区','code' => '430611','phone_code' => '0730'],
                            ['name' => '岳阳县','code' => '430621','phone_code' => '0730'],
                            ['name' => '华容县','code' => '430623','phone_code' => '0730'],
                            ['name' => '湘阴县','code' => '430624','phone_code' => '0730'],
                            ['name' => '平江县','code' => '430626','phone_code' => '0730'],
                            ['name' => '汨罗市','code' => '430681','phone_code' => '0730'],
                            ['name' => '临湘市','code' => '430682','phone_code' => '0730'],
                        ]
                    ],
                    [
                        'name' => '常德市',
                        'code' => '430700',
                        'phone_code' => '0736',
                        'children' => [
                            ['name' => '武陵区','code' => '430702','phone_code' => '0736'],
                            ['name' => '鼎城区','code' => '430703','phone_code' => '0736'],
                            ['name' => '安乡县','code' => '430721','phone_code' => '0736'],
                            ['name' => '汉寿县','code' => '430722','phone_code' => '0736'],
                            ['name' => '澧县','code' => '430723','phone_code' => '0736'],
                            ['name' => '临澧县','code' => '430724','phone_code' => '0736'],
                            ['name' => '桃源县','code' => '430725','phone_code' => '0736'],
                            ['name' => '石门县','code' => '430726','phone_code' => '0736'],
                            ['name' => '津市市','code' => '430781','phone_code' => '0736'],
                        ]
                    ],
                    [
                        'name' => '张家界市',
                        'code' => '430800',
                        'phone_code' => '0744',
                        'children' => [
                            ['name' => '永定区','code' => '430802','phone_code' => '0744'],
                            ['name' => '武陵源区','code' => '430811','phone_code' => '0744'],
                            ['name' => '慈利县','code' => '430821','phone_code' => '0744'],
                            ['name' => '桑植县','code' => '430822','phone_code' => '0744'],
                        ]
                    ],
                    [
                        'name' => '益阳市',
                        'code' => '430900',
                        'phone_code' => '0737',
                        'children' => [
                            ['name' => '资阳区','code' => '430902','phone_code' => '0737'],
                            ['name' => '赫山区','code' => '430903','phone_code' => '0737'],
                            ['name' => '南县','code' => '430921','phone_code' => '0737'],
                            ['name' => '桃江县','code' => '430922','phone_code' => '0737'],
                            ['name' => '安化县','code' => '430923','phone_code' => '0737'],
                            ['name' => '沅江市','code' => '430981','phone_code' => '0737'],
                        ]
                    ],
                    [
                        'name' => '郴州市',
                        'code' => '431000',
                        'phone_code' => '0735',
                        'children' => [
                            ['name' => '北湖区','code' => '431002','phone_code' => '0735'],
                            ['name' => '苏仙区','code' => '431003','phone_code' => '0735'],
                            ['name' => '桂阳县','code' => '431021','phone_code' => '0735'],
                            ['name' => '宜章县','code' => '431022','phone_code' => '0735'],
                            ['name' => '永兴县','code' => '431023','phone_code' => '0735'],
                            ['name' => '嘉禾县','code' => '431024','phone_code' => '0735'],
                            ['name' => '临武县','code' => '431025','phone_code' => '0735'],
                            ['name' => '汝城县','code' => '431026','phone_code' => '0735'],
                            ['name' => '桂东县','code' => '431027','phone_code' => '0735'],
                            ['name' => '安仁县','code' => '431028','phone_code' => '0735'],
                            ['name' => '资兴市','code' => '431081','phone_code' => '0735'],
                        ]
                    ],
                    [
                        'name' => '永州市',
                        'code' => '431100',
                        'phone_code' => '0746',
                        'children' => [
                            ['name' => '零陵区','code' => '431102','phone_code' => '0746'],
                            ['name' => '冷水滩区','code' => '431103','phone_code' => '0746'],
                            ['name' => '祁阳县','code' => '431121','phone_code' => '0746'],
                            ['name' => '东安县','code' => '431122','phone_code' => '0746'],
                            ['name' => '双牌县','code' => '431123','phone_code' => '0746'],
                            ['name' => '道县','code' => '431124','phone_code' => '0746'],
                            ['name' => '江永县','code' => '431125','phone_code' => '0746'],
                            ['name' => '宁远县','code' => '431126','phone_code' => '0746'],
                            ['name' => '蓝山县','code' => '431127','phone_code' => '0746'],
                            ['name' => '新田县','code' => '431128','phone_code' => '0746'],
                            ['name' => '江华瑶族自治县','code' => '431129','phone_code' => '0746'],
                        ]
                    ],
                    [
                        'name' => '怀化市',
                        'code' => '431200',
                        'phone_code' => '0745',
                        'children' => [
                            ['name' => '鹤城区','code' => '431202','phone_code' => '0745'],
                            ['name' => '中方县','code' => '431221','phone_code' => '0745'],
                            ['name' => '沅陵县','code' => '431222','phone_code' => '0745'],
                            ['name' => '辰溪县','code' => '431223','phone_code' => '0745'],
                            ['name' => '溆浦县','code' => '431224','phone_code' => '0745'],
                            ['name' => '会同县','code' => '431225','phone_code' => '0745'],
                            ['name' => '麻阳苗族自治县','code' => '431226','phone_code' => '0745'],
                            ['name' => '新晃侗族自治县','code' => '431227','phone_code' => '0745'],
                            ['name' => '芷江侗族自治县','code' => '431228','phone_code' => '0745'],
                            ['name' => '靖州苗族侗族自治县','code' => '431229','phone_code' => '0745'],
                            ['name' => '通道侗族自治县','code' => '431230','phone_code' => '0745'],
                            ['name' => '洪江市','code' => '431281','phone_code' => '0745'],
                        ]
                    ],
                    [
                        'name' => '娄底市',
                        'code' => '431300',
                        'phone_code' => '0738',
                        'children' => [
                            ['name' => '娄星区','code' => '431302','phone_code' => '0738'],
                            ['name' => '双峰县','code' => '431321','phone_code' => '0738'],
                            ['name' => '新化县','code' => '431322','phone_code' => '0738'],
                            ['name' => '冷水江市','code' => '431381','phone_code' => '0738'],
                            ['name' => '涟源市','code' => '431382','phone_code' => '0738'],
                        ]
                    ],
                    [
                        'name' => '湘西土家族苗族自治州',
                        'code' => '433100',
                        'phone_code' => '0743',
                        'children' => [
                            ['name' => '吉首市','code' => '433101','phone_code' => '0743'],
                            ['name' => '泸溪县','code' => '433122','phone_code' => '0743'],
                            ['name' => '凤凰县','code' => '433123','phone_code' => '0743'],
                            ['name' => '花垣县','code' => '433124','phone_code' => '0743'],
                            ['name' => '保靖县','code' => '433125','phone_code' => '0743'],
                            ['name' => '古丈县','code' => '433126','phone_code' => '0743'],
                            ['name' => '永顺县','code' => '433127','phone_code' => '0743'],
                            ['name' => '龙山县','code' => '433130','phone_code' => '0743'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '广东省',
                'code' => '440000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '广州市',
                        'code' => '440100',
                        'phone_code' => '020',
                        'children' => [
                            ['name' => '荔湾区','code' => '440103','phone_code' => '020'],
                            ['name' => '越秀区','code' => '440104','phone_code' => '020'],
                            ['name' => '海珠区','code' => '440105','phone_code' => '020'],
                            ['name' => '天河区','code' => '440106','phone_code' => '020'],
                            ['name' => '白云区','code' => '440111','phone_code' => '020'],
                            ['name' => '黄埔区','code' => '440112','phone_code' => '020'],
                            ['name' => '番禺区','code' => '440113','phone_code' => '020'],
                            ['name' => '花都区','code' => '440114','phone_code' => '020'],
                            ['name' => '南沙区','code' => '440115','phone_code' => '020'],
                            ['name' => '从化区','code' => '440117','phone_code' => '020'],
                            ['name' => '增城区','code' => '440118','phone_code' => '020'],
                        ]
                    ],
                    [
                        'name' => '韶关市',
                        'code' => '440200',
                        'phone_code' => '0751',
                        'children' => [
                            ['name' => '武江区','code' => '440203','phone_code' => '0751'],
                            ['name' => '浈江区','code' => '440204','phone_code' => '0751'],
                            ['name' => '曲江区','code' => '440205','phone_code' => '0751'],
                            ['name' => '始兴县','code' => '440222','phone_code' => '0751'],
                            ['name' => '仁化县','code' => '440224','phone_code' => '0751'],
                            ['name' => '翁源县','code' => '440229','phone_code' => '0751'],
                            ['name' => '乳源瑶族自治县','code' => '440232','phone_code' => '0751'],
                            ['name' => '新丰县','code' => '440233','phone_code' => '0751'],
                            ['name' => '乐昌市','code' => '440281','phone_code' => '0751'],
                            ['name' => '南雄市','code' => '440282','phone_code' => '0751'],
                        ]
                    ],
                    [
                        'name' => '深圳市',
                        'code' => '440300',
                        'phone_code' => '0755',
                        'children' => [
                            ['name' => '罗湖区','code' => '440303','phone_code' => '0755'],
                            ['name' => '福田区','code' => '440304','phone_code' => '0755'],
                            ['name' => '南山区','code' => '440305','phone_code' => '0755'],
                            ['name' => '宝安区','code' => '440306','phone_code' => '0755'],
                            ['name' => '龙岗区','code' => '440307','phone_code' => '0755'],
                            ['name' => '盐田区','code' => '440308','phone_code' => '0755'],
                            ['name' => '龙华区','code' => '440309','phone_code' => '0755'],
                            ['name' => '坪山区','code' => '440310','phone_code' => '0755'],
                        ]
                    ],
                    [
                        'name' => '珠海市',
                        'code' => '440400',
                        'phone_code' => '0756',
                        'children' => [
                            ['name' => '香洲区','code' => '440402','phone_code' => '0756'],
                            ['name' => '斗门区','code' => '440403','phone_code' => '0756'],
                            ['name' => '金湾区','code' => '440404','phone_code' => '0756'],
                        ]
                    ],
                    [
                        'name' => '汕头市',
                        'code' => '440500',
                        'phone_code' => '0754',
                        'children' => [
                            ['name' => '龙湖区','code' => '440507','phone_code' => '0754'],
                            ['name' => '金平区','code' => '440511','phone_code' => '0754'],
                            ['name' => '濠江区','code' => '440512','phone_code' => '0754'],
                            ['name' => '潮阳区','code' => '440513','phone_code' => '0754'],
                            ['name' => '潮南区','code' => '440514','phone_code' => '0754'],
                            ['name' => '澄海区','code' => '440515','phone_code' => '0754'],
                            ['name' => '南澳县','code' => '440523','phone_code' => '0754'],
                        ]
                    ],
                    [
                        'name' => '佛山市',
                        'code' => '440600',
                        'phone_code' => '0757',
                        'children' => [
                            ['name' => '禅城区','code' => '440604','phone_code' => '0757'],
                            ['name' => '南海区','code' => '440605','phone_code' => '0757'],
                            ['name' => '顺德区','code' => '440606','phone_code' => '0757'],
                            ['name' => '三水区','code' => '440607','phone_code' => '0757'],
                            ['name' => '高明区','code' => '440608','phone_code' => '0757'],
                        ]
                    ],
                    [
                        'name' => '江门市',
                        'code' => '440700',
                        'phone_code' => '0750',
                        'children' => [
                            ['name' => '蓬江区','code' => '440703','phone_code' => '0750'],
                            ['name' => '江海区','code' => '440704','phone_code' => '0750'],
                            ['name' => '新会区','code' => '440705','phone_code' => '0750'],
                            ['name' => '台山市','code' => '440781','phone_code' => '0750'],
                            ['name' => '开平市','code' => '440783','phone_code' => '0750'],
                            ['name' => '鹤山市','code' => '440784','phone_code' => '0750'],
                            ['name' => '恩平市','code' => '440785','phone_code' => '0750'],
                        ]
                    ],
                    [
                        'name' => '湛江市',
                        'code' => '440800',
                        'phone_code' => '0759',
                        'children' => [
                            ['name' => '赤坎区','code' => '440802','phone_code' => '0759'],
                            ['name' => '霞山区','code' => '440803','phone_code' => '0759'],
                            ['name' => '坡头区','code' => '440804','phone_code' => '0759'],
                            ['name' => '麻章区','code' => '440811','phone_code' => '0759'],
                            ['name' => '遂溪县','code' => '440823','phone_code' => '0759'],
                            ['name' => '徐闻县','code' => '440825','phone_code' => '0759'],
                            ['name' => '廉江市','code' => '440881','phone_code' => '0759'],
                            ['name' => '雷州市','code' => '440882','phone_code' => '0759'],
                            ['name' => '吴川市','code' => '440883','phone_code' => '0759'],
                        ]
                    ],
                    [
                        'name' => '茂名市',
                        'code' => '440900',
                        'phone_code' => '0668',
                        'children' => [
                            ['name' => '茂南区','code' => '440902','phone_code' => '0668'],
                            ['name' => '电白区','code' => '440904','phone_code' => '0668'],
                            ['name' => '高州市','code' => '440981','phone_code' => '0668'],
                            ['name' => '化州市','code' => '440982','phone_code' => '0668'],
                            ['name' => '信宜市','code' => '440983','phone_code' => '0668'],
                        ]
                    ],
                    [
                        'name' => '肇庆市',
                        'code' => '441200',
                        'phone_code' => '0758',
                        'children' => [
                            ['name' => '端州区','code' => '441202','phone_code' => '0758'],
                            ['name' => '鼎湖区','code' => '441203','phone_code' => '0758'],
                            ['name' => '高要区','code' => '441204','phone_code' => '0758'],
                            ['name' => '广宁县','code' => '441223','phone_code' => '0758'],
                            ['name' => '怀集县','code' => '441224','phone_code' => '0758'],
                            ['name' => '封开县','code' => '441225','phone_code' => '0758'],
                            ['name' => '德庆县','code' => '441226','phone_code' => '0758'],
                            ['name' => '四会市','code' => '441284','phone_code' => '0758'],
                        ]
                    ],
                    [
                        'name' => '惠州市',
                        'code' => '441300',
                        'phone_code' => '0752',
                        'children' => [
                            ['name' => '惠城区','code' => '441302','phone_code' => '0752'],
                            ['name' => '惠阳区','code' => '441303','phone_code' => '0752'],
                            ['name' => '博罗县','code' => '441322','phone_code' => '0752'],
                            ['name' => '惠东县','code' => '441323','phone_code' => '0752'],
                            ['name' => '龙门县','code' => '441324','phone_code' => '0752'],
                        ]
                    ],
                    [
                        'name' => '梅州市',
                        'code' => '441400',
                        'phone_code' => '0753',
                        'children' => [
                            ['name' => '梅江区','code' => '441402','phone_code' => '0753'],
                            ['name' => '梅县区','code' => '441403','phone_code' => '0753'],
                            ['name' => '大埔县','code' => '441422','phone_code' => '0753'],
                            ['name' => '丰顺县','code' => '441423','phone_code' => '0753'],
                            ['name' => '五华县','code' => '441424','phone_code' => '0753'],
                            ['name' => '平远县','code' => '441426','phone_code' => '0753'],
                            ['name' => '蕉岭县','code' => '441427','phone_code' => '0753'],
                            ['name' => '兴宁市','code' => '441481','phone_code' => '0753'],
                        ]
                    ],
                    [
                        'name' => '汕尾市',
                        'code' => '441500',
                        'phone_code' => '0660',
                        'children' => [
                            ['name' => '城区','code' => '441502','phone_code' => '0660'],
                            ['name' => '海丰县','code' => '441521','phone_code' => '0660'],
                            ['name' => '陆河县','code' => '441523','phone_code' => '0660'],
                            ['name' => '陆丰市','code' => '441581','phone_code' => '0660'],
                        ]
                    ],
                    [
                        'name' => '河源市',
                        'code' => '441600',
                        'phone_code' => '0762',
                        'children' => [
                            ['name' => '源城区','code' => '441602','phone_code' => '0762'],
                            ['name' => '紫金县','code' => '441621','phone_code' => '0762'],
                            ['name' => '龙川县','code' => '441622','phone_code' => '0762'],
                            ['name' => '连平县','code' => '441623','phone_code' => '0762'],
                            ['name' => '和平县','code' => '441624','phone_code' => '0762'],
                            ['name' => '东源县','code' => '441625','phone_code' => '0762'],
                        ]
                    ],
                    [
                        'name' => '阳江市',
                        'code' => '441700',
                        'phone_code' => '0662',
                        'children' => [
                            ['name' => '江城区','code' => '441702','phone_code' => '0662'],
                            ['name' => '阳东区','code' => '441704','phone_code' => '0662'],
                            ['name' => '阳西县','code' => '441721','phone_code' => '0662'],
                            ['name' => '阳春市','code' => '441781','phone_code' => '0662'],
                        ]
                    ],
                    [
                        'name' => '清远市',
                        'code' => '441800',
                        'phone_code' => '0763',
                        'children' => [
                            ['name' => '清城区','code' => '441802','phone_code' => '0763'],
                            ['name' => '清新区','code' => '441803','phone_code' => '0763'],
                            ['name' => '佛冈县','code' => '441821','phone_code' => '0763'],
                            ['name' => '阳山县','code' => '441823','phone_code' => '0763'],
                            ['name' => '连山壮族瑶族自治县','code' => '441825','phone_code' => '0763'],
                            ['name' => '连南瑶族自治县','code' => '441826','phone_code' => '0763'],
                            ['name' => '英德市','code' => '441881','phone_code' => '0763'],
                            ['name' => '连州市','code' => '441882','phone_code' => '0763'],
                        ]
                    ],
                    [
                        'name' => '东莞市',
                        'code' => '441900',
                        'phone_code' => '0769',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '中山市',
                        'code' => '442000',
                        'phone_code' => '0760',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '潮州市',
                        'code' => '445100',
                        'phone_code' => '0768',
                        'children' => [
                            ['name' => '湘桥区','code' => '445102','phone_code' => '0768'],
                            ['name' => '潮安区','code' => '445103','phone_code' => '0768'],
                            ['name' => '饶平县','code' => '445122','phone_code' => '0768'],
                        ]
                    ],
                    [
                        'name' => '揭阳市',
                        'code' => '445200',
                        'phone_code' => '0663',
                        'children' => [
                            ['name' => '榕城区','code' => '445202','phone_code' => '0663'],
                            ['name' => '揭东区','code' => '445203','phone_code' => '0663'],
                            ['name' => '揭西县','code' => '445222','phone_code' => '0663'],
                            ['name' => '惠来县','code' => '445224','phone_code' => '0663'],
                            ['name' => '普宁市','code' => '445281','phone_code' => '0663'],
                        ]
                    ],
                    [
                        'name' => '云浮市',
                        'code' => '445300',
                        'phone_code' => '0766',
                        'children' => [
                            ['name' => '云城区','code' => '445302','phone_code' => '0766'],
                            ['name' => '云安区','code' => '445303','phone_code' => '0766'],
                            ['name' => '新兴县','code' => '445321','phone_code' => '0766'],
                            ['name' => '郁南县','code' => '445322','phone_code' => '0766'],
                            ['name' => '罗定市','code' => '445381','phone_code' => '0766'],
                        ]
                    ],
                    [
                        'name' => '东沙群岛',
                        'code' => '442100',
                        'phone_code' => '',
                        'children' => [

                        ]
                    ],
                ]
            ],
            [
                'name' => '广西壮族自治区',
                'code' => '450000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '南宁市',
                        'code' => '450100',
                        'phone_code' => '0771',
                        'children' => [
                            ['name' => '兴宁区','code' => '450102','phone_code' => '0771'],
                            ['name' => '青秀区','code' => '450103','phone_code' => '0771'],
                            ['name' => '江南区','code' => '450105','phone_code' => '0771'],
                            ['name' => '西乡塘区','code' => '450107','phone_code' => '0771'],
                            ['name' => '良庆区','code' => '450108','phone_code' => '0771'],
                            ['name' => '邕宁区','code' => '450109','phone_code' => '0771'],
                            ['name' => '武鸣区','code' => '450110','phone_code' => '0771'],
                            ['name' => '隆安县','code' => '450123','phone_code' => '0771'],
                            ['name' => '马山县','code' => '450124','phone_code' => '0771'],
                            ['name' => '上林县','code' => '450125','phone_code' => '0771'],
                            ['name' => '宾阳县','code' => '450126','phone_code' => '0771'],
                            ['name' => '横县','code' => '450127','phone_code' => '0771'],
                        ]
                    ],
                    [
                        'name' => '柳州市',
                        'code' => '450200',
                        'phone_code' => '0772',
                        'children' => [
                            ['name' => '城中区','code' => '450202','phone_code' => '0772'],
                            ['name' => '鱼峰区','code' => '450203','phone_code' => '0772'],
                            ['name' => '柳南区','code' => '450204','phone_code' => '0772'],
                            ['name' => '柳北区','code' => '450205','phone_code' => '0772'],
                            ['name' => '柳江区','code' => '450206','phone_code' => '0772'],
                            ['name' => '柳城县','code' => '450222','phone_code' => '0772'],
                            ['name' => '鹿寨县','code' => '450223','phone_code' => '0772'],
                            ['name' => '融安县','code' => '450224','phone_code' => '0772'],
                            ['name' => '融水苗族自治县','code' => '450225','phone_code' => '0772'],
                            ['name' => '三江侗族自治县','code' => '450226','phone_code' => '0772'],
                        ]
                    ],
                    [
                        'name' => '桂林市',
                        'code' => '450300',
                        'phone_code' => '0773',
                        'children' => [
                            ['name' => '秀峰区','code' => '450302','phone_code' => '0773'],
                            ['name' => '叠彩区','code' => '450303','phone_code' => '0773'],
                            ['name' => '象山区','code' => '450304','phone_code' => '0773'],
                            ['name' => '七星区','code' => '450305','phone_code' => '0773'],
                            ['name' => '雁山区','code' => '450311','phone_code' => '0773'],
                            ['name' => '临桂区','code' => '450312','phone_code' => '0773'],
                            ['name' => '阳朔县','code' => '450321','phone_code' => '0773'],
                            ['name' => '灵川县','code' => '450323','phone_code' => '0773'],
                            ['name' => '全州县','code' => '450324','phone_code' => '0773'],
                            ['name' => '兴安县','code' => '450325','phone_code' => '0773'],
                            ['name' => '永福县','code' => '450326','phone_code' => '0773'],
                            ['name' => '灌阳县','code' => '450327','phone_code' => '0773'],
                            ['name' => '龙胜各族自治县','code' => '450328','phone_code' => '0773'],
                            ['name' => '资源县','code' => '450329','phone_code' => '0773'],
                            ['name' => '平乐县','code' => '450330','phone_code' => '0773'],
                            ['name' => '荔浦县','code' => '450331','phone_code' => '0773'],
                            ['name' => '恭城瑶族自治县','code' => '450332','phone_code' => '0773'],
                        ]
                    ],
                    [
                        'name' => '梧州市',
                        'code' => '450400',
                        'phone_code' => '0774',
                        'children' => [
                            ['name' => '万秀区','code' => '450403','phone_code' => '0774'],
                            ['name' => '长洲区','code' => '450405','phone_code' => '0774'],
                            ['name' => '龙圩区','code' => '450406','phone_code' => '0774'],
                            ['name' => '苍梧县','code' => '450421','phone_code' => '0774'],
                            ['name' => '藤县','code' => '450422','phone_code' => '0774'],
                            ['name' => '蒙山县','code' => '450423','phone_code' => '0774'],
                            ['name' => '岑溪市','code' => '450481','phone_code' => '0774'],
                        ]
                    ],
                    [
                        'name' => '北海市',
                        'code' => '450500',
                        'phone_code' => '0779',
                        'children' => [
                            ['name' => '海城区','code' => '450502','phone_code' => '0779'],
                            ['name' => '银海区','code' => '450503','phone_code' => '0779'],
                            ['name' => '铁山港区','code' => '450512','phone_code' => '0779'],
                            ['name' => '合浦县','code' => '450521','phone_code' => '0779'],
                        ]
                    ],
                    [
                        'name' => '防城港市',
                        'code' => '450600',
                        'phone_code' => '0770',
                        'children' => [
                            ['name' => '港口区','code' => '450602','phone_code' => '0770'],
                            ['name' => '防城区','code' => '450603','phone_code' => '0770'],
                            ['name' => '上思县','code' => '450621','phone_code' => '0770'],
                            ['name' => '东兴市','code' => '450681','phone_code' => '0770'],
                        ]
                    ],
                    [
                        'name' => '钦州市',
                        'code' => '450700',
                        'phone_code' => '0777',
                        'children' => [
                            ['name' => '钦南区','code' => '450702','phone_code' => '0777'],
                            ['name' => '钦北区','code' => '450703','phone_code' => '0777'],
                            ['name' => '灵山县','code' => '450721','phone_code' => '0777'],
                            ['name' => '浦北县','code' => '450722','phone_code' => '0777'],
                        ]
                    ],
                    [
                        'name' => '贵港市',
                        'code' => '450800',
                        'phone_code' => '1755',
                        'children' => [
                            ['name' => '港北区','code' => '450802','phone_code' => '1755'],
                            ['name' => '港南区','code' => '450803','phone_code' => '1755'],
                            ['name' => '覃塘区','code' => '450804','phone_code' => '1755'],
                            ['name' => '平南县','code' => '450821','phone_code' => '1755'],
                            ['name' => '桂平市','code' => '450881','phone_code' => '1755'],
                        ]
                    ],
                    [
                        'name' => '玉林市',
                        'code' => '450900',
                        'phone_code' => '0775',
                        'children' => [
                            ['name' => '玉州区','code' => '450902','phone_code' => '0775'],
                            ['name' => '福绵区','code' => '450903','phone_code' => '0775'],
                            ['name' => '容县','code' => '450921','phone_code' => '0775'],
                            ['name' => '陆川县','code' => '450922','phone_code' => '0775'],
                            ['name' => '博白县','code' => '450923','phone_code' => '0775'],
                            ['name' => '兴业县','code' => '450924','phone_code' => '0775'],
                            ['name' => '北流市','code' => '450981','phone_code' => '0775'],
                        ]
                    ],
                    [
                        'name' => '百色市',
                        'code' => '451000',
                        'phone_code' => '0776',
                        'children' => [
                            ['name' => '右江区','code' => '451002','phone_code' => '0776'],
                            ['name' => '田阳县','code' => '451021','phone_code' => '0776'],
                            ['name' => '田东县','code' => '451022','phone_code' => '0776'],
                            ['name' => '平果县','code' => '451023','phone_code' => '0776'],
                            ['name' => '德保县','code' => '451024','phone_code' => '0776'],
                            ['name' => '那坡县','code' => '451026','phone_code' => '0776'],
                            ['name' => '凌云县','code' => '451027','phone_code' => '0776'],
                            ['name' => '乐业县','code' => '451028','phone_code' => '0776'],
                            ['name' => '田林县','code' => '451029','phone_code' => '0776'],
                            ['name' => '西林县','code' => '451030','phone_code' => '0776'],
                            ['name' => '隆林各族自治县','code' => '451031','phone_code' => '0776'],
                            ['name' => '靖西市','code' => '451081','phone_code' => '0776'],
                        ]
                    ],
                    [
                        'name' => '贺州市',
                        'code' => '451100',
                        'phone_code' => '1774',
                        'children' => [
                            ['name' => '八步区','code' => '451102','phone_code' => '1774'],
                            ['name' => '平桂区','code' => '451103','phone_code' => '1774'],
                            ['name' => '昭平县','code' => '451121','phone_code' => '1774'],
                            ['name' => '钟山县','code' => '451122','phone_code' => '1774'],
                            ['name' => '富川瑶族自治县','code' => '451123','phone_code' => '1774'],
                        ]
                    ],
                    [
                        'name' => '河池市',
                        'code' => '451200',
                        'phone_code' => '0778',
                        'children' => [
                            ['name' => '金城江区','code' => '451202','phone_code' => '0778'],
                            ['name' => '南丹县','code' => '451221','phone_code' => '0778'],
                            ['name' => '天峨县','code' => '451222','phone_code' => '0778'],
                            ['name' => '凤山县','code' => '451223','phone_code' => '0778'],
                            ['name' => '东兰县','code' => '451224','phone_code' => '0778'],
                            ['name' => '罗城仫佬族自治县','code' => '451225','phone_code' => '0778'],
                            ['name' => '环江毛南族自治县','code' => '451226','phone_code' => '0778'],
                            ['name' => '巴马瑶族自治县','code' => '451227','phone_code' => '0778'],
                            ['name' => '都安瑶族自治县','code' => '451228','phone_code' => '0778'],
                            ['name' => '大化瑶族自治县','code' => '451229','phone_code' => '0778'],
                            ['name' => '宜州区','code' => '451203','phone_code' => '0778'],
                        ]
                    ],
                    [
                        'name' => '来宾市',
                        'code' => '451300',
                        'phone_code' => '1772',
                        'children' => [
                            ['name' => '兴宾区','code' => '451302','phone_code' => '1772'],
                            ['name' => '忻城县','code' => '451321','phone_code' => '1772'],
                            ['name' => '象州县','code' => '451322','phone_code' => '1772'],
                            ['name' => '武宣县','code' => '451323','phone_code' => '1772'],
                            ['name' => '金秀瑶族自治县','code' => '451324','phone_code' => '1772'],
                            ['name' => '合山市','code' => '451381','phone_code' => '1772'],
                        ]
                    ],
                    [
                        'name' => '崇左市',
                        'code' => '451400',
                        'phone_code' => '1771',
                        'children' => [
                            ['name' => '江州区','code' => '451402','phone_code' => '1771'],
                            ['name' => '扶绥县','code' => '451421','phone_code' => '1771'],
                            ['name' => '宁明县','code' => '451422','phone_code' => '1771'],
                            ['name' => '龙州县','code' => '451423','phone_code' => '1771'],
                            ['name' => '大新县','code' => '451424','phone_code' => '1771'],
                            ['name' => '天等县','code' => '451425','phone_code' => '1771'],
                            ['name' => '凭祥市','code' => '451481','phone_code' => '1771'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '海南省',
                'code' => '460000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '白沙黎族自治县',
                        'code' => '469025',
                        'phone_code' => '0802',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '保亭黎族苗族自治县',
                        'code' => '469029',
                        'phone_code' => '0801',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '昌江黎族自治县',
                        'code' => '469026',
                        'phone_code' => '0803',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '澄迈县',
                        'code' => '469023',
                        'phone_code' => '0804',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '海口市',
                        'code' => '460100',
                        'phone_code' => '0898',
                        'children' => [
                            ['name' => '秀英区','code' => '460105','phone_code' => '0898'],
                            ['name' => '龙华区','code' => '460106','phone_code' => '0898'],
                            ['name' => '琼山区','code' => '460107','phone_code' => '0898'],
                            ['name' => '美兰区','code' => '460108','phone_code' => '0898'],
                        ]
                    ],
                    [
                        'name' => '三亚市',
                        'code' => '460200',
                        'phone_code' => '0899',
                        'children' => [
                            ['name' => '海棠区','code' => '460202','phone_code' => '0899'],
                            ['name' => '吉阳区','code' => '460203','phone_code' => '0899'],
                            ['name' => '天涯区','code' => '460204','phone_code' => '0899'],
                            ['name' => '崖州区','code' => '460205','phone_code' => '0899'],
                        ]
                    ],
                    [
                        'name' => '三沙市',
                        'code' => '460300',
                        'phone_code' => '2898',
                        'children' => [
                            ['name' => '西沙群岛','code' => '460321','phone_code' => '1895'],
                            ['name' => '南沙群岛','code' => '460322','phone_code' => '1891'],
                            ['name' => '中沙群岛的岛礁及其海域','code' => '460323','phone_code' => '2801'],
                        ]
                    ],
                    [
                        'name' => '儋州市',
                        'code' => '460400',
                        'phone_code' => '0805',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '定安县',
                        'code' => '469021',
                        'phone_code' => '0806',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '东方市',
                        'code' => '469007',
                        'phone_code' => '0807',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '乐东黎族自治县',
                        'code' => '469027',
                        'phone_code' => '2802',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '临高县',
                        'code' => '469024',
                        'phone_code' => '1896',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '陵水黎族自治县',
                        'code' => '469028',
                        'phone_code' => '0809',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '琼海市',
                        'code' => '469002',
                        'phone_code' => '1894',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '琼中黎族苗族自治县',
                        'code' => '469030',
                        'phone_code' => '1899',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '屯昌县',
                        'code' => '469022',
                        'phone_code' => '1892',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '万宁市',
                        'code' => '469006',
                        'phone_code' => '1898',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '文昌市',
                        'code' => '469005',
                        'phone_code' => '1893',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '五指山市',
                        'code' => '469001',
                        'phone_code' => '1897',
                        'children' => [

                        ]
                    ],
                ]
            ],
            [
                'name' => '重庆市',
                'code' => '500000',
                'phone_code' => '023',
                'children' => [
                    [
                        'name' => '重庆城区',
                        'code' => '500100',
                        'phone_code' => '023',
                        'children' => [
                            ['name' => '万州区','code' => '500101','phone_code' => '023'],
                            ['name' => '涪陵区','code' => '500102','phone_code' => '023'],
                            ['name' => '渝中区','code' => '500103','phone_code' => '023'],
                            ['name' => '大渡口区','code' => '500104','phone_code' => '023'],
                            ['name' => '江北区','code' => '500105','phone_code' => '023'],
                            ['name' => '沙坪坝区','code' => '500106','phone_code' => '023'],
                            ['name' => '九龙坡区','code' => '500107','phone_code' => '023'],
                            ['name' => '南岸区','code' => '500108','phone_code' => '023'],
                            ['name' => '北碚区','code' => '500109','phone_code' => '023'],
                            ['name' => '綦江区','code' => '500110','phone_code' => '023'],
                            ['name' => '大足区','code' => '500111','phone_code' => '023'],
                            ['name' => '渝北区','code' => '500112','phone_code' => '023'],
                            ['name' => '巴南区','code' => '500113','phone_code' => '023'],
                            ['name' => '黔江区','code' => '500114','phone_code' => '023'],
                            ['name' => '长寿区','code' => '500115','phone_code' => '023'],
                            ['name' => '江津区','code' => '500116','phone_code' => '023'],
                            ['name' => '合川区','code' => '500117','phone_code' => '023'],
                            ['name' => '永川区','code' => '500118','phone_code' => '023'],
                            ['name' => '南川区','code' => '500119','phone_code' => '023'],
                            ['name' => '璧山区','code' => '500120','phone_code' => '023'],
                            ['name' => '铜梁区','code' => '500151','phone_code' => '023'],
                            ['name' => '潼南区','code' => '500152','phone_code' => '023'],
                            ['name' => '荣昌区','code' => '500153','phone_code' => '023'],
                            ['name' => '开州区','code' => '500154','phone_code' => '023'],
                        ]
                    ],
                    [
                        'name' => '重庆郊县',
                        'code' => '500200',
                        'phone_code' => '023',
                        'children' => [
                            ['name' => '梁平区','code' => '500155','phone_code' => '023'],
                            ['name' => '城口县','code' => '500229','phone_code' => '023'],
                            ['name' => '丰都县','code' => '500230','phone_code' => '023'],
                            ['name' => '垫江县','code' => '500231','phone_code' => '023'],
                            ['name' => '武隆区','code' => '500156','phone_code' => '023'],
                            ['name' => '忠县','code' => '500233','phone_code' => '023'],
                            ['name' => '云阳县','code' => '500235','phone_code' => '023'],
                            ['name' => '奉节县','code' => '500236','phone_code' => '023'],
                            ['name' => '巫山县','code' => '500237','phone_code' => '023'],
                            ['name' => '巫溪县','code' => '500238','phone_code' => '023'],
                            ['name' => '石柱土家族自治县','code' => '500240','phone_code' => '023'],
                            ['name' => '秀山土家族苗族自治县','code' => '500241','phone_code' => '023'],
                            ['name' => '酉阳土家族苗族自治县','code' => '500242','phone_code' => '023'],
                            ['name' => '彭水苗族土家族自治县','code' => '500243','phone_code' => '023'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '四川省',
                'code' => '510000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '成都市',
                        'code' => '510100',
                        'phone_code' => '028',
                        'children' => [
                            ['name' => '锦江区','code' => '510104','phone_code' => '028'],
                            ['name' => '青羊区','code' => '510105','phone_code' => '028'],
                            ['name' => '金牛区','code' => '510106','phone_code' => '028'],
                            ['name' => '武侯区','code' => '510107','phone_code' => '028'],
                            ['name' => '成华区','code' => '510108','phone_code' => '028'],
                            ['name' => '龙泉驿区','code' => '510112','phone_code' => '028'],
                            ['name' => '青白江区','code' => '510113','phone_code' => '028'],
                            ['name' => '新都区','code' => '510114','phone_code' => '028'],
                            ['name' => '温江区','code' => '510115','phone_code' => '028'],
                            ['name' => '双流区','code' => '510116','phone_code' => '028'],
                            ['name' => '金堂县','code' => '510121','phone_code' => '028'],
                            ['name' => '郫都区','code' => '510117','phone_code' => '028'],
                            ['name' => '大邑县','code' => '510129','phone_code' => '028'],
                            ['name' => '蒲江县','code' => '510131','phone_code' => '028'],
                            ['name' => '新津县','code' => '510132','phone_code' => '028'],
                            ['name' => '简阳市','code' => '510185','phone_code' => '028'],
                            ['name' => '都江堰市','code' => '510181','phone_code' => '028'],
                            ['name' => '彭州市','code' => '510182','phone_code' => '028'],
                            ['name' => '邛崃市','code' => '510183','phone_code' => '028'],
                            ['name' => '崇州市','code' => '510184','phone_code' => '028'],
                        ]
                    ],
                    [
                        'name' => '自贡市',
                        'code' => '510300',
                        'phone_code' => '0813',
                        'children' => [
                            ['name' => '自流井区','code' => '510302','phone_code' => '0813'],
                            ['name' => '贡井区','code' => '510303','phone_code' => '0813'],
                            ['name' => '大安区','code' => '510304','phone_code' => '0813'],
                            ['name' => '沿滩区','code' => '510311','phone_code' => '0813'],
                            ['name' => '荣县','code' => '510321','phone_code' => '0813'],
                            ['name' => '富顺县','code' => '510322','phone_code' => '0813'],
                        ]
                    ],
                    [
                        'name' => '攀枝花市',
                        'code' => '510400',
                        'phone_code' => '0812',
                        'children' => [
                            ['name' => '东区','code' => '510402','phone_code' => '0812'],
                            ['name' => '西区','code' => '510403','phone_code' => '0812'],
                            ['name' => '仁和区','code' => '510411','phone_code' => '0812'],
                            ['name' => '米易县','code' => '510421','phone_code' => '0812'],
                            ['name' => '盐边县','code' => '510422','phone_code' => '0812'],
                        ]
                    ],
                    [
                        'name' => '泸州市',
                        'code' => '510500',
                        'phone_code' => '0830',
                        'children' => [
                            ['name' => '江阳区','code' => '510502','phone_code' => '0830'],
                            ['name' => '纳溪区','code' => '510503','phone_code' => '0830'],
                            ['name' => '龙马潭区','code' => '510504','phone_code' => '0830'],
                            ['name' => '泸县','code' => '510521','phone_code' => '0830'],
                            ['name' => '合江县','code' => '510522','phone_code' => '0830'],
                            ['name' => '叙永县','code' => '510524','phone_code' => '0830'],
                            ['name' => '古蔺县','code' => '510525','phone_code' => '0830'],
                        ]
                    ],
                    [
                        'name' => '德阳市',
                        'code' => '510600',
                        'phone_code' => '0838',
                        'children' => [
                            ['name' => '旌阳区','code' => '510603','phone_code' => '0838'],
                            ['name' => '中江县','code' => '510623','phone_code' => '0838'],
                            ['name' => '罗江县','code' => '510626','phone_code' => '0838'],
                            ['name' => '广汉市','code' => '510681','phone_code' => '0838'],
                            ['name' => '什邡市','code' => '510682','phone_code' => '0838'],
                            ['name' => '绵竹市','code' => '510683','phone_code' => '0838'],
                        ]
                    ],
                    [
                        'name' => '绵阳市',
                        'code' => '510700',
                        'phone_code' => '0816',
                        'children' => [
                            ['name' => '涪城区','code' => '510703','phone_code' => '0816'],
                            ['name' => '游仙区','code' => '510704','phone_code' => '0816'],
                            ['name' => '安州区','code' => '510705','phone_code' => '0816'],
                            ['name' => '三台县','code' => '510722','phone_code' => '0816'],
                            ['name' => '盐亭县','code' => '510723','phone_code' => '0816'],
                            ['name' => '梓潼县','code' => '510725','phone_code' => '0816'],
                            ['name' => '北川羌族自治县','code' => '510726','phone_code' => '0816'],
                            ['name' => '平武县','code' => '510727','phone_code' => '0816'],
                            ['name' => '江油市','code' => '510781','phone_code' => '0816'],
                        ]
                    ],
                    [
                        'name' => '广元市',
                        'code' => '510800',
                        'phone_code' => '0839',
                        'children' => [
                            ['name' => '利州区','code' => '510802','phone_code' => '0839'],
                            ['name' => '昭化区','code' => '510811','phone_code' => '0839'],
                            ['name' => '朝天区','code' => '510812','phone_code' => '0839'],
                            ['name' => '旺苍县','code' => '510821','phone_code' => '0839'],
                            ['name' => '青川县','code' => '510822','phone_code' => '0839'],
                            ['name' => '剑阁县','code' => '510823','phone_code' => '0839'],
                            ['name' => '苍溪县','code' => '510824','phone_code' => '0839'],
                        ]
                    ],
                    [
                        'name' => '遂宁市',
                        'code' => '510900',
                        'phone_code' => '0825',
                        'children' => [
                            ['name' => '船山区','code' => '510903','phone_code' => '0825'],
                            ['name' => '安居区','code' => '510904','phone_code' => '0825'],
                            ['name' => '蓬溪县','code' => '510921','phone_code' => '0825'],
                            ['name' => '射洪县','code' => '510922','phone_code' => '0825'],
                            ['name' => '大英县','code' => '510923','phone_code' => '0825'],
                        ]
                    ],
                    [
                        'name' => '内江市',
                        'code' => '511000',
                        'phone_code' => '1832',
                        'children' => [
                            ['name' => '市中区','code' => '511002','phone_code' => '1832'],
                            ['name' => '东兴区','code' => '511011','phone_code' => '1832'],
                            ['name' => '威远县','code' => '511024','phone_code' => '1832'],
                            ['name' => '资中县','code' => '511025','phone_code' => '1832'],
                            ['name' => '隆昌市','code' => '511028','phone_code' => '1832'],
                        ]
                    ],
                    [
                        'name' => '乐山市',
                        'code' => '511100',
                        'phone_code' => '0833',
                        'children' => [
                            ['name' => '市中区','code' => '511102','phone_code' => '0833'],
                            ['name' => '沙湾区','code' => '511111','phone_code' => '0833'],
                            ['name' => '五通桥区','code' => '511112','phone_code' => '0833'],
                            ['name' => '金口河区','code' => '511113','phone_code' => '0833'],
                            ['name' => '犍为县','code' => '511123','phone_code' => '0833'],
                            ['name' => '井研县','code' => '511124','phone_code' => '0833'],
                            ['name' => '夹江县','code' => '511126','phone_code' => '0833'],
                            ['name' => '沐川县','code' => '511129','phone_code' => '0833'],
                            ['name' => '峨边彝族自治县','code' => '511132','phone_code' => '0833'],
                            ['name' => '马边彝族自治县','code' => '511133','phone_code' => '0833'],
                            ['name' => '峨眉山市','code' => '511181','phone_code' => '0833'],
                        ]
                    ],
                    [
                        'name' => '南充市',
                        'code' => '511300',
                        'phone_code' => '0817',
                        'children' => [
                            ['name' => '顺庆区','code' => '511302','phone_code' => '0817'],
                            ['name' => '高坪区','code' => '511303','phone_code' => '0817'],
                            ['name' => '嘉陵区','code' => '511304','phone_code' => '0817'],
                            ['name' => '南部县','code' => '511321','phone_code' => '0817'],
                            ['name' => '营山县','code' => '511322','phone_code' => '0817'],
                            ['name' => '蓬安县','code' => '511323','phone_code' => '0817'],
                            ['name' => '仪陇县','code' => '511324','phone_code' => '0817'],
                            ['name' => '西充县','code' => '511325','phone_code' => '0817'],
                            ['name' => '阆中市','code' => '511381','phone_code' => '0817'],
                        ]
                    ],
                    [
                        'name' => '眉山市',
                        'code' => '511400',
                        'phone_code' => '1833',
                        'children' => [
                            ['name' => '东坡区','code' => '511402','phone_code' => '1833'],
                            ['name' => '彭山区','code' => '511403','phone_code' => '1833'],
                            ['name' => '仁寿县','code' => '511421','phone_code' => '1833'],
                            ['name' => '洪雅县','code' => '511423','phone_code' => '1833'],
                            ['name' => '丹棱县','code' => '511424','phone_code' => '1833'],
                            ['name' => '青神县','code' => '511425','phone_code' => '1833'],
                        ]
                    ],
                    [
                        'name' => '宜宾市',
                        'code' => '511500',
                        'phone_code' => '0831',
                        'children' => [
                            ['name' => '翠屏区','code' => '511502','phone_code' => '0831'],
                            ['name' => '南溪区','code' => '511503','phone_code' => '0831'],
                            ['name' => '宜宾县','code' => '511521','phone_code' => '0831'],
                            ['name' => '江安县','code' => '511523','phone_code' => '0831'],
                            ['name' => '长宁县','code' => '511524','phone_code' => '0831'],
                            ['name' => '高县','code' => '511525','phone_code' => '0831'],
                            ['name' => '珙县','code' => '511526','phone_code' => '0831'],
                            ['name' => '筠连县','code' => '511527','phone_code' => '0831'],
                            ['name' => '兴文县','code' => '511528','phone_code' => '0831'],
                            ['name' => '屏山县','code' => '511529','phone_code' => '0831'],
                        ]
                    ],
                    [
                        'name' => '广安市',
                        'code' => '511600',
                        'phone_code' => '0826',
                        'children' => [
                            ['name' => '广安区','code' => '511602','phone_code' => '0826'],
                            ['name' => '前锋区','code' => '511603','phone_code' => '0826'],
                            ['name' => '岳池县','code' => '511621','phone_code' => '0826'],
                            ['name' => '武胜县','code' => '511622','phone_code' => '0826'],
                            ['name' => '邻水县','code' => '511623','phone_code' => '0826'],
                            ['name' => '华蓥市','code' => '511681','phone_code' => '0826'],
                        ]
                    ],
                    [
                        'name' => '达州市',
                        'code' => '511700',
                        'phone_code' => '0818',
                        'children' => [
                            ['name' => '通川区','code' => '511702','phone_code' => '0818'],
                            ['name' => '达川区','code' => '511703','phone_code' => '0818'],
                            ['name' => '宣汉县','code' => '511722','phone_code' => '0818'],
                            ['name' => '开江县','code' => '511723','phone_code' => '0818'],
                            ['name' => '大竹县','code' => '511724','phone_code' => '0818'],
                            ['name' => '渠县','code' => '511725','phone_code' => '0818'],
                            ['name' => '万源市','code' => '511781','phone_code' => '0818'],
                        ]
                    ],
                    [
                        'name' => '雅安市',
                        'code' => '511800',
                        'phone_code' => '0835',
                        'children' => [
                            ['name' => '雨城区','code' => '511802','phone_code' => '0835'],
                            ['name' => '名山区','code' => '511803','phone_code' => '0835'],
                            ['name' => '荥经县','code' => '511822','phone_code' => '0835'],
                            ['name' => '汉源县','code' => '511823','phone_code' => '0835'],
                            ['name' => '石棉县','code' => '511824','phone_code' => '0835'],
                            ['name' => '天全县','code' => '511825','phone_code' => '0835'],
                            ['name' => '芦山县','code' => '511826','phone_code' => '0835'],
                            ['name' => '宝兴县','code' => '511827','phone_code' => '0835'],
                        ]
                    ],
                    [
                        'name' => '巴中市',
                        'code' => '511900',
                        'phone_code' => '0827',
                        'children' => [
                            ['name' => '巴州区','code' => '511902','phone_code' => '0827'],
                            ['name' => '恩阳区','code' => '511903','phone_code' => '0827'],
                            ['name' => '通江县','code' => '511921','phone_code' => '0827'],
                            ['name' => '南江县','code' => '511922','phone_code' => '0827'],
                            ['name' => '平昌县','code' => '511923','phone_code' => '0827'],
                        ]
                    ],
                    [
                        'name' => '资阳市',
                        'code' => '512000',
                        'phone_code' => '0832',
                        'children' => [
                            ['name' => '雁江区','code' => '512002','phone_code' => '0832'],
                            ['name' => '安岳县','code' => '512021','phone_code' => '0832'],
                            ['name' => '乐至县','code' => '512022','phone_code' => '0832'],
                        ]
                    ],
                    [
                        'name' => '阿坝藏族羌族自治州',
                        'code' => '513200',
                        'phone_code' => '0837',
                        'children' => [
                            ['name' => '马尔康市','code' => '513201','phone_code' => '0837'],
                            ['name' => '汶川县','code' => '513221','phone_code' => '0837'],
                            ['name' => '理县','code' => '513222','phone_code' => '0837'],
                            ['name' => '茂县','code' => '513223','phone_code' => '0837'],
                            ['name' => '松潘县','code' => '513224','phone_code' => '0837'],
                            ['name' => '九寨沟县','code' => '513225','phone_code' => '0837'],
                            ['name' => '金川县','code' => '513226','phone_code' => '0837'],
                            ['name' => '小金县','code' => '513227','phone_code' => '0837'],
                            ['name' => '黑水县','code' => '513228','phone_code' => '0837'],
                            ['name' => '壤塘县','code' => '513230','phone_code' => '0837'],
                            ['name' => '阿坝县','code' => '513231','phone_code' => '0837'],
                            ['name' => '若尔盖县','code' => '513232','phone_code' => '0837'],
                            ['name' => '红原县','code' => '513233','phone_code' => '0837'],
                        ]
                    ],
                    [
                        'name' => '甘孜藏族自治州',
                        'code' => '513300',
                        'phone_code' => '0836',
                        'children' => [
                            ['name' => '康定市','code' => '513301','phone_code' => '0836'],
                            ['name' => '泸定县','code' => '513322','phone_code' => '0836'],
                            ['name' => '丹巴县','code' => '513323','phone_code' => '0836'],
                            ['name' => '九龙县','code' => '513324','phone_code' => '0836'],
                            ['name' => '雅江县','code' => '513325','phone_code' => '0836'],
                            ['name' => '道孚县','code' => '513326','phone_code' => '0836'],
                            ['name' => '炉霍县','code' => '513327','phone_code' => '0836'],
                            ['name' => '甘孜县','code' => '513328','phone_code' => '0836'],
                            ['name' => '新龙县','code' => '513329','phone_code' => '0836'],
                            ['name' => '德格县','code' => '513330','phone_code' => '0836'],
                            ['name' => '白玉县','code' => '513331','phone_code' => '0836'],
                            ['name' => '石渠县','code' => '513332','phone_code' => '0836'],
                            ['name' => '色达县','code' => '513333','phone_code' => '0836'],
                            ['name' => '理塘县','code' => '513334','phone_code' => '0836'],
                            ['name' => '巴塘县','code' => '513335','phone_code' => '0836'],
                            ['name' => '乡城县','code' => '513336','phone_code' => '0836'],
                            ['name' => '稻城县','code' => '513337','phone_code' => '0836'],
                            ['name' => '得荣县','code' => '513338','phone_code' => '0836'],
                        ]
                    ],
                    [
                        'name' => '凉山彝族自治州',
                        'code' => '513400',
                        'phone_code' => '0834',
                        'children' => [
                            ['name' => '西昌市','code' => '513401','phone_code' => '0834'],
                            ['name' => '木里藏族自治县','code' => '513422','phone_code' => '0834'],
                            ['name' => '盐源县','code' => '513423','phone_code' => '0834'],
                            ['name' => '德昌县','code' => '513424','phone_code' => '0834'],
                            ['name' => '会理县','code' => '513425','phone_code' => '0834'],
                            ['name' => '会东县','code' => '513426','phone_code' => '0834'],
                            ['name' => '宁南县','code' => '513427','phone_code' => '0834'],
                            ['name' => '普格县','code' => '513428','phone_code' => '0834'],
                            ['name' => '布拖县','code' => '513429','phone_code' => '0834'],
                            ['name' => '金阳县','code' => '513430','phone_code' => '0834'],
                            ['name' => '昭觉县','code' => '513431','phone_code' => '0834'],
                            ['name' => '喜德县','code' => '513432','phone_code' => '0834'],
                            ['name' => '冕宁县','code' => '513433','phone_code' => '0834'],
                            ['name' => '越西县','code' => '513434','phone_code' => '0834'],
                            ['name' => '甘洛县','code' => '513435','phone_code' => '0834'],
                            ['name' => '美姑县','code' => '513436','phone_code' => '0834'],
                            ['name' => '雷波县','code' => '513437','phone_code' => '0834'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '贵州省',
                'code' => '520000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '贵阳市',
                        'code' => '520100',
                        'phone_code' => '0851',
                        'children' => [
                            ['name' => '南明区','code' => '520102','phone_code' => '0851'],
                            ['name' => '云岩区','code' => '520103','phone_code' => '0851'],
                            ['name' => '花溪区','code' => '520111','phone_code' => '0851'],
                            ['name' => '乌当区','code' => '520112','phone_code' => '0851'],
                            ['name' => '白云区','code' => '520113','phone_code' => '0851'],
                            ['name' => '观山湖区','code' => '520115','phone_code' => '0851'],
                            ['name' => '开阳县','code' => '520121','phone_code' => '0851'],
                            ['name' => '息烽县','code' => '520122','phone_code' => '0851'],
                            ['name' => '修文县','code' => '520123','phone_code' => '0851'],
                            ['name' => '清镇市','code' => '520181','phone_code' => '0851'],
                        ]
                    ],
                    [
                        'name' => '六盘水市',
                        'code' => '520200',
                        'phone_code' => '0858',
                        'children' => [
                            ['name' => '钟山区','code' => '520201','phone_code' => '0858'],
                            ['name' => '六枝特区','code' => '520203','phone_code' => '0858'],
                            ['name' => '水城县','code' => '520221','phone_code' => '0858'],
                            ['name' => '盘州市','code' => '520222','phone_code' => '0858'],
                        ]
                    ],
                    [
                        'name' => '遵义市',
                        'code' => '520300',
                        'phone_code' => '0852',
                        'children' => [
                            ['name' => '红花岗区','code' => '520302','phone_code' => '0852'],
                            ['name' => '汇川区','code' => '520303','phone_code' => '0852'],
                            ['name' => '播州区','code' => '520304','phone_code' => '0852'],
                            ['name' => '桐梓县','code' => '520322','phone_code' => '0852'],
                            ['name' => '绥阳县','code' => '520323','phone_code' => '0852'],
                            ['name' => '正安县','code' => '520324','phone_code' => '0852'],
                            ['name' => '道真仡佬族苗族自治县','code' => '520325','phone_code' => '0852'],
                            ['name' => '务川仡佬族苗族自治县','code' => '520326','phone_code' => '0852'],
                            ['name' => '凤冈县','code' => '520327','phone_code' => '0852'],
                            ['name' => '湄潭县','code' => '520328','phone_code' => '0852'],
                            ['name' => '余庆县','code' => '520329','phone_code' => '0852'],
                            ['name' => '习水县','code' => '520330','phone_code' => '0852'],
                            ['name' => '赤水市','code' => '520381','phone_code' => '0852'],
                            ['name' => '仁怀市','code' => '520382','phone_code' => '0852'],
                        ]
                    ],
                    [
                        'name' => '安顺市',
                        'code' => '520400',
                        'phone_code' => '0853',
                        'children' => [
                            ['name' => '西秀区','code' => '520402','phone_code' => '0853'],
                            ['name' => '平坝区','code' => '520403','phone_code' => '0853'],
                            ['name' => '普定县','code' => '520422','phone_code' => '0853'],
                            ['name' => '镇宁布依族苗族自治县','code' => '520423','phone_code' => '0853'],
                            ['name' => '关岭布依族苗族自治县','code' => '520424','phone_code' => '0853'],
                            ['name' => '紫云苗族布依族自治县','code' => '520425','phone_code' => '0853'],
                        ]
                    ],
                    [
                        'name' => '毕节市',
                        'code' => '520500',
                        'phone_code' => '0857',
                        'children' => [
                            ['name' => '七星关区','code' => '520502','phone_code' => '0857'],
                            ['name' => '大方县','code' => '520521','phone_code' => '0857'],
                            ['name' => '黔西县','code' => '520522','phone_code' => '0857'],
                            ['name' => '金沙县','code' => '520523','phone_code' => '0857'],
                            ['name' => '织金县','code' => '520524','phone_code' => '0857'],
                            ['name' => '纳雍县','code' => '520525','phone_code' => '0857'],
                            ['name' => '威宁彝族回族苗族自治县','code' => '520526','phone_code' => '0857'],
                            ['name' => '赫章县','code' => '520527','phone_code' => '0857'],
                        ]
                    ],
                    [
                        'name' => '铜仁市',
                        'code' => '520600',
                        'phone_code' => '0856',
                        'children' => [
                            ['name' => '碧江区','code' => '520602','phone_code' => '0856'],
                            ['name' => '万山区','code' => '520603','phone_code' => '0856'],
                            ['name' => '江口县','code' => '520621','phone_code' => '0856'],
                            ['name' => '玉屏侗族自治县','code' => '520622','phone_code' => '0856'],
                            ['name' => '石阡县','code' => '520623','phone_code' => '0856'],
                            ['name' => '思南县','code' => '520624','phone_code' => '0856'],
                            ['name' => '印江土家族苗族自治县','code' => '520625','phone_code' => '0856'],
                            ['name' => '德江县','code' => '520626','phone_code' => '0856'],
                            ['name' => '沿河土家族自治县','code' => '520627','phone_code' => '0856'],
                            ['name' => '松桃苗族自治县','code' => '520628','phone_code' => '0856'],
                        ]
                    ],
                    [
                        'name' => '黔西南布依族苗族自治州',
                        'code' => '522300',
                        'phone_code' => '0859',
                        'children' => [
                            ['name' => '兴义市','code' => '522301','phone_code' => '0859'],
                            ['name' => '兴仁县','code' => '522322','phone_code' => '0859'],
                            ['name' => '普安县','code' => '522323','phone_code' => '0859'],
                            ['name' => '晴隆县','code' => '522324','phone_code' => '0859'],
                            ['name' => '贞丰县','code' => '522325','phone_code' => '0859'],
                            ['name' => '望谟县','code' => '522326','phone_code' => '0859'],
                            ['name' => '册亨县','code' => '522327','phone_code' => '0859'],
                            ['name' => '安龙县','code' => '522328','phone_code' => '0859'],
                        ]
                    ],
                    [
                        'name' => '黔东南苗族侗族自治州',
                        'code' => '522600',
                        'phone_code' => '0855',
                        'children' => [
                            ['name' => '凯里市','code' => '522601','phone_code' => '0855'],
                            ['name' => '黄平县','code' => '522622','phone_code' => '0855'],
                            ['name' => '施秉县','code' => '522623','phone_code' => '0855'],
                            ['name' => '三穗县','code' => '522624','phone_code' => '0855'],
                            ['name' => '镇远县','code' => '522625','phone_code' => '0855'],
                            ['name' => '岑巩县','code' => '522626','phone_code' => '0855'],
                            ['name' => '天柱县','code' => '522627','phone_code' => '0855'],
                            ['name' => '锦屏县','code' => '522628','phone_code' => '0855'],
                            ['name' => '剑河县','code' => '522629','phone_code' => '0855'],
                            ['name' => '台江县','code' => '522630','phone_code' => '0855'],
                            ['name' => '黎平县','code' => '522631','phone_code' => '0855'],
                            ['name' => '榕江县','code' => '522632','phone_code' => '0855'],
                            ['name' => '从江县','code' => '522633','phone_code' => '0855'],
                            ['name' => '雷山县','code' => '522634','phone_code' => '0855'],
                            ['name' => '麻江县','code' => '522635','phone_code' => '0855'],
                            ['name' => '丹寨县','code' => '522636','phone_code' => '0855'],
                        ]
                    ],
                    [
                        'name' => '黔南布依族苗族自治州',
                        'code' => '522700',
                        'phone_code' => '0854',
                        'children' => [
                            ['name' => '都匀市','code' => '522701','phone_code' => '0854'],
                            ['name' => '福泉市','code' => '522702','phone_code' => '0854'],
                            ['name' => '荔波县','code' => '522722','phone_code' => '0854'],
                            ['name' => '贵定县','code' => '522723','phone_code' => '0854'],
                            ['name' => '瓮安县','code' => '522725','phone_code' => '0854'],
                            ['name' => '独山县','code' => '522726','phone_code' => '0854'],
                            ['name' => '平塘县','code' => '522727','phone_code' => '0854'],
                            ['name' => '罗甸县','code' => '522728','phone_code' => '0854'],
                            ['name' => '长顺县','code' => '522729','phone_code' => '0854'],
                            ['name' => '龙里县','code' => '522730','phone_code' => '0854'],
                            ['name' => '惠水县','code' => '522731','phone_code' => '0854'],
                            ['name' => '三都水族自治县','code' => '522732','phone_code' => '0854'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '云南省',
                'code' => '530000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '昆明市',
                        'code' => '530100',
                        'phone_code' => '0871',
                        'children' => [
                            ['name' => '五华区','code' => '530102','phone_code' => '0871'],
                            ['name' => '盘龙区','code' => '530103','phone_code' => '0871'],
                            ['name' => '官渡区','code' => '530111','phone_code' => '0871'],
                            ['name' => '西山区','code' => '530112','phone_code' => '0871'],
                            ['name' => '东川区','code' => '530113','phone_code' => '0871'],
                            ['name' => '呈贡区','code' => '530114','phone_code' => '0871'],
                            ['name' => '晋宁区','code' => '530115','phone_code' => '0871'],
                            ['name' => '富民县','code' => '530124','phone_code' => '0871'],
                            ['name' => '宜良县','code' => '530125','phone_code' => '0871'],
                            ['name' => '石林彝族自治县','code' => '530126','phone_code' => '0871'],
                            ['name' => '嵩明县','code' => '530127','phone_code' => '0871'],
                            ['name' => '禄劝彝族苗族自治县','code' => '530128','phone_code' => '0871'],
                            ['name' => '寻甸回族彝族自治县','code' => '530129','phone_code' => '0871'],
                            ['name' => '安宁市','code' => '530181','phone_code' => '0871'],
                        ]
                    ],
                    [
                        'name' => '曲靖市',
                        'code' => '530300',
                        'phone_code' => '0874',
                        'children' => [
                            ['name' => '麒麟区','code' => '530302','phone_code' => '0874'],
                            ['name' => '沾益区','code' => '530303','phone_code' => '0874'],
                            ['name' => '马龙县','code' => '530321','phone_code' => '0874'],
                            ['name' => '陆良县','code' => '530322','phone_code' => '0874'],
                            ['name' => '师宗县','code' => '530323','phone_code' => '0874'],
                            ['name' => '罗平县','code' => '530324','phone_code' => '0874'],
                            ['name' => '富源县','code' => '530325','phone_code' => '0874'],
                            ['name' => '会泽县','code' => '530326','phone_code' => '0874'],
                            ['name' => '宣威市','code' => '530381','phone_code' => '0874'],
                        ]
                    ],
                    [
                        'name' => '玉溪市',
                        'code' => '530400',
                        'phone_code' => '0877',
                        'children' => [
                            ['name' => '红塔区','code' => '530402','phone_code' => '0877'],
                            ['name' => '江川区','code' => '530403','phone_code' => '0877'],
                            ['name' => '澄江县','code' => '530422','phone_code' => '0877'],
                            ['name' => '通海县','code' => '530423','phone_code' => '0877'],
                            ['name' => '华宁县','code' => '530424','phone_code' => '0877'],
                            ['name' => '易门县','code' => '530425','phone_code' => '0877'],
                            ['name' => '峨山彝族自治县','code' => '530426','phone_code' => '0877'],
                            ['name' => '新平彝族傣族自治县','code' => '530427','phone_code' => '0877'],
                            ['name' => '元江哈尼族彝族傣族自治县','code' => '530428','phone_code' => '0877'],
                        ]
                    ],
                    [
                        'name' => '保山市',
                        'code' => '530500',
                        'phone_code' => '0875',
                        'children' => [
                            ['name' => '隆阳区','code' => '530502','phone_code' => '0875'],
                            ['name' => '施甸县','code' => '530521','phone_code' => '0875'],
                            ['name' => '龙陵县','code' => '530523','phone_code' => '0875'],
                            ['name' => '昌宁县','code' => '530524','phone_code' => '0875'],
                            ['name' => '腾冲市','code' => '530581','phone_code' => '0875'],
                        ]
                    ],
                    [
                        'name' => '昭通市',
                        'code' => '530600',
                        'phone_code' => '0870',
                        'children' => [
                            ['name' => '昭阳区','code' => '530602','phone_code' => '0870'],
                            ['name' => '鲁甸县','code' => '530621','phone_code' => '0870'],
                            ['name' => '巧家县','code' => '530622','phone_code' => '0870'],
                            ['name' => '盐津县','code' => '530623','phone_code' => '0870'],
                            ['name' => '大关县','code' => '530624','phone_code' => '0870'],
                            ['name' => '永善县','code' => '530625','phone_code' => '0870'],
                            ['name' => '绥江县','code' => '530626','phone_code' => '0870'],
                            ['name' => '镇雄县','code' => '530627','phone_code' => '0870'],
                            ['name' => '彝良县','code' => '530628','phone_code' => '0870'],
                            ['name' => '威信县','code' => '530629','phone_code' => '0870'],
                            ['name' => '水富县','code' => '530630','phone_code' => '0870'],
                        ]
                    ],
                    [
                        'name' => '丽江市',
                        'code' => '530700',
                        'phone_code' => '0888',
                        'children' => [
                            ['name' => '古城区','code' => '530702','phone_code' => '0888'],
                            ['name' => '玉龙纳西族自治县','code' => '530721','phone_code' => '0888'],
                            ['name' => '永胜县','code' => '530722','phone_code' => '0888'],
                            ['name' => '华坪县','code' => '530723','phone_code' => '0888'],
                            ['name' => '宁蒗彝族自治县','code' => '530724','phone_code' => '0888'],
                        ]
                    ],
                    [
                        'name' => '普洱市',
                        'code' => '530800',
                        'phone_code' => '0879',
                        'children' => [
                            ['name' => '思茅区','code' => '530802','phone_code' => '0879'],
                            ['name' => '宁洱哈尼族彝族自治县','code' => '530821','phone_code' => '0879'],
                            ['name' => '墨江哈尼族自治县','code' => '530822','phone_code' => '0879'],
                            ['name' => '景东彝族自治县','code' => '530823','phone_code' => '0879'],
                            ['name' => '景谷傣族彝族自治县','code' => '530824','phone_code' => '0879'],
                            ['name' => '镇沅彝族哈尼族拉祜族自治县','code' => '530825','phone_code' => '0879'],
                            ['name' => '江城哈尼族彝族自治县','code' => '530826','phone_code' => '0879'],
                            ['name' => '孟连傣族拉祜族佤族自治县','code' => '530827','phone_code' => '0879'],
                            ['name' => '澜沧拉祜族自治县','code' => '530828','phone_code' => '0879'],
                            ['name' => '西盟佤族自治县','code' => '530829','phone_code' => '0879'],
                        ]
                    ],
                    [
                        'name' => '临沧市',
                        'code' => '530900',
                        'phone_code' => '0883',
                        'children' => [
                            ['name' => '临翔区','code' => '530902','phone_code' => '0883'],
                            ['name' => '凤庆县','code' => '530921','phone_code' => '0883'],
                            ['name' => '云县','code' => '530922','phone_code' => '0883'],
                            ['name' => '永德县','code' => '530923','phone_code' => '0883'],
                            ['name' => '镇康县','code' => '530924','phone_code' => '0883'],
                            ['name' => '双江拉祜族佤族布朗族傣族自治县','code' => '530925','phone_code' => '0883'],
                            ['name' => '耿马傣族佤族自治县','code' => '530926','phone_code' => '0883'],
                            ['name' => '沧源佤族自治县','code' => '530927','phone_code' => '0883'],
                        ]
                    ],
                    [
                        'name' => '楚雄彝族自治州',
                        'code' => '532300',
                        'phone_code' => '0878',
                        'children' => [
                            ['name' => '楚雄市','code' => '532301','phone_code' => '0878'],
                            ['name' => '双柏县','code' => '532322','phone_code' => '0878'],
                            ['name' => '牟定县','code' => '532323','phone_code' => '0878'],
                            ['name' => '南华县','code' => '532324','phone_code' => '0878'],
                            ['name' => '姚安县','code' => '532325','phone_code' => '0878'],
                            ['name' => '大姚县','code' => '532326','phone_code' => '0878'],
                            ['name' => '永仁县','code' => '532327','phone_code' => '0878'],
                            ['name' => '元谋县','code' => '532328','phone_code' => '0878'],
                            ['name' => '武定县','code' => '532329','phone_code' => '0878'],
                            ['name' => '禄丰县','code' => '532331','phone_code' => '0878'],
                        ]
                    ],
                    [
                        'name' => '红河哈尼族彝族自治州',
                        'code' => '532500',
                        'phone_code' => '0873',
                        'children' => [
                            ['name' => '个旧市','code' => '532501','phone_code' => '0873'],
                            ['name' => '开远市','code' => '532502','phone_code' => '0873'],
                            ['name' => '蒙自市','code' => '532503','phone_code' => '0873'],
                            ['name' => '弥勒市','code' => '532504','phone_code' => '0873'],
                            ['name' => '屏边苗族自治县','code' => '532523','phone_code' => '0873'],
                            ['name' => '建水县','code' => '532524','phone_code' => '0873'],
                            ['name' => '石屏县','code' => '532525','phone_code' => '0873'],
                            ['name' => '泸西县','code' => '532527','phone_code' => '0873'],
                            ['name' => '元阳县','code' => '532528','phone_code' => '0873'],
                            ['name' => '红河县','code' => '532529','phone_code' => '0873'],
                            ['name' => '金平苗族瑶族傣族自治县','code' => '532530','phone_code' => '0873'],
                            ['name' => '绿春县','code' => '532531','phone_code' => '0873'],
                            ['name' => '河口瑶族自治县','code' => '532532','phone_code' => '0873'],
                        ]
                    ],
                    [
                        'name' => '文山壮族苗族自治州',
                        'code' => '532600',
                        'phone_code' => '0876',
                        'children' => [
                            ['name' => '文山市','code' => '532601','phone_code' => '0876'],
                            ['name' => '砚山县','code' => '532622','phone_code' => '0876'],
                            ['name' => '西畴县','code' => '532623','phone_code' => '0876'],
                            ['name' => '麻栗坡县','code' => '532624','phone_code' => '0876'],
                            ['name' => '马关县','code' => '532625','phone_code' => '0876'],
                            ['name' => '丘北县','code' => '532626','phone_code' => '0876'],
                            ['name' => '广南县','code' => '532627','phone_code' => '0876'],
                            ['name' => '富宁县','code' => '532628','phone_code' => '0876'],
                        ]
                    ],
                    [
                        'name' => '西双版纳傣族自治州',
                        'code' => '532800',
                        'phone_code' => '0691',
                        'children' => [
                            ['name' => '景洪市','code' => '532801','phone_code' => '0691'],
                            ['name' => '勐海县','code' => '532822','phone_code' => '0691'],
                            ['name' => '勐腊县','code' => '532823','phone_code' => '0691'],
                        ]
                    ],
                    [
                        'name' => '大理白族自治州',
                        'code' => '532900',
                        'phone_code' => '0872',
                        'children' => [
                            ['name' => '大理市','code' => '532901','phone_code' => '0872'],
                            ['name' => '漾濞彝族自治县','code' => '532922','phone_code' => '0872'],
                            ['name' => '祥云县','code' => '532923','phone_code' => '0872'],
                            ['name' => '宾川县','code' => '532924','phone_code' => '0872'],
                            ['name' => '弥渡县','code' => '532925','phone_code' => '0872'],
                            ['name' => '南涧彝族自治县','code' => '532926','phone_code' => '0872'],
                            ['name' => '巍山彝族回族自治县','code' => '532927','phone_code' => '0872'],
                            ['name' => '永平县','code' => '532928','phone_code' => '0872'],
                            ['name' => '云龙县','code' => '532929','phone_code' => '0872'],
                            ['name' => '洱源县','code' => '532930','phone_code' => '0872'],
                            ['name' => '剑川县','code' => '532931','phone_code' => '0872'],
                            ['name' => '鹤庆县','code' => '532932','phone_code' => '0872'],
                        ]
                    ],
                    [
                        'name' => '德宏傣族景颇族自治州',
                        'code' => '533100',
                        'phone_code' => '0692',
                        'children' => [
                            ['name' => '瑞丽市','code' => '533102','phone_code' => '0692'],
                            ['name' => '芒市','code' => '533103','phone_code' => '0692'],
                            ['name' => '梁河县','code' => '533122','phone_code' => '0692'],
                            ['name' => '盈江县','code' => '533123','phone_code' => '0692'],
                            ['name' => '陇川县','code' => '533124','phone_code' => '0692'],
                        ]
                    ],
                    [
                        'name' => '怒江傈僳族自治州',
                        'code' => '533300',
                        'phone_code' => '0886',
                        'children' => [
                            ['name' => '泸水市','code' => '533301','phone_code' => '0886'],
                            ['name' => '福贡县','code' => '533323','phone_code' => '0886'],
                            ['name' => '贡山独龙族怒族自治县','code' => '533324','phone_code' => '0886'],
                            ['name' => '兰坪白族普米族自治县','code' => '533325','phone_code' => '0886'],
                        ]
                    ],
                    [
                        'name' => '迪庆藏族自治州',
                        'code' => '533400',
                        'phone_code' => '0887',
                        'children' => [
                            ['name' => '香格里拉市','code' => '533401','phone_code' => '0887'],
                            ['name' => '德钦县','code' => '533422','phone_code' => '0887'],
                            ['name' => '维西傈僳族自治县','code' => '533423','phone_code' => '0887'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '西藏自治区',
                'code' => '540000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '拉萨市',
                        'code' => '540100',
                        'phone_code' => '0891',
                        'children' => [
                            ['name' => '城关区','code' => '540102','phone_code' => '0891'],
                            ['name' => '堆龙德庆区','code' => '540103','phone_code' => '0891'],
                            ['name' => '林周县','code' => '540121','phone_code' => '0891'],
                            ['name' => '当雄县','code' => '540122','phone_code' => '0891'],
                            ['name' => '尼木县','code' => '540123','phone_code' => '0891'],
                            ['name' => '曲水县','code' => '540124','phone_code' => '0891'],
                            ['name' => '达孜县','code' => '540126','phone_code' => '0891'],
                            ['name' => '墨竹工卡县','code' => '540127','phone_code' => '0891'],
                        ]
                    ],
                    [
                        'name' => '日喀则市',
                        'code' => '540200',
                        'phone_code' => '0892',
                        'children' => [
                            ['name' => '桑珠孜区','code' => '540202','phone_code' => '0892'],
                            ['name' => '南木林县','code' => '540221','phone_code' => '0892'],
                            ['name' => '江孜县','code' => '540222','phone_code' => '0892'],
                            ['name' => '定日县','code' => '540223','phone_code' => '0892'],
                            ['name' => '萨迦县','code' => '540224','phone_code' => '0892'],
                            ['name' => '拉孜县','code' => '540225','phone_code' => '0892'],
                            ['name' => '昂仁县','code' => '540226','phone_code' => '0892'],
                            ['name' => '谢通门县','code' => '540227','phone_code' => '0892'],
                            ['name' => '白朗县','code' => '540228','phone_code' => '0892'],
                            ['name' => '仁布县','code' => '540229','phone_code' => '0892'],
                            ['name' => '康马县','code' => '540230','phone_code' => '0892'],
                            ['name' => '定结县','code' => '540231','phone_code' => '0892'],
                            ['name' => '仲巴县','code' => '540232','phone_code' => '0892'],
                            ['name' => '亚东县','code' => '540233','phone_code' => '0892'],
                            ['name' => '吉隆县','code' => '540234','phone_code' => '0892'],
                            ['name' => '聂拉木县','code' => '540235','phone_code' => '0892'],
                            ['name' => '萨嘎县','code' => '540236','phone_code' => '0892'],
                            ['name' => '岗巴县','code' => '540237','phone_code' => '0892'],
                        ]
                    ],
                    [
                        'name' => '昌都市',
                        'code' => '540300',
                        'phone_code' => '0895',
                        'children' => [
                            ['name' => '卡若区','code' => '540302','phone_code' => '0895'],
                            ['name' => '江达县','code' => '540321','phone_code' => '0895'],
                            ['name' => '贡觉县','code' => '540322','phone_code' => '0895'],
                            ['name' => '类乌齐县','code' => '540323','phone_code' => '0895'],
                            ['name' => '丁青县','code' => '540324','phone_code' => '0895'],
                            ['name' => '察雅县','code' => '540325','phone_code' => '0895'],
                            ['name' => '八宿县','code' => '540326','phone_code' => '0895'],
                            ['name' => '左贡县','code' => '540327','phone_code' => '0895'],
                            ['name' => '芒康县','code' => '540328','phone_code' => '0895'],
                            ['name' => '洛隆县','code' => '540329','phone_code' => '0895'],
                            ['name' => '边坝县','code' => '540330','phone_code' => '0895'],
                        ]
                    ],
                    [
                        'name' => '林芝市',
                        'code' => '540400',
                        'phone_code' => '0894',
                        'children' => [
                            ['name' => '巴宜区','code' => '540402','phone_code' => '0894'],
                            ['name' => '工布江达县','code' => '540421','phone_code' => '0894'],
                            ['name' => '米林县','code' => '540422','phone_code' => '0894'],
                            ['name' => '墨脱县','code' => '540423','phone_code' => '0894'],
                            ['name' => '波密县','code' => '540424','phone_code' => '0894'],
                            ['name' => '察隅县','code' => '540425','phone_code' => '0894'],
                            ['name' => '朗县','code' => '540426','phone_code' => '0894'],
                        ]
                    ],
                    [
                        'name' => '山南市',
                        'code' => '540500',
                        'phone_code' => '0893',
                        'children' => [
                            ['name' => '乃东区','code' => '540502','phone_code' => '0893'],
                            ['name' => '扎囊县','code' => '540521','phone_code' => '0893'],
                            ['name' => '贡嘎县','code' => '540522','phone_code' => '0893'],
                            ['name' => '桑日县','code' => '540523','phone_code' => '0893'],
                            ['name' => '琼结县','code' => '540524','phone_code' => '0893'],
                            ['name' => '曲松县','code' => '540525','phone_code' => '0893'],
                            ['name' => '措美县','code' => '540526','phone_code' => '0893'],
                            ['name' => '洛扎县','code' => '540527','phone_code' => '0893'],
                            ['name' => '加查县','code' => '540528','phone_code' => '0893'],
                            ['name' => '隆子县','code' => '540529','phone_code' => '0893'],
                            ['name' => '错那县','code' => '540530','phone_code' => '0893'],
                            ['name' => '浪卡子县','code' => '540531','phone_code' => '0893'],
                        ]
                    ],
                    [
                        'name' => '那曲地区',
                        'code' => '542400',
                        'phone_code' => '0896',
                        'children' => [
                            ['name' => '那曲县','code' => '542421','phone_code' => '0896'],
                            ['name' => '嘉黎县','code' => '542422','phone_code' => '0896'],
                            ['name' => '比如县','code' => '542423','phone_code' => '0896'],
                            ['name' => '聂荣县','code' => '542424','phone_code' => '0896'],
                            ['name' => '安多县','code' => '542425','phone_code' => '0896'],
                            ['name' => '申扎县','code' => '542426','phone_code' => '0896'],
                            ['name' => '索县','code' => '542427','phone_code' => '0896'],
                            ['name' => '班戈县','code' => '542428','phone_code' => '0896'],
                            ['name' => '巴青县','code' => '542429','phone_code' => '0896'],
                            ['name' => '尼玛县','code' => '542430','phone_code' => '0896'],
                            ['name' => '双湖县','code' => '542431','phone_code' => '0896'],
                        ]
                    ],
                    [
                        'name' => '阿里地区',
                        'code' => '542500',
                        'phone_code' => '0897',
                        'children' => [
                            ['name' => '普兰县','code' => '542521','phone_code' => '0897'],
                            ['name' => '札达县','code' => '542522','phone_code' => '0897'],
                            ['name' => '噶尔县','code' => '542523','phone_code' => '0897'],
                            ['name' => '日土县','code' => '542524','phone_code' => '0897'],
                            ['name' => '革吉县','code' => '542525','phone_code' => '0897'],
                            ['name' => '改则县','code' => '542526','phone_code' => '0897'],
                            ['name' => '措勤县','code' => '542527','phone_code' => '0897'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '陕西省',
                'code' => '610000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '西安市',
                        'code' => '610100',
                        'phone_code' => '029',
                        'children' => [
                            ['name' => '新城区','code' => '610102','phone_code' => '029'],
                            ['name' => '碑林区','code' => '610103','phone_code' => '029'],
                            ['name' => '莲湖区','code' => '610104','phone_code' => '029'],
                            ['name' => '灞桥区','code' => '610111','phone_code' => '029'],
                            ['name' => '未央区','code' => '610112','phone_code' => '029'],
                            ['name' => '雁塔区','code' => '610113','phone_code' => '029'],
                            ['name' => '阎良区','code' => '610114','phone_code' => '029'],
                            ['name' => '临潼区','code' => '610115','phone_code' => '029'],
                            ['name' => '长安区','code' => '610116','phone_code' => '029'],
                            ['name' => '高陵区','code' => '610117','phone_code' => '029'],
                            ['name' => '蓝田县','code' => '610122','phone_code' => '029'],
                            ['name' => '周至县','code' => '610124','phone_code' => '029'],
                            ['name' => '鄠邑区','code' => '610118','phone_code' => '029'],
                        ]
                    ],
                    [
                        'name' => '铜川市',
                        'code' => '610200',
                        'phone_code' => '0919',
                        'children' => [
                            ['name' => '新城区','code' => '610102','phone_code' => '029'],
                            ['name' => '碑林区','code' => '610103','phone_code' => '029'],
                            ['name' => '莲湖区','code' => '610104','phone_code' => '029'],
                            ['name' => '灞桥区','code' => '610111','phone_code' => '029'],
                            ['name' => '未央区','code' => '610112','phone_code' => '029'],
                            ['name' => '雁塔区','code' => '610113','phone_code' => '029'],
                            ['name' => '阎良区','code' => '610114','phone_code' => '029'],
                            ['name' => '临潼区','code' => '610115','phone_code' => '029'],
                            ['name' => '长安区','code' => '610116','phone_code' => '029'],
                            ['name' => '高陵区','code' => '610117','phone_code' => '029'],
                            ['name' => '蓝田县','code' => '610122','phone_code' => '029'],
                            ['name' => '周至县','code' => '610124','phone_code' => '029'],
                            ['name' => '鄠邑区','code' => '610118','phone_code' => '029'],
                        ]
                    ],
                    [
                        'name' => '宝鸡市',
                        'code' => '610300',
                        'phone_code' => '0917',
                        'children' => [
                            ['name' => '渭滨区','code' => '610302','phone_code' => '0917'],
                            ['name' => '金台区','code' => '610303','phone_code' => '0917'],
                            ['name' => '陈仓区','code' => '610304','phone_code' => '0917'],
                            ['name' => '凤翔县','code' => '610322','phone_code' => '0917'],
                            ['name' => '岐山县','code' => '610323','phone_code' => '0917'],
                            ['name' => '扶风县','code' => '610324','phone_code' => '0917'],
                            ['name' => '眉县','code' => '610326','phone_code' => '0917'],
                            ['name' => '陇县','code' => '610327','phone_code' => '0917'],
                            ['name' => '千阳县','code' => '610328','phone_code' => '0917'],
                            ['name' => '麟游县','code' => '610329','phone_code' => '0917'],
                            ['name' => '凤县','code' => '610330','phone_code' => '0917'],
                            ['name' => '太白县','code' => '610331','phone_code' => '0917'],
                        ]
                    ],
                    [
                        'name' => '咸阳市',
                        'code' => '610400',
                        'phone_code' => '0910',
                        'children' => [
                            ['name' => '秦都区','code' => '610402','phone_code' => '0910'],
                            ['name' => '杨陵区','code' => '610403','phone_code' => '0910'],
                            ['name' => '渭城区','code' => '610404','phone_code' => '0910'],
                            ['name' => '三原县','code' => '610422','phone_code' => '0910'],
                            ['name' => '泾阳县','code' => '610423','phone_code' => '0910'],
                            ['name' => '乾县','code' => '610424','phone_code' => '0910'],
                            ['name' => '礼泉县','code' => '610425','phone_code' => '0910'],
                            ['name' => '永寿县','code' => '610426','phone_code' => '0910'],
                            ['name' => '彬县','code' => '610427','phone_code' => '0910'],
                            ['name' => '长武县','code' => '610428','phone_code' => '0910'],
                            ['name' => '旬邑县','code' => '610429','phone_code' => '0910'],
                            ['name' => '淳化县','code' => '610430','phone_code' => '0910'],
                            ['name' => '武功县','code' => '610431','phone_code' => '0910'],
                            ['name' => '兴平市','code' => '610481','phone_code' => '0910'],
                        ]
                    ],
                    [
                        'name' => '渭南市',
                        'code' => '610500',
                        'phone_code' => '0913',
                        'children' => [
                            ['name' => '临渭区','code' => '610502','phone_code' => '0913'],
                            ['name' => '华州区','code' => '610503','phone_code' => '0913'],
                            ['name' => '潼关县','code' => '610522','phone_code' => '0913'],
                            ['name' => '大荔县','code' => '610523','phone_code' => '0913'],
                            ['name' => '合阳县','code' => '610524','phone_code' => '0913'],
                            ['name' => '澄城县','code' => '610525','phone_code' => '0913'],
                            ['name' => '蒲城县','code' => '610526','phone_code' => '0913'],
                            ['name' => '白水县','code' => '610527','phone_code' => '0913'],
                            ['name' => '富平县','code' => '610528','phone_code' => '0913'],
                            ['name' => '韩城市','code' => '610581','phone_code' => '0913'],
                            ['name' => '华阴市','code' => '610582','phone_code' => '0913'],
                        ]
                    ],
                    [
                        'name' => '延安市',
                        'code' => '610600',
                        'phone_code' => '0911',
                        'children' => [
                            ['name' => '宝塔区','code' => '610602','phone_code' => '0911'],
                            ['name' => '延长县','code' => '610621','phone_code' => '0911'],
                            ['name' => '延川县','code' => '610622','phone_code' => '0911'],
                            ['name' => '子长县','code' => '610623','phone_code' => '0911'],
                            ['name' => '安塞区','code' => '610603','phone_code' => '0911'],
                            ['name' => '志丹县','code' => '610625','phone_code' => '0911'],
                            ['name' => '吴起县','code' => '610626','phone_code' => '0911'],
                            ['name' => '甘泉县','code' => '610627','phone_code' => '0911'],
                            ['name' => '富县','code' => '610628','phone_code' => '0911'],
                            ['name' => '洛川县','code' => '610629','phone_code' => '0911'],
                            ['name' => '宜川县','code' => '610630','phone_code' => '0911'],
                            ['name' => '黄龙县','code' => '610631','phone_code' => '0911'],
                            ['name' => '黄陵县','code' => '610632','phone_code' => '0911'],
                        ]
                    ],
                    [
                        'name' => '汉中市',
                        'code' => '610700',
                        'phone_code' => '0916',
                        'children' => [
                            ['name' => '汉台区','code' => '610702','phone_code' => '0916'],
                            ['name' => '南郑县','code' => '610721','phone_code' => '0916'],
                            ['name' => '城固县','code' => '610722','phone_code' => '0916'],
                            ['name' => '洋县','code' => '610723','phone_code' => '0916'],
                            ['name' => '西乡县','code' => '610724','phone_code' => '0916'],
                            ['name' => '勉县','code' => '610725','phone_code' => '0916'],
                            ['name' => '宁强县','code' => '610726','phone_code' => '0916'],
                            ['name' => '略阳县','code' => '610727','phone_code' => '0916'],
                            ['name' => '镇巴县','code' => '610728','phone_code' => '0916'],
                            ['name' => '留坝县','code' => '610729','phone_code' => '0916'],
                            ['name' => '佛坪县','code' => '610730','phone_code' => '0916'],
                        ]
                    ],
                    [
                        'name' => '榆林市',
                        'code' => '610800',
                        'phone_code' => '0912',
                        'children' => [
                            ['name' => '榆阳区','code' => '610802','phone_code' => '0912'],
                            ['name' => '横山区','code' => '610803','phone_code' => '0912'],
                            ['name' => '神木市','code' => '610881','phone_code' => '0912'],
                            ['name' => '府谷县','code' => '610822','phone_code' => '0912'],
                            ['name' => '靖边县','code' => '610824','phone_code' => '0912'],
                            ['name' => '定边县','code' => '610825','phone_code' => '0912'],
                            ['name' => '绥德县','code' => '610826','phone_code' => '0912'],
                            ['name' => '米脂县','code' => '610827','phone_code' => '0912'],
                            ['name' => '佳县','code' => '610828','phone_code' => '0912'],
                            ['name' => '吴堡县','code' => '610829','phone_code' => '0912'],
                            ['name' => '清涧县','code' => '610830','phone_code' => '0912'],
                            ['name' => '子洲县','code' => '610831','phone_code' => '0912'],
                        ]
                    ],
                    [
                        'name' => '安康市',
                        'code' => '610900',
                        'phone_code' => '0915',
                        'children' => [
                            ['name' => '汉滨区','code' => '610902','phone_code' => '0915'],
                            ['name' => '汉阴县','code' => '610921','phone_code' => '0915'],
                            ['name' => '石泉县','code' => '610922','phone_code' => '0915'],
                            ['name' => '宁陕县','code' => '610923','phone_code' => '0915'],
                            ['name' => '紫阳县','code' => '610924','phone_code' => '0915'],
                            ['name' => '岚皋县','code' => '610925','phone_code' => '0915'],
                            ['name' => '平利县','code' => '610926','phone_code' => '0915'],
                            ['name' => '镇坪县','code' => '610927','phone_code' => '0915'],
                            ['name' => '旬阳县','code' => '610928','phone_code' => '0915'],
                            ['name' => '白河县','code' => '610929','phone_code' => '0915'],
                        ]
                    ],
                    [
                        'name' => '商洛市',
                        'code' => '611000',
                        'phone_code' => '0914',
                        'children' => [
                            ['name' => '商州区','code' => '611002','phone_code' => '0914'],
                            ['name' => '洛南县','code' => '611021','phone_code' => '0914'],
                            ['name' => '丹凤县','code' => '611022','phone_code' => '0914'],
                            ['name' => '商南县','code' => '611023','phone_code' => '0914'],
                            ['name' => '山阳县','code' => '611024','phone_code' => '0914'],
                            ['name' => '镇安县','code' => '611025','phone_code' => '0914'],
                            ['name' => '柞水县','code' => '611026','phone_code' => '0914'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '甘肃省',
                'code' => '620000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '兰州市',
                        'code' => '620100',
                        'phone_code' => '0931',
                        'children' => [
                            ['name' => '城关区','code' => '620102','phone_code' => '0931'],
                            ['name' => '七里河区','code' => '620103','phone_code' => '0931'],
                            ['name' => '西固区','code' => '620104','phone_code' => '0931'],
                            ['name' => '安宁区','code' => '620105','phone_code' => '0931'],
                            ['name' => '红古区','code' => '620111','phone_code' => '0931'],
                            ['name' => '永登县','code' => '620121','phone_code' => '0931'],
                            ['name' => '皋兰县','code' => '620122','phone_code' => '0931'],
                            ['name' => '榆中县','code' => '620123','phone_code' => '0931'],
                        ]
                    ],
                    [
                        'name' => '嘉峪关市',
                        'code' => '620200',
                        'phone_code' => '1937',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '金昌市',
                        'code' => '620300',
                        'phone_code' => '0935',
                        'children' => [
                            ['name' => '金川区','code' => '620302','phone_code' => '0935'],
                            ['name' => '永昌县','code' => '620321','phone_code' => '0935'],
                        ]
                    ],
                    [
                        'name' => '白银市',
                        'code' => '620400',
                        'phone_code' => '0943',
                        'children' => [
                            ['name' => '白银区','code' => '620402','phone_code' => '0943'],
                            ['name' => '平川区','code' => '620403','phone_code' => '0943'],
                            ['name' => '靖远县','code' => '620421','phone_code' => '0943'],
                            ['name' => '会宁县','code' => '620422','phone_code' => '0943'],
                            ['name' => '景泰县','code' => '620423','phone_code' => '0943'],
                        ]
                    ],
                    [
                        'name' => '天水市',
                        'code' => '620500',
                        'phone_code' => '0938',
                        'children' => [
                            ['name' => '秦州区','code' => '620502','phone_code' => '0938'],
                            ['name' => '麦积区','code' => '620503','phone_code' => '0938'],
                            ['name' => '清水县','code' => '620521','phone_code' => '0938'],
                            ['name' => '秦安县','code' => '620522','phone_code' => '0938'],
                            ['name' => '甘谷县','code' => '620523','phone_code' => '0938'],
                            ['name' => '武山县','code' => '620524','phone_code' => '0938'],
                            ['name' => '张家川回族自治县','code' => '620525','phone_code' => '0938'],
                        ]
                    ],
                    [
                        'name' => '武威市',
                        'code' => '620600',
                        'phone_code' => '1935',
                        'children' => [
                            ['name' => '凉州区','code' => '620602','phone_code' => '1935'],
                            ['name' => '民勤县','code' => '620621','phone_code' => '1935'],
                            ['name' => '古浪县','code' => '620622','phone_code' => '1935'],
                            ['name' => '天祝藏族自治县','code' => '620623','phone_code' => '1935'],
                        ]
                    ],
                    [
                        'name' => '张掖市',
                        'code' => '620700',
                        'phone_code' => '0936',
                        'children' => [
                            ['name' => '甘州区','code' => '620702','phone_code' => '0936'],
                            ['name' => '肃南裕固族自治县','code' => '620721','phone_code' => '0936'],
                            ['name' => '民乐县','code' => '620722','phone_code' => '0936'],
                            ['name' => '临泽县','code' => '620723','phone_code' => '0936'],
                            ['name' => '高台县','code' => '620724','phone_code' => '0936'],
                            ['name' => '山丹县','code' => '620725','phone_code' => '0936'],
                        ]
                    ],
                    [
                        'name' => '平凉市',
                        'code' => '620800',
                        'phone_code' => '0933',
                        'children' => [
                            ['name' => '崆峒区','code' => '620802','phone_code' => '0933'],
                            ['name' => '泾川县','code' => '620821','phone_code' => '0933'],
                            ['name' => '灵台县','code' => '620822','phone_code' => '0933'],
                            ['name' => '崇信县','code' => '620823','phone_code' => '0933'],
                            ['name' => '华亭县','code' => '620824','phone_code' => '0933'],
                            ['name' => '庄浪县','code' => '620825','phone_code' => '0933'],
                            ['name' => '静宁县','code' => '620826','phone_code' => '0933'],
                        ]
                    ],
                    [
                        'name' => '酒泉市',
                        'code' => '620900',
                        'phone_code' => '0937',
                        'children' => [
                            ['name' => '肃州区','code' => '620902','phone_code' => '0937'],
                            ['name' => '金塔县','code' => '620921','phone_code' => '0937'],
                            ['name' => '瓜州县','code' => '620922','phone_code' => '0937'],
                            ['name' => '肃北蒙古族自治县','code' => '620923','phone_code' => '0937'],
                            ['name' => '阿克塞哈萨克族自治县','code' => '620924','phone_code' => '0937'],
                            ['name' => '玉门市','code' => '620981','phone_code' => '0937'],
                            ['name' => '敦煌市','code' => '620982','phone_code' => '0937'],
                        ]
                    ],
                    [
                        'name' => '庆阳市',
                        'code' => '621000',
                        'phone_code' => '0934',
                        'children' => [
                            ['name' => '西峰区','code' => '621002','phone_code' => '0934'],
                            ['name' => '庆城县','code' => '621021','phone_code' => '0934'],
                            ['name' => '环县','code' => '621022','phone_code' => '0934'],
                            ['name' => '华池县','code' => '621023','phone_code' => '0934'],
                            ['name' => '合水县','code' => '621024','phone_code' => '0934'],
                            ['name' => '正宁县','code' => '621025','phone_code' => '0934'],
                            ['name' => '宁县','code' => '621026','phone_code' => '0934'],
                            ['name' => '镇原县','code' => '621027','phone_code' => '0934'],
                        ]
                    ],
                    [
                        'name' => '定西市',
                        'code' => '621100',
                        'phone_code' => '0932',
                        'children' => [
                            ['name' => '西峰区','code' => '621002','phone_code' => '0934'],
                            ['name' => '庆城县','code' => '621021','phone_code' => '0934'],
                            ['name' => '环县','code' => '621022','phone_code' => '0934'],
                            ['name' => '华池县','code' => '621023','phone_code' => '0934'],
                            ['name' => '合水县','code' => '621024','phone_code' => '0934'],
                            ['name' => '正宁县','code' => '621025','phone_code' => '0934'],
                            ['name' => '宁县','code' => '621026','phone_code' => '0934'],
                            ['name' => '镇原县','code' => '621027','phone_code' => '0934'],
                        ]
                    ],
                    [
                        'name' => '陇南市',
                        'code' => '621200',
                        'phone_code' => '2935',
                        'children' => [
                            ['name' => '武都区','code' => '621202','phone_code' => '2935'],
                            ['name' => '成县','code' => '621221','phone_code' => '2935'],
                            ['name' => '文县','code' => '621222','phone_code' => '2935'],
                            ['name' => '宕昌县','code' => '621223','phone_code' => '2935'],
                            ['name' => '康县','code' => '621224','phone_code' => '2935'],
                            ['name' => '西和县','code' => '621225','phone_code' => '2935'],
                            ['name' => '礼县','code' => '621226','phone_code' => '2935'],
                            ['name' => '徽县','code' => '621227','phone_code' => '2935'],
                            ['name' => '两当县','code' => '621228','phone_code' => '2935'],
                        ]
                    ],
                    [
                        'name' => '临夏回族自治州',
                        'code' => '622900',
                        'phone_code' => '0930',
                        'children' => [
                            ['name' => '临夏市','code' => '622901','phone_code' => '0930'],
                            ['name' => '临夏县','code' => '622921','phone_code' => '0930'],
                            ['name' => '康乐县','code' => '622922','phone_code' => '0930'],
                            ['name' => '永靖县','code' => '622923','phone_code' => '0930'],
                            ['name' => '广河县','code' => '622924','phone_code' => '0930'],
                            ['name' => '和政县','code' => '622925','phone_code' => '0930'],
                            ['name' => '东乡族自治县','code' => '622926','phone_code' => '0930'],
                            ['name' => '积石山保安族东乡族撒拉族自治县','code' => '622927','phone_code' => '0930'],
                        ]
                    ],
                    [
                        'name' => '甘南藏族自治州',
                        'code' => '623000',
                        'phone_code' => '0941',
                        'children' => [
                            ['name' => '合作市','code' => '623001','phone_code' => '0941'],
                            ['name' => '临潭县','code' => '623021','phone_code' => '0941'],
                            ['name' => '卓尼县','code' => '623022','phone_code' => '0941'],
                            ['name' => '舟曲县','code' => '623023','phone_code' => '0941'],
                            ['name' => '迭部县','code' => '623024','phone_code' => '0941'],
                            ['name' => '玛曲县','code' => '623025','phone_code' => '0941'],
                            ['name' => '碌曲县','code' => '623026','phone_code' => '0941'],
                            ['name' => '夏河县','code' => '623027','phone_code' => '0941'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '青海省',
                'code' => '630000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '西宁市',
                        'code' => '630100',
                        'phone_code' => '0971',
                        'children' => [
                            ['name' => '城东区','code' => '630102','phone_code' => '0971'],
                            ['name' => '城中区','code' => '630103','phone_code' => '0971'],
                            ['name' => '城西区','code' => '630104','phone_code' => '0971'],
                            ['name' => '城北区','code' => '630105','phone_code' => '0971'],
                            ['name' => '大通回族土族自治县','code' => '630121','phone_code' => '0971'],
                            ['name' => '湟中县','code' => '630122','phone_code' => '0971'],
                            ['name' => '湟源县','code' => '630123','phone_code' => '0971'],
                        ]
                    ],
                    [
                        'name' => '海东市',
                        'code' => '630200',
                        'phone_code' => '0972',
                        'children' => [
                            ['name' => '乐都区','code' => '630202','phone_code' => '0972'],
                            ['name' => '平安区','code' => '630203','phone_code' => '0972'],
                            ['name' => '民和回族土族自治县','code' => '630222','phone_code' => '0972'],
                            ['name' => '互助土族自治县','code' => '630223','phone_code' => '0972'],
                            ['name' => '化隆回族自治县','code' => '630224','phone_code' => '0972'],
                            ['name' => '循化撒拉族自治县','code' => '630225','phone_code' => '0972'],
                        ]
                    ],
                    [
                        'name' => '海北藏族自治州',
                        'code' => '632200',
                        'phone_code' => '0970',
                        'children' => [
                            ['name' => '门源回族自治县','code' => '632221','phone_code' => '0970'],
                            ['name' => '祁连县','code' => '632222','phone_code' => '0970'],
                            ['name' => '海晏县','code' => '632223','phone_code' => '0970'],
                            ['name' => '刚察县','code' => '632224','phone_code' => '0970'],
                        ]
                    ],
                    [
                        'name' => '黄南藏族自治州',
                        'code' => '632300',
                        'phone_code' => '0973',
                        'children' => [
                            ['name' => '同仁县','code' => '632321','phone_code' => '0973'],
                            ['name' => '尖扎县','code' => '632322','phone_code' => '0973'],
                            ['name' => '泽库县','code' => '632323','phone_code' => '0973'],
                            ['name' => '河南蒙古族自治县','code' => '632324','phone_code' => '0973'],
                        ]
                    ],
                    [
                        'name' => '海南藏族自治州',
                        'code' => '632500',
                        'phone_code' => '0974',
                        'children' => [
                            ['name' => '共和县','code' => '632521','phone_code' => '0974'],
                            ['name' => '同德县','code' => '632522','phone_code' => '0974'],
                            ['name' => '贵德县','code' => '632523','phone_code' => '0974'],
                            ['name' => '兴海县','code' => '632524','phone_code' => '0974'],
                            ['name' => '贵南县','code' => '632525','phone_code' => '0974'],
                        ]
                    ],
                    [
                        'name' => '果洛藏族自治州',
                        'code' => '632600',
                        'phone_code' => '0975',
                        'children' => [
                            ['name' => '玛沁县','code' => '632621','phone_code' => '0975'],
                            ['name' => '班玛县','code' => '632622','phone_code' => '0975'],
                            ['name' => '甘德县','code' => '632623','phone_code' => '0975'],
                            ['name' => '达日县','code' => '632624','phone_code' => '0975'],
                            ['name' => '久治县','code' => '632625','phone_code' => '0975'],
                            ['name' => '玛多县','code' => '632626','phone_code' => '0975'],
                        ]
                    ],
                    [
                        'name' => '玉树藏族自治州',
                        'code' => '632700',
                        'phone_code' => '0976',
                        'children' => [
                            ['name' => '玉树市','code' => '632701','phone_code' => '0976'],
                            ['name' => '杂多县','code' => '632722','phone_code' => '0976'],
                            ['name' => '称多县','code' => '632723','phone_code' => '0976'],
                            ['name' => '治多县','code' => '632724','phone_code' => '0976'],
                            ['name' => '囊谦县','code' => '632725','phone_code' => '0976'],
                            ['name' => '曲麻莱县','code' => '632726','phone_code' => '0976'],
                        ]
                    ],
                    [
                        'name' => '海西蒙古族藏族自治州',
                        'code' => '632800',
                        'phone_code' => '0977',
                        'children' => [
                            ['name' => '格尔木市','code' => '632801','phone_code' => '0977'],
                            ['name' => '德令哈市','code' => '632802','phone_code' => '0977'],
                            ['name' => '乌兰县','code' => '632821','phone_code' => '0977'],
                            ['name' => '都兰县','code' => '632822','phone_code' => '0977'],
                            ['name' => '天峻县','code' => '632823','phone_code' => '0977'],
                            ['name' => '海西蒙古族藏族自治州直辖','code' => '632825','phone_code' => '0977'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '宁夏回族自治区',
                'code' => '640000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '银川市',
                        'code' => '640100',
                        'phone_code' => '0951',
                        'children' => [
                            ['name' => '兴庆区','code' => '640104','phone_code' => '0951'],
                            ['name' => '西夏区','code' => '640105','phone_code' => '0951'],
                            ['name' => '金凤区','code' => '640106','phone_code' => '0951'],
                            ['name' => '永宁县','code' => '640121','phone_code' => '0951'],
                            ['name' => '贺兰县','code' => '640122','phone_code' => '0951'],
                            ['name' => '灵武市','code' => '640181','phone_code' => '0951'],
                        ]
                    ],
                    [
                        'name' => '石嘴山市',
                        'code' => '640200',
                        'phone_code' => '0952',
                        'children' => [
                            ['name' => '大武口区','code' => '640202','phone_code' => '0952'],
                            ['name' => '惠农区','code' => '640205','phone_code' => '0952'],
                            ['name' => '平罗县','code' => '640221','phone_code' => '0952'],
                        ]
                    ],
                    [
                        'name' => '吴忠市',
                        'code' => '640300',
                        'phone_code' => '0953',
                        'children' => [
                            ['name' => '利通区','code' => '640302','phone_code' => '0953'],
                            ['name' => '红寺堡区','code' => '640303','phone_code' => '0953'],
                            ['name' => '盐池县','code' => '640323','phone_code' => '0953'],
                            ['name' => '同心县','code' => '640324','phone_code' => '0953'],
                            ['name' => '青铜峡市','code' => '640381','phone_code' => '0953'],
                        ]
                    ],
                    [
                        'name' => '固原市',
                        'code' => '640400',
                        'phone_code' => '0954',
                        'children' => [
                            ['name' => '原州区','code' => '640402','phone_code' => '0954'],
                            ['name' => '西吉县','code' => '640422','phone_code' => '0954'],
                            ['name' => '隆德县','code' => '640423','phone_code' => '0954'],
                            ['name' => '泾源县','code' => '640424','phone_code' => '0954'],
                            ['name' => '彭阳县','code' => '640425','phone_code' => '0954'],
                        ]
                    ],
                    [
                        'name' => '中卫市',
                        'code' => '640500',
                        'phone_code' => '1953',
                        'children' => [
                            ['name' => '沙坡头区','code' => '640502','phone_code' => '1953'],
                            ['name' => '中宁县','code' => '640521','phone_code' => '1953'],
                            ['name' => '海原县','code' => '640522','phone_code' => '1953'],
                        ]
                    ],
                ]
            ],
            [
                'name' => '新疆维吾尔自治区',
                'code' => '650000',
                'phone_code' => '',
                'children' => [
                    [
                        'name' => '阿拉尔市',
                        'code' => '659002',
                        'phone_code' => '1997',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '北屯市',
                        'code' => '659005',
                        'phone_code' => '1906',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '可克达拉市',
                        'code' => '659008',
                        'phone_code' => '1999',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '昆玉市',
                        'code' => '659009',
                        'phone_code' => '1903',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '石河子市',
                        'code' => '659001',
                        'phone_code' => '0993',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '双河市',
                        'code' => '659007',
                        'phone_code' => '1909',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '乌鲁木齐市',
                        'code' => '650100',
                        'phone_code' => '0991',
                        'children' => [
                            ['name' => '天山区','code' => '650102','phone_code' => '0991'],
                            ['name' => '沙依巴克区','code' => '650103','phone_code' => '0991'],
                            ['name' => '新市区','code' => '650104','phone_code' => '0991'],
                            ['name' => '水磨沟区','code' => '650105','phone_code' => '0991'],
                            ['name' => '头屯河区','code' => '650106','phone_code' => '0991'],
                            ['name' => '达坂城区','code' => '650107','phone_code' => '0991'],
                            ['name' => '米东区','code' => '650109','phone_code' => '0991'],
                            ['name' => '乌鲁木齐县','code' => '650121','phone_code' => '0991'],
                        ]
                    ],
                    [
                        'name' => '克拉玛依市',
                        'code' => '650200',
                        'phone_code' => '0990',
                        'children' => [
                            ['name' => '独山子区','code' => '650202','phone_code' => '0990'],
                            ['name' => '克拉玛依区','code' => '650203','phone_code' => '0990'],
                            ['name' => '白碱滩区','code' => '650204','phone_code' => '0990'],
                            ['name' => '乌尔禾区','code' => '650205','phone_code' => '0990'],
                        ]
                    ],
                    [
                        'name' => '吐鲁番市',
                        'code' => '650400',
                        'phone_code' => '0995',
                        'children' => [
                            ['name' => '高昌区','code' => '650402','phone_code' => '0995'],
                            ['name' => '鄯善县','code' => '650421','phone_code' => '0995'],
                            ['name' => '托克逊县','code' => '650422','phone_code' => '0995'],
                        ]
                    ],
                    [
                        'name' => '哈密市',
                        'code' => '650500',
                        'phone_code' => '0902',
                        'children' => [
                            ['name' => '伊州区','code' => '650502','phone_code' => '0902'],
                            ['name' => '巴里坤哈萨克自治县','code' => '650521','phone_code' => '0902'],
                            ['name' => '伊吾县','code' => '650522','phone_code' => '0902'],
                        ]
                    ],
                    [
                        'name' => '昌吉回族自治州',
                        'code' => '652300',
                        'phone_code' => '0994',
                        'children' => [
                            ['name' => '昌吉市','code' => '652301','phone_code' => '0994'],
                            ['name' => '阜康市','code' => '652302','phone_code' => '0994'],
                            ['name' => '呼图壁县','code' => '652323','phone_code' => '0994'],
                            ['name' => '玛纳斯县','code' => '652324','phone_code' => '0994'],
                            ['name' => '奇台县','code' => '652325','phone_code' => '0994'],
                            ['name' => '吉木萨尔县','code' => '652327','phone_code' => '0994'],
                            ['name' => '木垒哈萨克自治县','code' => '652328','phone_code' => '0994'],
                        ]
                    ],
                    [
                        'name' => '博尔塔拉蒙古自治州',
                        'code' => '652700',
                        'phone_code' => '0909',
                        'children' => [
                            ['name' => '博乐市','code' => '652701','phone_code' => '0909'],
                            ['name' => '阿拉山口市','code' => '652702','phone_code' => '0909'],
                            ['name' => '精河县','code' => '652722','phone_code' => '0909'],
                            ['name' => '温泉县','code' => '652723','phone_code' => '0909'],
                        ]
                    ],
                    [
                        'name' => '巴音郭楞蒙古自治州',
                        'code' => '652800',
                        'phone_code' => '0996',
                        'children' => [
                            ['name' => '库尔勒市','code' => '652801','phone_code' => '0996'],
                            ['name' => '轮台县','code' => '652822','phone_code' => '0996'],
                            ['name' => '尉犁县','code' => '652823','phone_code' => '0996'],
                            ['name' => '若羌县','code' => '652824','phone_code' => '0996'],
                            ['name' => '且末县','code' => '652825','phone_code' => '0996'],
                            ['name' => '焉耆回族自治县','code' => '652826','phone_code' => '0996'],
                            ['name' => '和静县','code' => '652827','phone_code' => '0996'],
                            ['name' => '和硕县','code' => '652828','phone_code' => '0996'],
                            ['name' => '博湖县','code' => '652829','phone_code' => '0996'],
                        ]
                    ],
                    [
                        'name' => '阿克苏地区',
                        'code' => '652900',
                        'phone_code' => '0997',
                        'children' => [
                            ['name' => '阿克苏市','code' => '652901','phone_code' => '0997'],
                            ['name' => '温宿县','code' => '652922','phone_code' => '0997'],
                            ['name' => '库车县','code' => '652923','phone_code' => '0997'],
                            ['name' => '沙雅县','code' => '652924','phone_code' => '0997'],
                            ['name' => '新和县','code' => '652925','phone_code' => '0997'],
                            ['name' => '拜城县','code' => '652926','phone_code' => '0997'],
                            ['name' => '乌什县','code' => '652927','phone_code' => '0997'],
                            ['name' => '阿瓦提县','code' => '652928','phone_code' => '0997'],
                            ['name' => '柯坪县','code' => '652929','phone_code' => '0997'],
                        ]
                    ],
                    [
                        'name' => '克孜勒苏柯尔克孜自治州',
                        'code' => '653000',
                        'phone_code' => '0908',
                        'children' => [
                            ['name' => '阿图什市','code' => '653001','phone_code' => '0908'],
                            ['name' => '阿克陶县','code' => '653022','phone_code' => '0908'],
                            ['name' => '阿合奇县','code' => '653023','phone_code' => '0908'],
                            ['name' => '乌恰县','code' => '653024','phone_code' => '0908'],
                        ]
                    ],
                    [
                        'name' => '喀什地区',
                        'code' => '653100',
                        'phone_code' => '0998',
                        'children' => [
                            ['name' => '喀什市','code' => '653101','phone_code' => '0998'],
                            ['name' => '疏附县','code' => '653121','phone_code' => '0998'],
                            ['name' => '疏勒县','code' => '653122','phone_code' => '0998'],
                            ['name' => '英吉沙县','code' => '653123','phone_code' => '0998'],
                            ['name' => '泽普县','code' => '653124','phone_code' => '0998'],
                            ['name' => '莎车县','code' => '653125','phone_code' => '0998'],
                            ['name' => '叶城县','code' => '653126','phone_code' => '0998'],
                            ['name' => '麦盖提县','code' => '653127','phone_code' => '0998'],
                            ['name' => '岳普湖县','code' => '653128','phone_code' => '0998'],
                            ['name' => '伽师县','code' => '653129','phone_code' => '0998'],
                            ['name' => '巴楚县','code' => '653130','phone_code' => '0998'],
                            ['name' => '塔什库尔干塔吉克自治县','code' => '653131','phone_code' => '0998'],
                        ]
                    ],
                    [
                        'name' => '和田地区',
                        'code' => '653200',
                        'phone_code' => '0903',
                        'children' => [
                            ['name' => '和田市','code' => '653201','phone_code' => '0903'],
                            ['name' => '和田县','code' => '653221','phone_code' => '0903'],
                            ['name' => '墨玉县','code' => '653222','phone_code' => '0903'],
                            ['name' => '皮山县','code' => '653223','phone_code' => '0903'],
                            ['name' => '洛浦县','code' => '653224','phone_code' => '0903'],
                            ['name' => '策勒县','code' => '653225','phone_code' => '0903'],
                            ['name' => '于田县','code' => '653226','phone_code' => '0903'],
                            ['name' => '民丰县','code' => '653227','phone_code' => '0903'],
                        ]
                    ],
                    [
                        'name' => '伊犁哈萨克自治州',
                        'code' => '654000',
                        'phone_code' => '0999',
                        'children' => [
                            ['name' => '伊宁市','code' => '654002','phone_code' => '0999'],
                            ['name' => '奎屯市','code' => '654003','phone_code' => '0999'],
                            ['name' => '霍尔果斯市','code' => '654004','phone_code' => '0999'],
                            ['name' => '伊宁县','code' => '654021','phone_code' => '0999'],
                            ['name' => '察布查尔锡伯自治县','code' => '654022','phone_code' => '0999'],
                            ['name' => '霍城县','code' => '654023','phone_code' => '0999'],
                            ['name' => '巩留县','code' => '654024','phone_code' => '0999'],
                            ['name' => '新源县','code' => '654025','phone_code' => '0999'],
                            ['name' => '昭苏县','code' => '654026','phone_code' => '0999'],
                            ['name' => '特克斯县','code' => '654027','phone_code' => '0999'],
                            ['name' => '尼勒克县','code' => '654028','phone_code' => '0999'],
                        ]
                    ],
                    [
                        'name' => '塔城地区',
                        'code' => '654200',
                        'phone_code' => '0901',
                        'children' => [
                            ['name' => '塔城市','code' => '654201','phone_code' => '0901'],
                            ['name' => '乌苏市','code' => '654202','phone_code' => '0901'],
                            ['name' => '额敏县','code' => '654221','phone_code' => '0901'],
                            ['name' => '沙湾县','code' => '654223','phone_code' => '0901'],
                            ['name' => '托里县','code' => '654224','phone_code' => '0901'],
                            ['name' => '裕民县','code' => '654225','phone_code' => '0901'],
                            ['name' => '和布克赛尔蒙古自治县','code' => '654226','phone_code' => '0901'],
                        ]
                    ],
                    [
                        'name' => '阿勒泰地区',
                        'code' => '654300',
                        'phone_code' => '0906',
                        'children' => [
                            ['name' => '阿勒泰市','code' => '654301','phone_code' => '0906'],
                            ['name' => '布尔津县','code' => '654321','phone_code' => '0906'],
                            ['name' => '富蕴县','code' => '654322','phone_code' => '0906'],
                            ['name' => '福海县','code' => '654323','phone_code' => '0906'],
                            ['name' => '哈巴河县','code' => '654324','phone_code' => '0906'],
                            ['name' => '青河县','code' => '654325','phone_code' => '0906'],
                            ['name' => '吉木乃县','code' => '654326','phone_code' => '0906'],
                        ]
                    ],
                    [
                        'name' => '铁门关市',
                        'code' => '659006',
                        'phone_code' => '1996',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '图木舒克市',
                        'code' => '659003',
                        'phone_code' => '1998',
                        'children' => [

                        ]
                    ],
                    [
                        'name' => '五家渠市',
                        'code' => '659004',
                        'phone_code' => '1994',
                        'children' => [

                        ]
                    ],
                ]
            ],
            [
                'name' => '台湾省',
                'code' => '710000',
                'phone_code' => '1886',
                'children' => []
            ],
            [
                'name' => '香港特别行政区',
                'code' => '810000',
                'phone_code' => '1852',
                'children' => [
                    ['name' => '中西区','code' => '810001','phone_code' => '1852'],
                    ['name' => '湾仔区','code' => '810002','phone_code' => '1852'],
                    ['name' => '东区','code' => '810003','phone_code' => '1852'],
                    ['name' => '南区','code' => '810004','phone_code' => '1852'],
                    ['name' => '油尖旺区','code' => '810005','phone_code' => '1852'],
                    ['name' => '深水埗区','code' => '810006','phone_code' => '1852'],
                    ['name' => '九龙城区','code' => '810007','phone_code' => '1852'],
                    ['name' => '黄大仙区','code' => '810008','phone_code' => '1852'],
                    ['name' => '观塘区','code' => '810009','phone_code' => '1852'],
                    ['name' => '荃湾区','code' => '810010','phone_code' => '1852'],
                    ['name' => '屯门区','code' => '810011','phone_code' => '1852'],
                    ['name' => '元朗区','code' => '810012','phone_code' => '1852'],
                    ['name' => '北区','code' => '810013','phone_code' => '1852'],
                    ['name' => '大埔区','code' => '810014','phone_code' => '1852'],
                    ['name' => '西贡区','code' => '810015','phone_code' => '1852'],
                    ['name' => '沙田区','code' => '810016','phone_code' => '1852'],
                    ['name' => '葵青区','code' => '810017','phone_code' => '1852'],
                    ['name' => '离岛区','code' => '810018','phone_code' => '1852'],
                ]
            ],
            [
                'name' => '澳门特别行政区',
                'code' => '820000',
                'phone_code' => '1853',
                'children' => [
                    ['name' => '花地玛堂区','code' => '820001','phone_code' => '1853'],
                    ['name' => '花王堂区','code' => '820002','phone_code' => '1853'],
                    ['name' => '望德堂区','code' => '820003','phone_code' => '1853'],
                    ['name' => '大堂区','code' => '820004','phone_code' => '1853'],
                    ['name' => '风顺堂区','code' => '820005','phone_code' => '1853'],
                    ['name' => '嘉模堂区','code' => '820006','phone_code' => '1853'],
                    ['name' => '路凼填海区','code' => '820007','phone_code' => '1853'],
                    ['name' => '圣方济各堂区','code' => '820008','phone_code' => '1853'],
                ]
            ],
        ];

        foreach ($chinese_regions as $region_1) {
            $state = DB::table('chinese_regions')->updateOrCreate(['code' => $region_1['code']], [
                'name' => $region_1['name'],
                'code' => $region_1['code'],
                'level' => 1,
                'phone_code' => $region_1['phone_code'],
                'parent_id' => 0,
            ]);

            if (!empty($region_1['children'])) {
                foreach ($region_1['children'] as $region_2) {
                    $city = DB::table('chinese_regions')->updateOrCreate(['code' => $region_2['code']], [
                        'name' => $region_2['name'],
                        'code' => $region_2['code'],
                        'level' => 2,
                        'phone_code' => $region_2['phone_code'],
                        'parent_id' => $state->id,
                    ]);

                    if (!empty($region_2['children'])) {
                        foreach ($region_2['children'] as $region_3) {
                            DB::table('chinese_regions')->updateOrCreate(['code' => $region_3['code']], [
                                'name' => $region_3['name'],
                                'code' => $region_3['code'],
                                'level' => 3,
                                'phone_code' => $region_3['phone_code'],
                                'parent_id' => $city->id,
                            ]);
                        }
                    }
                }
            }
        }
    }
}