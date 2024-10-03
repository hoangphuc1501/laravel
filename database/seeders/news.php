<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class news extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('news')->insert([
            [
                'category_id' => '1',
                'image' => 'https://i1-thethao.vnecdn.net/2024/10/02/Screenshot-2024-10-02-at-06-00-9302-1506-1727823921.png?w=680&h=0&q=100&dpr=1&fit=crop&s=RCvis1Or2xl96JmvBv7cjw',
                'title' => 'Arsenal hạ PSG tại Champions League',
                'slug' => 'arsenal-ha-PSG-tai-Champions-League',
                'content' => 'Sau khi hòa Atalanta 0-0 ở trận ra quân, thầy trò Mikel Arteta có nhiều cơ sở để hướng đến ba điểm khi trở về sân nhà Emirates hôm qua. PSG từng vào bán kết mùa trước, nhưng chưa bao giờ thắng Arsenal ở các giải đấu lớn tại châu Âu (thua 1, hòa 3). Kể từ khi hạ Man Utd hồi tháng 12/2020, đội bóng nước Pháp toàn thua trong ba chuyến làm khách gần nhất đến nước Anh (hai lần trước Man City và một lần trước Newcastle).Và sự yếu thế ấy đã tái hiện. Dù PSG cầm bóng 65%, dứt điểm 10 lần và tỷ lệ chuyền chính xác 89% đều cao hơn, nhưng sự chủ động trong lối chơi hoàn toàn thuộc về Arsenal. Chủ nhà dứt điểm chỉ sáu lần, nhưng có đến năm tình huống đưa bóng hướng khung thành, còn đội khách chỉ là hai. Ngay trong hiệp một, Arsenal đã ghi hai bàn. Havertz chứng tỏ anh đang đạt phong độ cao thế nào ở mùa thứ hai thi đấu cho Arsenal. Tiền đạo người Đức di chuyển ra sau lưng trung vệ Willian Pacho để phá bẫy việt vị đón quả tạt của Leandro Trossard, trước khi bật cao đánh đầu hạ Gianluigi Donnarumma. Thủ thành PSG đã băng ra nhưng không thể chạm bóng. Đây là bàn thứ hai qua 14 trận gần nhất của Havertz tại Champions League, sau bàn vào lưới Lens hồi tháng 11/2023.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 1,
            ],

            [
                'category_id' => '1',
                'image' => 'https://i1-thethao.vnecdn.net/2024/10/02/haaland-man-city-1727815415-7644-1727815684.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=x_WMWCp0bV-xXmE-ajpCBA',
                'title' => 'Man City thắng đậm ở Champions League',
                'slug' => 'Man-City-thang-dam-o-Champions-League',
                'content' => 'Phút 58, khi Man City đang dẫn 2-0, Rico Lewis dẫn bóng chậm rãi từ phần sân nhà đến quá giữa sân mà không cầu thủ nào của Bratislava ập vào tranh chấp.Ở tuyến trên, Haaland thoải mái chạy chỗ rồi đón đường chọc khe của Lewis khi không có ai đuổi kịp. Tiền đạo 24 tuổi bình tĩnh ngoặt bóng qua thủ môn Dominik Takac rồi đệm vào lưới trống.Tình huống này giúp tiền đạo Na Uy dứt chuỗi ba trận tịt ngòi ở Champions League, đồng thời ghi bàn thứ 11 trên mọi đấu trường mùa này sau chín trận cho Man City. Thủ thành Takac đã cản được hai pha dứt điểm trước đó của Haaland, nhưng lần này anh không thể làm được gì.Takac cũng thể hiện không tồi khi bảy lần cứu thua cho Bratislava, trong khi thủ môn Stefan Ortega bên phía đối diện không phải hoạt động lần nào. Man City cũng giữ bóng tới 76% thời lượng, thể hiện trình độ hơn hẳn đại diện Slovakia.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 2,
            ],
            [
                'category_id' => '1',
                'image' => 'https://i1-thethao.vnecdn.net/2024/10/02/AP24275708770075-2579-1727832907.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=7_86IwJVl2a51PCkza9_og',
                'title' => 'Saka: Đây là năm của Arsenal',
                'slug' => 'Saka-day-la-nam-cua-Arsenal',
                'content' => 'Tôi không muốn tạo quá nhiều áp lực cho các đồng đội, nhưng tôi nghĩ đây là năm của chúng tôi", Saka nói sau trận đấu trên sân Emirates tối 1/10. "Chúng tôi đã tiến sát danh hiệu hai mùa gần nhất, và đang tiến gần hơn. Mùa này, tôi khát khao cháy bỏng, muốn đoạt danh hiệu và tự tin vào bản thân. Hai điều đó rất quan trọng".Dưới thời HLV Mikel Arteta - bắt đầu từ 2019, Arsenal đang dần tìm lại vị thế ở Anh và châu Âu. Họ đã giành một Cup FA, hai Siêu Cup Anh. Dù vậy, "Pháo thủ" chưa đoạt danh hiệu lớn nào, khi về nhì tại Ngoại hạng Anh hai mùa gần nhất và bị loại ở tứ kết Champions League mùa 2023-2024.Theo Saka, trận thắng PSG là minh chứng cho thấy Arsenal có thể cạnh tranh danh hiệu lớn và đang tiến những bước cuối cùng đến vinh quang. "Chúng tôi là CLB hàng đầu và đã chứng minh điều đó trước PSG. Tôi đã bảo với toàn đội rằng chúng tôi phải đưa ra thông điệp khi các CLB lớn đến sân Emirates", ngôi sao người Anh nhấn mạnh.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 2,
            ],
            [
                'category_id' => '1',
                'image' => 'https://i1-thethao.vnecdn.net/2024/10/02/raphinha2-7056-1727824441.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=Cadl_NcCxWlP7w0510RmfA',
                'title' => 'Barca trút mưa bàn thắng tại Champions League',
                'slug' => 'Barca-trut-mua-ban-thang-tai-Champions-League',
                'content' => 'Trên sân nhà Montjuic tối 1/10, Barca lấy lại cảm giác chiến thắng sau trận thua sốc Osasuna 2-4 ở La Liga cuối tuần qua. Với sự trở lại của Lamine Yamal và Raphinha, thầy trò HLV Flick hoàn toàn áp đảo Young Boys. Họ kiểm soát bóng 70%, dứt điểm 21 lần và một phần ba trong số đó hướng khung thành, trong khi đối thủ đến từ Thụy Sĩ chỉ năm lần kết thúc và một hướng mục tiêu.Ngay phút thứ 8, Barca đã mở tỷ số. Raphinha nhận đường chuyền của Yamal, xâm nhập vòng cấm, rồi tạt chìm cho Robert Lewandowski đệm bóng cận thành tung lưới Young Boys.Các pha phản công của đội bóng Thụy Sĩ đều không đem lại kết quả như mong muốn. Họ không đủ kỹ thuật để đưa bóng đến gần khung thành, dẫn đến việc phải dứt điểm sớm, hoặc tạt vào tầm cản phá của hậu vệ Barca. Tình huống gây chú ý duy nhất của Young Boys là cú sút chệch khung thành trong thế không bị kèm ở phút 30 của Ebrima Colley.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 2,
            ],
            [
                'category_id' => '1',
                'image' => 'https://i1-thethao.vnecdn.net/2024/10/02/51-Adeyemi-BVB-Celtic-8499-1727822523.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=JkrAF5Oq0_pszpJL5LR7EQ',
                'title' => 'Dortmund thắng 7-1 tại Champions League',
                'slug' => 'Dortmund-thang-7-1-tai-Champions-League',
                'content' => 'Trên sân Signal Iduna Park hôm 1/10, Dortmund áp đảo khi kiểm soát bóng 53%, dứt điểm 16 lần với 13 cú trúng đích - so với 9 và 2 của Celtic. Riêng hiệp một, chủ nhà đã ghi năm bàn, với hai cú đá phạt đền của Emre Can và Serhou Guirassy.Ba bàn còn lại của Dortmund trong hiệp một đều thuộc về Adeyemi. Lần lượt ở phút 11 và 29, tiền đạo Đức dứt điểm chân trái từ góc hẹp chếch bên cánh trái tung nóc lưới thủ thành Kasper Schmeichel. Phút 42, anh hoàn tất cú hat-trick khi dạt phải, cắt vào trung lộ rồi sút chân trái về góc gần.Adeyemi trở thành cầu thủ Đức đầu tiên ghi 10 bàn tại Champions League trước tuổi 23. Anh còn là cầu thủ Đức thứ hai lập hat-trick trong hiệp một tại Champions League, sau Mario Gomez ở trận Bayern - Napoli hồi tháng 11/2011.Sang hiệp hai, Dortmund ghi thêm hai bàn từ những cú sút trong vòng cấm của Guirassy và Felix Nmecha. Trong khi đó, bàn duy nhất của Celtic thuộc về tiền đạo Nhật Bản Maeda Daizen. 7-1 là chiến thắng cách biệt lớn nhất của Dortmund tại Champions League, bằng trận thắng 6-0 trên sân Legia Warsaw hồi tháng 9/2016.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 4,
            ],
            [
                'category_id' => '1',
                'image' => 'https://i1-thethao.vnecdn.net/2024/10/01/a-2961-1727745630.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=PY8yk9N3i3KJQ-eOPYS1VA',
                'title' => 'Dembele bị loại khỏi trận gặp Arsenal vì cãi HLV Enrique',
                'slug' => 'Dembele-bi-loai-khoi-tran-gap-Arsenal-vi-cai-HLV-Enrique',
                'content' => 'Theo ESPN, Dembele và HLV Enrique đã tranh cãi căng thẳng ngày 28/9, một ngày sau khi PSG thắng Rennes 3-1 ở vòng sáu Ligue. Tiền đạo Pháp lập tức bị gạch tên khỏi danh sách sang London đá lượt hai Champions League vì vi phạm kỷ luật nội bộ."Với tôi, nếu ai đó không đáp ứng được yêu cầu của đội thì chưa sẵn sàng thi đấu", Enrique nói về quyết định loại Dembele trong buổi họp báo trước trận gặp Arsenal ở Champions League. "Điều đó có nghĩa là với trận đấu quan trọng sắp diễn ra, chúng tôi cần mọi cầu thủ phải sẵn sàng. Nếu họ không đáp ứng được kỳ vọng thì sẽ không thi đấu. Công việc của tôi là đưa ra những quyết định tốt nhất cho tập thể".HLV người Tây Ban Nha khẳng định nhận được sự ủng hộ từ ban lãnh đạo PSG. "Tôi ký hợp đồng với CLB này để tạo ra đội bóng có bản sắc", ông nói. "Tôi được bổ nhiệm để giành các danh hiệu và vô địch Champions League? Chắc chắn là không. Tôi được bổ nhiệm để làm tốt nhất có thể. Tôi ở đây để tạo nên tập thể có bản sắc, và điều đó áp dụng với cả Dembele".',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 5,
            ],
            [
                'category_id' => '1',
                'image' => 'https://i1-thethao.vnecdn.net/2024/09/30/w-4090-1727686918.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=mOWtdZMJCpT6U4yWoqxk-A',
                'title' => 'Barca chiêu mộ thủ môn đã giải nghệ để thay Ter Stegen',
                'slug' => 'Barca-chieu-mo-thu-mon-da-giai-nghe-de-thay-Ter-Stegen',
                'content' => 'Theo tờ Mundo Deportivo, Szczesny sẽ tới Barcelona hôm nay để kiểm tra y tế. Sau đó, thủ môn 34 tuổi người Ba Lan sẽ ký hợp đồng thi đấu đến hết tháng 6/2025. Szczesny gia nhập Barca để thay Marc Andre Ter Stegen, thủ môn chính bị đứt gân bánh chè đầu gối và phải nghỉ hết mùa 2024-2025.Trận gần nhất của Szczesny là Ba Lan thua Áo 1-3 ở vòng bảng Euro 2024 hồi tháng 6. Đến 26/8, anh thông báo giải nghệ. Tuy nhiên, lời mời của Barca đủ sức nặng để Szczesny trở lại sân cỏ. Do không tập gần ba tháng, Szczesny phải ngồi ngoài hai trận gặp Young Boys ngày 1/0 và Alaves ngày 6/10. Sau hai tuần các đội tuyển thi đấu, HLV Hansi Flick sẽ xem xét chọn thủ môn người Ba Lan hay Inaki Pena, phương án dự bị số một, cho các trận gặp Seville, Bayern và Real.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 4,
            ],
            [
                'category_id' => '2',
                'image' => 'https://i1-giaitri.vnecdn.net/2024/07/27/hoa-hau-ky-duyen-1721987035-5807-1722074477.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=jToToP-fLCM8z8y-PP_p0w',
                'title' => 'Kỳ Duyên gợi ý chế độ ăn giữ dáng',
                'slug' => 'Ky-Duyen-goi-y-che-do-an-giu-dang',
                'content' => 'Hoa hậu Kỳ Duyên cho biết thích tự nấu nướng tại nhà với nguyên liệu chủ yếu là ức gà, cá hồi cùng nhiều rau củ quả tươi.Người đẹp gây chú ý với khán giả khi tham gia Miss Universe Vietnam 2024 sau 10 năm đăng quang Hoa hậu Việt Nam. Cô được nhiều người khen ngoại hình săn chắc, vòng eo "con kiến" 59 cm.Nhiều năm qua, cô duy trì tập thể dục kết hợp ăn uống theo chế độ riêng. Kỳ Duyên tự nấu ăn tại nhà vì cho rằng yếu tố này quyết định 60% việc giữ hình thể khỏe khoắn. "Tôi thuộc tạng người dễ tăng cân nên cần chú trọng lượng thực phẩm nạp vào người", hoa hậu cho biết.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 6,
            ],
            [
                'category_id' => '2',
                'image' => 'https://i1-giaitri.vnecdn.net/2024/08/09/Yaroslava-Mahuchikh-1723178780.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=k7kQ5tDSLTjTAVRt9LVkaw',
                'title' => 'Những kiểu làm đẹp của vận động viên Olympic 2024',
                'slug' => 'Nhung-kieu-lam-dep-cua-van-dong-vien-Olympic-2024',
                'content' => 'Các vận động viên bơi nghệ thuật tuyển Mỹ giữ bộ tóc hoàn hảo khi thi đấu bằng cách bôi gelatin.Keana Hunter, Daniella Ramirez và Anita Alvarez của đội tuyển Mỹ trò chuyện với Vogue về bí quyết làm đẹp trước giờ thi đấu Olympic 2024, hôm 30/7. Đối với vận động viên bơi nghệ thuật, tóc được xem là yếu tố thẩm mỹ quan trọng, khác với những người thi đấu bơi lội khác.Vì gel thông thường không giữ được trong nước, họ sử dụng gelatin - một protein động vật thường được dùng để làm thạch hoặc các món ăn - để giữ tóc vào nếp, sáng bóng, đồng thời giúp bộ tóc đông đặc và chắc chắn như một chiếc mũ bảo hiểm.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 5,
            ],
            [
                'category_id' => '3',
                'image' => 'https://i1-vnexpress.vnecdn.net/2024/10/01/VNE-Nuclear-7155-1727758488.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=VZNSfMRO9p1dUDxpqmrvDg',
                'title' => 'Pin hạt nhân quang học có tuổi thọ hàng thế kỷ',
                'slug' => 'Pin-hat-nhan-quang-hoc-co-tuoi-tho-hang-the-ky',
                'content' => 'Theo nghiên cứu công bố trên tạp chí Nature, nhóm chuyên gia tìm cách khai thác tia alpha giải phóng từ đồng vị phóng xạ phân rã, trong lĩnh vực mà phần lớn thành tựu tập trung vào phóng xạ beta.Nhu cầu ngày càng tăng đối với những giải pháp năng lượng sạch và nguồn điện thay thế nhỏ tồn tại lâu dài dấy lên mối quan tâm đối với pin hạt nhân nhưng đồng vị phóng xạ alpha được xem như đối thủ lớn nhất đối với pin vi hạt nhân. Đó là vì năng lượng phân rã cao của đồng vị phóng xạ alpha, ở mức 4 - 6 mega electron volt (MeV) cung cấp tiềm năng vượt xa thiết bị sử dụng đồng vị phóng xạ beta. So với nó, năng lượng phân rã của đồng vị beta chỉ ở mức cao nhất là vài chục kiloelectron volt.Tuy nhiên, hạt alpha mất năng lượng đáng kể thông qua hiệu ứng tự hấp thụ. Hiệu ứng này giảm mạnh công suất thực của pin vi hạt nhân đồng vị phóng xạ alpha trong các thử nghiệm tới mức thấp hơn nhiều dự đoán trên lý thuyết, theo trưởng nhóm nghiên cứu Wang Shuao ở Đại học Đông Ngô. Wang đã dành nhiều năm tập trung nhu cầu phát triển hạt nhân bền vững của Trung Quốc.',
                'is_breaking_news' => 1,
                'is_approved' => 1,
                'status' => 1,
                'views' => 5,
            ]
        ]);
    }
}
