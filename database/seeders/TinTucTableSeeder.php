<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinTucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tintucs')->insert([
            ['tieuDe' => 'Việt Nam sáng tạo khi xây dựng PII', 'noiDung' => 'Thông tin được Trưởng ban nghiên cứu các chỉ số tổng hợp, Vụ Phân tích dữ liệu và kinh tế, WIPO, Sacha Wunsch-Vincent nói tại Hội thảo "Đo lường và thúc đẩy kết quả đổi mới sáng tạo cấp địa phương: Vai trò của các chỉ số đổi mới sáng tạo tại khu vực" hôm 12/7.

Sự kiện do Tổ chức Sở hữu trí tuệ thế giới (WIPO) tổ chức, nằm trong khuôn khổ kỳ họp lần thứ 65 của Đại hội đồng các quốc gia thành viên, với tham gia của các đại biểu từ các quốc gia thành viên WIPO, chuyên gia về xây dựng chỉ số đổi mới sáng tạo cấp địa phương. heo ông Sacha Wunsch-Vincent đánh giá Việt Nam sáng tạo khi "đưa vào một Trụ cột về Tác động trong đo lường về đổi mới sáng tạo". Ông cho hay trước đây, Chỉ số đổi mới sáng tạo toàn cầu (GII) không có trụ cột về Tác động ở cấp quốc gia mà chỉ có công cụ để đo lường tác động của đổi mới sáng tạo cấp toàn cầu. Theo đó "có nhiều điều học hỏi được từ kinh nghiệm xây dựng chỉ số PII của Việt Nam". Trong báo cáo GII sẽ công bố vào tháng 9 tới sẽ có các chỉ số về tác động của đổi mới sáng tạo cấp độ quốc gia.

Trong bài chia sẻ tại hội thảo, ông Nguyễn Võ Hưng, Viện Chiến lược và Chính sách Khoa học và Công nghệ, Học viện Khoa học công nghệ và Đổi mới sáng tạo, cho biết Chỉ số đổi mới sáng tạo cấp địa phương (PII) của Việt Nam được xây dựng dựa trên khung GII của WIPO với phương pháp xây dựng chỉ số tổng hợp theo chuẩn quốc tế, dưới sự hỗ trợ của các chuyên gia của WIPO về mặt chuyên môn, phương pháp luận.

Chỉ số PII của Việt Nam có điểm mới và sự sáng tạo so với GII khi đưa vào trong khung chỉ số một trụ cột Tác động, thể hiện tác động của khoa học, công nghệ và đổi mới sáng tạo đến hoạt động sản xuất-kinh doanh và đến phát triển kinh tế - xã hội của địa phương.

Ông Hưng cho biết, kết quả PII năm 2023 đã được báo cáo Chính phủ và được các địa phương đón nhận. Nhiều địa phương đã tích cực tìm hiểu nội hàm, ý nghĩa của khung chỉ số và của từng chỉ số, các điểm mạnh, điểm yếu và thảo luận các giải pháp cải thiện phù hợp. Các đại diện đến từ Brazil, Colombia, Ấn Độ và Liên minh châu Âu cũng chia sẻ kinh nghiệm trong xây dựng chỉ số đánh giá đổi mới sáng tạo trong nước, nhằm cải thiện hiệu suất đổi mới, thiết kế chính sách tăng trưởng kinh tế cho từng khu vực.

Ông Rodrigo Ventura, kinh tế trưởng Viện Sở hữu Công nghiệp quốc gia Brazil (INPI) cho hay năm 2024 Brazil lần đầu tiên công bố Chỉ số đổi mới sáng tạo Brazil (BII), dự kiến vào tháng 8 tới. Bộ chỉ số do INPI xây dựng dựa theo cấu trúc của GII, được thiết kế với hai nhóm đầu vào đổi mới sáng tạo (gồm 5 trụ cột) và kết quả đầu ra đổi mới sáng tạo (2 trụ cột), với tổng cộng 74 chỉ số thành phần. Các chỉ số thành phần cũng được điều chỉnh nhằm phù hợp với quy mô kinh tế xã hội, dân số, đất đai của từng tiểu bang. Bên cạnh xếp hạng theo bang và chia thành 5 khu vực, BII còn vinh danh nhà lãnh đạo đổi mới.

Theo ông Rodrigo Ventura, báo cáo giúp địa phương nhìn ra "chìa khóa" để xây dựng và thực thi chính sách, tận dụng thế mạnh, vượt qua thách thức. Dẫn chứng, ông cho biết kết quả xếp hạng cho thấy các tiểu bang có cơ sở giáo dục mạnh thì chỉ số vốn nhân lực, đầu tư R&D, tổ chức nghiên cứu xuất sắc được chú trọng. Trong khi việc cải thiện cơ sở hạ tầng, kỹ thuật số vẫn là ưu tiên hàng đầu đối với khu vực kém phát triển. "Báo cáo cung cấp thông tin môi trường kinh doanh, hỗ trợ pháp lý giúp các nhà đầu tư, doanh nghiệp, nhất là các công ty khởi nghiệp có quyết định phù hợp", ông nhấn mạnh.

Còn ông Ashok A. Sonkusare, Viện Nghiên cứu Chuyển đổi quốc gia Ấn Độ (NITI Aayog) cho biết "III - Chỉ số đổi mới sáng tạo Ấn Độ" giúp thúc đẩy năng lực cạnh tranh, đánh giá hiệu suất đổi mới sáng tạo tại địa phương, đồng thời cải thiện thứ hạng của Ấn Độ trong xếp hạng GII toàn cầu".

Tháng 10/2019, NITI Aayog lần đầu công bố III với kỳ vọng đưa bộ công cụ giúp các nhà hoạch định chính sách có chiến lược tốt tạo môi trường thúc đẩy đổi mới sáng tạo. Giới chức có thể nhận ra các thách thức cần giải quyết, xác định điểm yếu và điểm mạnh cần tập trung khi thiết kế chính sách tăng trưởng kinh tế cho từng khu vực.', 'moTa' => 'THỤY SĨChuyên gia của Tổ chức Sở hữu trí tuệ thế giới (WIPO) đánh giá "có nhiều điều học hỏi được từ kinh nghiệm xây dựng chỉ số đổi mới sáng tạo cấp địa phương (PII) của Việt Nam".', 'anh' => 'image/kh1.jpg', 'id_danh_muc' => 1,'user_id'=>1],
            ['tieuDe' => 'Ếch cái ăn thịt con đực tìm cách giao phối
', 'noiDung' => 'John Gould, nhà sinh thái học ở Đại học Newcastle, nghe thấy âm thanh đáng sợ trong khi tiến hành nghiên cứu sau tiến sĩ về số lượng giảm dần của ếch chuông xanh vàng. Ở ao nước mà Gould đang khảo sát trên đảo Kooragang phía bắc Sydney, ông trông thấy một con ếch cái lớn đang nhai chân sau của ếch đực trong lúc chậm rãi kéo nó xuống hố. "Con ếch đực cố hết sức để ngăn điều này xảy ra", Gould kể lại.

Hành vi ăn thịt đồng loại giữa cá thể trưởng thành lần đầu tiên được ghi nhận ở ếch chuông xanh vàng, thôi thúc Gould tìm hiểu sâu hơn. Cuối cùng, ông cho rằng khi ếch chuông xanh vàng cái không hài lòng với khúc ca của con đực, nó có thể biến đối phương thành bữa ăn. Theo Gould, ếch cái gần như là kẻ săn mồi tối thượng đối với con đực bởi tai của chúng có cấu tạo hoàn hảo để nghe thấy tiếng kêu của bạn tình tiềm năng.

Ăn thịt đồng loại là hành vi phổ biến ở động vật lưỡng cư. Nhưng thông thường, chỉ có những con ếch, nhái hoặc kỳ giông nhỏ nhất trở thành bữa ăn. Nòng nọc của nhiều loài cũng ăn nòng nọc nhỏ hơn để phát triển. Trong một số trường hợp, con đực ăn trứng hoặc ấu trùng, ví dụ kỳ giông hellbender bố có thể ăn con non khi đối mặt với điều kiện nước khan hiếm.

Nhưng giới nghiên cứu hiếm khi quan sát hành vi ăn thịt đồng loại trưởng thành ở động vật lưỡng cư. Trong nghiên cứu công bố trên tạp chí Ecology and Evolution, Gould rà soát các tài liệu và chỉ tìm thấy hai ví dụ về ếch trưởng thành ăn thịt cá thể trưởng thành khác trong phòng thí nghiệm, trong đó con cái lớn hơn con đực. Ở ếch chuông xanh vàng, con cái có thể dài khoảng 7 cm trong khi con đực dài tối đa chưa đến 5 cm. Gould cho rằng ếch cái có thể xác định con đực phù hợp để ghép đôi hay để ăn hơn dựa trên tiếng kêu của nó. Điều này có nghĩa ếch đực đối mặt rủi ro lớn khi tìm cách thu hút bạn tình.

David Pfennig, giáo sư sinh vật học ở Đại học Bắc Carolina tại Chapel Hill muốn tìm nhiều bằng chứng hơn về ếch cái trưởng thành ăn thịt con đực trước khi xác nhận đây là hiện tượng phổ biến. Dù ếch cái có thể hưởng lợi từ việc ăn thịt con đực, nó có thể phải trả giá. Ếch đực có thể phản đòn hoặc khiến ếch cái mắc nghẹn khi ăn miếng to quá khổ. Hành vi ăn thịt đồng loại cũng có thể lây lan dịch bệnh trong quần thể mắc bệnh. Theo Gould, sau một hồi chật vật ếch cái kéo con đực vào sâu trong hố hơn. Ếch đực kêu ré lên lần nữa, sau đó giãy thành công chân sau khỏi miệng ếch cái và chạy trốn.', 'moTa' => 'AUSTRALIAẾch chuông vàng xanh có thể quyết định biến con đực thành bữa ăn nếu tiếng kêu của đối phương không đủ thu hút.', 'anh' => 'image/echkh.jpg', 'id_danh_muc' => 1,'user_id'=>1],
            ['tieuDe' => 'Phát hiện tiểu lục địa giữa Greenland và Canada', 'noiDung' => 'Một tiểu lục địa được phát hiện ở eo biển Davis giữa đảo Baffin, Canada và Greenland. Trong nghiên cứu mới công bố trên tạp chí Gondwana Research, các nhà khoa học đến từ Anh và Thụy Điển lập bản đồ tiểu lục địa bằng dữ liệu trọng lực và dữ liệu phản xạ địa chấn để phục dựng mảng kiến tạo của khu vực, IFL Science hôm 17/7 đưa tin.

"Thời kỳ tách giãn kéo dài và đáy biển trải rộng giữa Greenland và Bắc Mỹ hình thành các bồn trũng đại dương ở biển Labrador và vịnh Baffin, kết nối bởi eo biển Davis", nhóm nghiên cứu cho biết. "Tuy nhiên, chưa có sự thống nhất về chuyển động mảng kiến tạo chính xác giữa Greenland và Canada, cũng như quá trình tiến hóa của eo biển Davis. Mô hình trước đây cũng không thể giải thích nguồn gốc của vỏ lục địa dày khác thường ở đường biển này".

Trong quá trình phục dựng quá khứ của khu vực khi Greenland tách khỏi Canada, các nhà nghiên cứu nhận thấy phần vỏ dày khác thường thực chất là một tiểu lục địa. Đó là một khối kiến tạo tách khỏi lục địa, bao quanh bởi vỏ đại dương mỏng hơn.

Việc phân tích dữ liệu phản xạ địa chấn ngoài khơi tây Greenland, cùng với mô hình độ dày vỏ Trái Đất mới tổng hợp giúp xác định phần vỏ lục địa tương đối dày (19 - 24 km) tách khỏi Greenland. Nhóm nghiên cứu xác định đó là tiểu lục địa không tách ra hoàn toàn. Họ cho rằng sự tách giãn (mảng kiến tạo tách đôi) bắt đầu cách đây khoảng 118 triệu năm, trước khi quá trình tan vỡ lục địa xảy ra khoảng 61,27 triệu năm trước ở biển Labrador. Các lục địa tiếp tục trôi dạt trước khi Greenland va chạm và kết hợp với mảng kiến tạo Bắc Mỹ, tạo ra tiểu lục địa mới.

Nhóm nghiên cứu hy vọng phát hiện có thể giúp tăng cường hiểu biết về mảng kiến tạo mà nguy cơ mà chúng có thể đặt ra với người dân trên Trái Đất. Việc biết rõ tiểu lục địa hình thành như thế nào cũng giúp ngăn chặn thảm họa trong động đất.', 'moTa' => 'Tiểu lục địa nguyên thủy chìm dưới nước giữa Greenland và Canada là kết quả khi các mảng kiến tạo ở eo biển Davis dịch chuyển và tách giãn không hoàn chỉnh.', 'anh' => 'image/VNE-Micro-4903-1721298735.jpg', 'id_danh_muc' => 1,'user_id'=>1],
            ['tieuDe' => '12 siêu sao tại Olympic 2024', 'noiDung' => 'Rafael Nadal (Tây Ban Nha) được kỳ vọng giành HC vàng đơn nam ở tuổi 38. "Vua đất nện" còn cùng Carlos Alcaraz thi đấu nội dung đôi nam. Nadal từng giành HC vàng đơn nam Bắc Kinh 2008 và đôi nam Rio 2016.

Chủ nhân 22 Grand Slam đã bỏ qua Wimbledon vào đầu tháng 7 để dồn sức cho Olympic. Tennis tại Paris sẽ thi đấu trên đất nện như Roland Garros - nơi Nadal đang giữ kỷ lục 14 lần vô địch.

Tay vợt Tây Ban Nha đã bỏ lỡ gần như toàn bộ năm 2023 vì chấn thương hông. Khi gần trở lại, anh lại bị rách cơ đùi, và gặp một số chấn thương nhỏ khác làm ảnh hưởng đến khâu chuẩn bị cho Thế vận hội. Novak Djokovic (Serbia) đang khao khát giành tấm HC vàng Olympic đầu tiên, ở lần thứ năm tham dự, để tạo nên bảng thành tích hoàn hảo.

Kỷ lục gia với 24 Grand Slam chưa lần nào vào chung kết đơn nam Olympic, dù đã ba lần vào bán kết. Tay vợt sinh năm 1987 sẽ đối mặt rào cản khó nhằn mang tên Rafael Nadal và Carlos Alcaraz - những người rất mạnh trên mặt sân đất nện. Alcaraz còn là đối thủ vừa đánh bại Djokovic tại chung kết Wimbledon 2024. Mondo Duplantis (Thuỵ Điển) sẽ trở thành tâm điểm ở Paris 2024, nơi anh đang là đương kim vô địch.

Thần đồng nhảy sào sinh năm 1999 đang giữ kỷ lục thế giới nhảy sào, với 6,24 mét, và đang hướng đến kỷ lục mới 6,25 mét. Anh được chú ý khi tám lần phá kỷ lục thế giới, nhưng thường chỉ nâng tiêu chuẩn mỗi lần lên 1 cm, để nhận về những khoản thưởng từ 30.000 USD đến 100.000 USD.', 'moTa' => 'Thế vận hội Paris 2024 diễn ra từ 26/7 đến 11/8 với 10.500 VĐV, được kỳ vọng hấp dẫn nhờ có nhiều huyền thoại và một số tài năng Gen Z thi đấu.', 'anh' => 'image/tai-hinh-nen-lionel-messi-dep-58.jpg', 'id_danh_muc' => 3,'user_id'=>1],
            ['tieuDe' => '5 cầu thủ tăng giá sau Euro 2024', 'noiDung' => 'Lamine Yamal, tuyển Tây Ban Nha. Từ một cầu thủ triển vọng, Yamal trở thành ngôi sao thực sự sau khi giúp Tây Ban Nha vô địch Euro. Tiền đạo cánh phải 17 tuổi kiến tạo bốn lần, trong đó có ba lần ở vòng 1/8, tứ kết và chung kết. Kỷ lục trước đó của Tây Ban Nha thuộc về Cesc Fabregas năm 2008, David Silva năm 2012 và Dani Olmo năm 2021.

Ngoài việc giúp đồng đội ghi bàn, Yamal còn trực tiếp thực hiện siêu phẩm gỡ hòa 1-1, khởi đầu cuộc ngược dòng trước Pháp trong trận bán kết. Ngôi sao CLB Barca kết thúc giải với hai danh hiệu cá nhân Cầu thủ trẻ hay nhất và Bàn thắng đẹp nhất. Nico Williams, tuyển Tây Ban Nha: Do mối quan hệ thân thiết với Yamal, Williams có thể đã ngầm đồng ý cho Barca kích hoạt điều khoản giải phóng hợp đồng trị giá 63 triệu USD với Bilbao. Nhưng theo truyền thông châu Âu, tiền đạo cánh trái 22 tuổi đáng giá gấp đôi.

Trên đất Đức, Williams chơi sáu trận, ghi hai bàn, kiến tạo một lần, đạt tốc độ tối đa 35,8 km/h, tỷ lệ chuyền chính xác 89,67% và hàng loạt pha xử lý lắt léo. "Số 17" của Tây Ban Nha đang được so sánh với Neymar, nhưng nhanh hơn và ít rườm rà hơn. Để hớt tay trên của Barca, ba đội Liverpool, Bayern và Chelsea đều đang trả cao hơn điều khoản giải phóng. Jamal Musiala, tuyển Đức: Giống Yamal và Williams, Musiala lột xác từ cầu thủ triển vọng thành ngôi sao. Tiền đạo cánh 21 tuổi ghi ba bàn, góp công vào cả ba chiến thắng trước Scotland, Hungary và Đan Mạch.

Musiala cũng là một trong sáu Vua phá lưới của giải, bên cạnh Harry Kane, Dani Olmo, Georges Mikautadze, Cody Gakpo và Ivan Schranz. Phút 105 trận tứ kết, khi tỷ số đang là 1-1, trọng tài đã từ chối cho Đức quả phạt đền sau tình huống Musiala sút bóng trúng tay Marc Cucurella. Nếu điều ngược lại diễn ra, Đức có thể đã vào bán kết và Musiala có một cái kết tốt hơn. Dani Olmo, tuyển Tây Ban Nha: Olmo bắt đầu giải với ghế dự bị, nhưng kết thúc trong vai trò đá chính, ghi ba bàn, kiến tạo hai lần và lên ngôi đồng Vua phá lưới.

Bước ngoặt đến với tiền vệ tấn công 26 tuổi từ trận tứ kết. Sau khi vào thay Pedri, anh ghi một bàn và kiến tạo bàn quyết định. Đến trận bán kết, Olmo trực tiếp ghi bàn quyết định vào lưới Pháp. Qua hai kỳ Euro, Olmo đã ghi ba bàn và kiến tạo năm lần. Thành tích đó đủ để các CLB lớn đưa anh rời Leipzig hè này.', 'moTa' => 'ĐỨCYamal, Williams hay Musiala có thể tạo ra những vụ chuyển nhượng hàng trăm triệu USD, nếu chấp nhận chuyển sang những CLB giàu có hè này.', 'anh' => 'image/230430053308-02-lamine-yamal-barca-041923-restricted.jpg', 'id_danh_muc' => 3,'user_id'=>1],
            ['tieuDe' => 'Tour đảo Phú Quốc gián đoạn đã hoạt động trở lại', 'noiDung' => 'Ông Hồ Thanh Sang, Trưởng đại diện Cảng vụ hàng hải Phú Quốc cho biết sáng 18/7, các tàu ra đảo Phú Quốc hoạt động trở lại, tình hình thời tiết chuyển biến tốt hơn, còn mưa nhẹ.

Trước đó, tàu ra Đảo Ngọc tạm ngưng từ ngày 13/7 đến 15/7, chạy lại chiều 16/7 và phải tạm ngưng ngay ngày hôm sau vì gió mạnh, biển có mưa và giông.

Các tour tham quan đảo ở Phú Quốc cũng chịu ảnh hưởng do điều kiện thời tiết, lịch cano chạy phụ thuộc vào lịch tàu. Ông Phạm Quang Hậu, Giám đốc Rooty Trip Phú Quốc, cho hay tour đảo của công ty hoạt động lại từ sáng nay sau gần một tuần tạm ngưng đón khách. Hôm nay trên đảo có mưa buổi sáng, trời âm u cả ngày. Công ty phục vụ khoảng 100 khách trong ngày hoạt động lại. Ông Hậu cho biết tỷ lệ hoàn tour trong những ngày vừa qua khoảng 50%, số còn lại khách đổi sang mua tour tham quan trên bờ. Các dịch vụ cáp treo vẫn hoạt động bình thường, chỉ một số trò chơi ngoài trời trên cao bị dừng để đảm bảo an toàn.

Năm nay Phú Quốc vào mùa mưa sớm hơn năm ngoái, bắt đầu từ tháng 6. Năm ngoái, lượng mưa dồn vào tháng 8-9, lượng khách kẹt lại nhiều hơn. "Những ngày tới, tình hình có thể chưa ổn định vì đang có áp thấp, khả năng mưa nhiều", ông Hậu nói và cho biết hiện vẫn có khách đặt trước tour đảo và công ty sẽ dựa trên tình hình thời tiết để thông báo với khách. Hướng dẫn viên du lịch địa phương Trương Phú Quốc cho biết một năm "đảo ngọc" có thể đón hơn 10 cơn bão, khiến người làm du lịch "đã quen và chấp nhận" chuyện khách hủy tour, lượng khách thấp. Ảnh hưởng lớn nhất với người làm du lịch trên đảo mỗi khi mưa bão là việc vận chuyển hàng hóa từ đất liền. Nguồn cung nguyên vật liệu hiếm hơn, dẫn đến giá cả dịch vụ leo thang.

Ông Trương Công Tâm, Chủ tịch Hiệp hội Hướng dẫn viên chuyên nghiệp Phú Quốc, cho rằng việc tàu ngưng, tour ở Phú Quốc bị dừng vào mùa này là chuyện xảy ra thường xuyên. Khách đi tour đảo Phú Quốc dịp này chủ yếu nội địa, khách miền Tây đi tàu chiếm đa số. Lượng khách đi tàu đến các đảo ở Kiên Giang từ đầu tháng đến nay chỉ khoảng 1.000 khách. Lượng khách kẹt lại trên đảo Phú Quốc do tàu ngưng chạy không nhiều, do 90% khách miền Tây đến Phú Quốc chọn tuyến Hà Tiên, tuyến này thuờng hoạt động lại sớm hơn các tuyến khác.

"Tàu chạy tuyến Hà Tiên đi phía trong, đỡ sóng gió hơn các tuyến khác", ông Tâm nói.', 'moTa' => 'Ngày 18/7, các tàu ra đảo Phú Quốc được phép chạy, các tour đi đảo nhỏ cũng trở lại sau vài ngày ngưng đón khách nhưng hoạt động theo thời tiết.', 'anh' => 'image/051547ac87f922a77be8-2894-1721295101.jpg', 'id_danh_muc' => 5,'user_id'=>1],
            ['tieuDe' => 'Hội An được bình chọn thành phố đẹp thứ 4 thế giới', 'noiDung' => 'Theo công bố giải Worlds Best thường niên vào tháng 7 của tạp chí du lịch Mỹ Travel & Leisure, Hội An đứng thứ 4 tại hạng mục 25 thành phố đẹp nhất thế giới 2024 với 90,67 điểm trên 100, sau San Miguel de Allende của Mexico, Udaipur của Ấn Độ và Kyoto của Nhật Bản.

Trong top 25 thành phố đẹp nhất châu Á, Hội An đứng thứ 3 sau hai đại diện từ Ấn Độ và Nhật Bản. Trong mắt du khách quốc tế và các chuyên gia du lịch, "không có gì ngạc nhiên khi Hội An xuất hiện trong danh sách". Ngoài danh hiệu Di sản Thế giới UNESCO trao cho Phố cổ Hội An, điểm đến còn là nơi lý tưởng cho người sành ăn cùng các món ngon như cao lầu, bánh mì và những người đam mê lịch sử. Hội An cách sân bay quốc tế Đà Nẵng 30 km, thuận tiện cho việc di chuyển, ghé thăm. Worlds Best nhằm tôn vinh các điểm đến, khách sạn, hãng hàng không cùng các dịch vụ xuất sắc trong lĩnh vực du lịch. Năm nay, giải thưởng thu hút hơn 700.000 phiếu bầu.

Các thành phố được chấm điểm dựa trên các tiêu chí về danh lam thắng cảnh, văn hóa, đồ ăn, sự thân thiện của người dân và điểm đến, mua sắm cũng như giá trị mà nơi đó mang lại cho chuyến đi của du khách. Mỗi tiêu chí có 4 bậc để độc giả xếp hạng: xuất sắc, trên trung bình, trung bình và kém. Tổng điểm của một thành phố đạt được là điểm trung bình mà các du khách chấm cho 4 tiêu chí này.

', 'moTa' => 'QUẢNG NAMHội An là đại diện duy nhất của Việt Nam được Travel & Leisure vinh danh ở hai hạng mục Thành phố đẹp nhất thế giới và nhất châu Á năm 2024.', 'anh' => 'image/DJI-0945-6852-1721271896.jpg', 'id_danh_muc' => 5,'user_id'=>1],
            ['tieuDe' => 'Cha bé gái xin giảm hình phạt cho kẻ bắt cóc con', 'noiDung' => 'Ngày 18/7, Sơn, 35 tuổi, bị TAND tỉnh Long An xét xử về tội Bắt cóc nhằm chiếm đoạt tài sản với khung hình phạt 15-20 năm, hoặc tù chung thân. Vụ án từng gây rúng động dư luận 8 tháng trước. Trả lời HĐXX, Sơn thừa nhận toàn bộ hành vi như cáo trạng truy tố. Bị cáo có vợ và con trai 4 tuổi, là bạn thân của anh Tuyển (33 tuổi, làm nghề kinh doanh) hơn 20 năm. Con Sơn học chung lớp với con gái 3 tuổi của anh Tuyển tại trường mầm non ở phường 6, TP Tân An.

Bị cáo khai trước đây làm nhân viên bưu điện, sau nghỉ việc rồi ham mê cờ bạc, mắc nợ ngân hàng và nhiều người hơn 400 triệu đồng không có khả năng chi trả. Do chủ nợ đòi gắt gao, Sơn lên kế hoạch bắt cóc con gái bạn thân đòi tiền chuộc, rồi đi mua chai thuốc trừ sâu bỏ vào balô.

Đến chiều 2/10/2023, Sơn thuê tài xế ở cùng xã đưa đến trường mầm non để "đón con đưa đi chơi". Khi đến lớp, Sơn đề nghị cô giáo cho đón luôn con gái anh Tuyển để "đi Thảo Cầm Viên (tại TP HCM)". Cô giáo không nghi ngờ, đồng ý, vì biết hai gia đình này thân thiết. Sơn sau đó bảo tài xế chở về nhà, gửi con trai cho mẹ ruột giữ, rồi tiếp tục đưa con anh Tuyển đến TP HCM.

Đến cổng Thảo Cầm Viên, Sơn bảo tài xế về trước, tiền xe tính sau. Anh ta sau đó gọi taxi định đưa bé gái đến bến xe Miền Đông để đi Đà Lạt, tỉnh Lâm Đồng. Tuy nhiên, khi đến phường An Phú, TP Thủ Đức, lo sợ đường xa bé gái khóc sẽ khiến âm mưu bị bại lộ, Sơn yêu cầu tài xế ghé vào một khách sạn nào gần nhất.

Trên đường đi, hắn liên tục dùng hai điện thoại để gọi điện, nhắn tin cho anh Tuyển nói đã bắt cóc con gái, yêu cầu chuyển 2 tỷ đồng chuộc con. Để uy hiếp tinh thần bạn thân, hắn gửi hình ảnh bé gái cùng chai thuốc diệt cỏ, đe dọa "trong 60 phút không chuyển tiền sẽ cho con bé uống" và cũng uống để tự sát.', 'moTa' => 'LONG ANAnh Lê Trọng Tuyển xin tòa giảm trách nhiệm hình sự cho bạn thân Nguyễn Thanh Sơn - kẻ bắt cóc con gái của anh đòi tiền chuộc 2 tỷ đồng.', 'anh' => 'image/DSC07802-copy-5890-1721278235.jpg', 'id_danh_muc' => 6,'user_id'=>1],
            ['tieuDe' => 'Giám đốc bị bắt trong vụ 3 công nhân tử vong ở đập thủy điện', 'noiDung' => 'Ngày 18/7, ông Đoàn Trọng Đạt, 38 tuổi, bị Công an tỉnh Lai Châu bắt tạm giam về hành vi Vi phạm quy định về an toàn lao động.

Động thái này được nhà chức trách đưa ra khi điều tra vụ tai nạn hôm 11/7, tại công trình xây dựng hầm dẫn nước thuộc dự án thủy điện Nậm Cuổi 1, xã Nậm Hàng, huyện Nậm Nhùn.

Liên quan vụ án, hai ngày trước, Lê Văn Duẩn, Chỉ huy trưởng công trình hầm dẫn nước thủy điện Nậm Cuổi 1, đã bị bắt. Cơ quan điều tra xác định, tháng 2/2023, Công ty Cổ phần Thuỷ điện Nậm Cuổi 1 ký hợp đồng giao khoán thi công hạng mục đào hầm và gia cố tạm công trình tại thủy điện, trị giá 26,6 tỷ đồng với Công ty T&Đ 86. Tuy nhiên, ông Đạt không nghiên cứu quy định đảm bảo an toàn lao động khi thi công công trình ngầm; không tập huấn an toàn lao động; không kiểm tra, quan trắc không khí trong hầm trước khi cho công nhân vào làm việc; không trang bị đầy đủ bảo hộ cho công nhân. Đây là lý do khiến 3 công nhân tử vong khi làm việc.

Ngày 9/7, tại hầm đập thủy điện có một công nhân bị ngạt khí phải đưa vào viện cấp cứu nhưng ông Đạt không chỉ đạo dừng mọi hoạt động và không kiểm tra điều kiện an toàn, kiểm tra chất lượng không khí.

Cảnh sát cáo buộc, các sai phạm trên của ông Đạt là nguyên nhân dẫn đến việc 3 công nhân tử vong ngày 11/7.

Lúc 0h hôm đó, 3 nam công nhân 31-41 tuổi vào hầm đập chính thủy điện Nậm Cuổi 1 để vận chuyển vật liệu. Đến gần 4h không thấy họ trở ra và không thể liên lạc, công ty đã báo cơ quan chức năng. Khoảng 10h30, trinh sát tìm thấy người bị nạn đầu tiên cách cửa hầm 1.130 m và tiếp tục phát hiện hai nạn nhân trên cabin máy xúc cách vị trí đầu tiên 20 m.', 'moTa' => 'LAI CHÂUÔng Đoàn Trọng Đạt, Chủ tịch HĐQT, Giám đốc Công ty T&Đ 86, bị cáo buộc vi phạm quy định về an toàn lao động khiến 3 công nhân tử vong trong hầm đập thủy điện.', 'anh' => 'image/451698725-800848275547353-8519-9772-6170-1721298535.jpg', 'id_danh_muc' => 6,'user_id'=>1],
            ['tieuDe' => 'Nam sinh vượt khó thành thủ khoa tốt nghiệp ở Cà Mau', 'noiDung' => 'Trưa 18/7, Mai Hoàng Minh Hiếu, cựu học sinh lớp 12X2, trường THPT Đầm Dơi, vẫn lâng lâng sau khi trở về từ lễ tuyên dương của huyện. Không chỉ dẫn đầu ở tổng điểm 6 môn (55,3/30), nam sinh còn là thủ khoa khối D01 (Toán, Văn, Anh) của tỉnh với điểm Tiếng Anh 9,6; Văn 9,5; Toán 8,2.

Điểm thi các môn khác của em là Sử 9 điểm; Địa 9,75; Giáo dục công dân 9,25.

Hiếu kể sáng hôm qua em canh từng phút để tra cứu điểm thi của mình. Kết quả không quá chênh lệch so với điểm tự chấm của em sau khi kết thúc kỳ thi.

"Em vui vì mình đã đạt được mục tiêu đề ra", Hiếu nói. "Trước đó, em lo lắng nhất môn Văn nhưng đã đạt 9,5 điểm". Hiếu nói mẹ một mình nuôi dưỡng hai anh em, gia cảnh không mấy khá giả. Từ nhỏ, em luôn ý thức phấn đấu học thật tốt để không phù lòng mẹ. 12 năm học phổ thông, Hiếu đều đạt danh hiệu học sinh giỏi, nhiều lần đứng đầu về điểm học tập toàn trường.

Nam sinh học tốt môn Tiếng Anh, từng đạt giải nhất kỳ thi cấp huyện năm lớp 9, giải khuyến khích cấp tỉnh năm lớp 10, đạt 6.5 IELTS.

Năm lớp 11, Hiếu ẵm giải nhì Tiếng Anh, đồng thời giành giải nhất cuộc thi sáng tạo khoa học kỹ thuật cấp tỉnh. Em khảo sát và đánh giá lợi ích của xơ dừa, than tre, vỏ tràm và san hô trong quá trình xử lý nước thải xi phông ao tôm công nghiệp. Hiếu bắt đầu lập kế hoạch ôn tập cho kỳ thi tốt nghiệp THPT từ cuối năm lớp 11. Đầu tiên, nam sinh xác định điểm mạnh và hạn chế, từ đó tìm cách học. Hiếu thường ôn luyện dựa trên các tài liệu được truyền lại từ các anh chị khóa trước, làm bài tập theo chủ đề. Riêng môn Văn, ngoài kiến thức cơ bản, nam sinh rèn luyện các kỹ năng như cảm nhận tác phẩm, tư duy phản biện.

Với môn Tiếng Anh, nam sinh nhìn nhận điểm bất lợi của mình là sống ở vùng nông thôn, điều kiện tiếp xúc, giao tiếp bằng tiếng nước ngoài hạn chế. Em cố gắng nắm chắc ngữ pháp, cách đọc, viết qua bài giảng của thầy cô trên lớp. Với kỹ năng Nói, Hiếu tham gia các hội nhóm học tiếng Anh trên mạng để luyện tập.', 'moTa' => 'Minh Hiếu, thủ khoa tỉnh Cà Mau với 55,3/60 điểm là học sinh trường huyện, gia cảnh khó khăn.

', 'anh' => 'image/thu-khoa-2-jpg-2138-1721286222-9893-1629-1721286497.jpg', 'id_danh_muc' => 2,'user_id'=>1],
            ['tieuDe' => 'Đại học Giao thông vận tải công bố điểm sàn xét tuyển', 'noiDung' => 'Trường Đại học Giao thông vận tải ngày 18/7 thông báo điểm sàn xét tuyển dựa vào kết quả thi tốt nghiệp THPT. Ngoài Logistics và quản lý chuỗi cung ứng tại Hà Nội lấy 23 điểm, các ngành còn lại đều có điểm sàn từ 22 trở xuống.

Ngưỡng thấp nhất áp dụng với thí sinh xét vào trụ sở Hà Nội là 17, ở các ngành Kỹ thuật cơ sở hạ tầng, Kỹ thuật xây dựng công trình thủy, Kỹ thuật xây dựng công trình giao thông, Kiến trúc, Kỹ thuật xây dựng công trình giao thông.

Tại cơ sở TP HCM, ngành Kỹ thuật xây dựng công trình giao thông xét tuyển thí sinh đạt 16 điểm trở lên - thấp nhất. Đây là tổng điểm ba môn theo tổ hợp, cộng điểm ưu tiên (nếu có). Với phương thức xét điểm thi đánh giá tư duy của Đại học Bách khoa Hà Nội, Đại học Giao thông vận tải lấy điểm sàn là 50/100.

Năm nay, trường tuyển 6.000 sinh viên. Ngoài hai phương thức trên, Đại học Giao thông vận tải còn xét tuyển bằng học bạ, xét kết hợp chứng chỉ IELTS và học bạ, dựa vào điểm thi đánh giá năng lực của Đại học Quốc gia TP HCM và xét tuyển thẳng.

Hồi cuối tháng 6, trường đã công bố điểm trúng tuyển theo một số phương thức xét tuyển sớm. Trong đó, điểm chuẩn học bạ ở mức 18-28,51.

Năm ngoái, đầu vào theo điểm thi tốt nghiệp của trường cao nhất là 26,12 với ngành Logistics và Quản lý chuỗi cung ứng. Các ngành đào tạo tại Hà Nội lấy đầu vào trong khoảng 21-25, chỉ hai ngành lấy dưới 19 là Kỹ thuật xây dựng công trình thủy (18,3) và Kỹ thuật xây dựng công trình giao thông (18,9).

Còn tại phân hiệu TP HCM, điểm chuẩn khoảng 16,15-24,83.', 'moTa' => 'Điểm sàn vào Đại học Giao thông vận tải (UTC) từ 16 đến 23, ngành Logistics và quản lý chuỗi cung ứng cao nhất.', 'anh' => 'image/dh-giao-thong-van-tai-2-1504.jpg', 'id_danh_muc' => 2,'user_id'=>1],
            ['tieuDe' => 'Uống nhầm chất tẩy rửa xe, bé gái 4 tuổi tử vong', 'noiDung' => 'Ngày 18/7, đại diện Bệnh viện đa khoa tỉnh Kon Tum cho biết trẻ ở huyện Sa Thầy, nhập viện cách đây 5 hôm. Cùng được đưa vào cấp cứu là một bé gái khác 4 tuổi, trong tình trạng mệt lả, buồn nôn. Gia đình cho biết hai trẻ uống chai nước màu hồng, đựng hóa chất tẩy rửa xe của nhà hàng xóm. Dù được cấp cứu tích cực, một bé đã tử vong. Trường hợp còn lại đang được hồi sức tích cực.

Ngoài hai trường hợp trên, tối qua, viện cấp cứu thành công một bệnh nhi 4 tuổi, ngộ độc do uống nhầm chất tẩy rửa. Hiện sức khỏe người bệnh đã ổn định.

Trẻ uống nhầm hóa chất thường có biểu hiện ho sặc sụa, cơ thể tím tái, hơi thở có mùi hóa chất. Ngoài ra, bé có thể bỏng quanh vùng miệng do nuốt phải loại chất độc ăn mòn. Tổn thương tùy thuộc loại hóa chất, nồng độ, thời gian và liều lượng mà trẻ nuốt hoặc ăn phải.

Để sơ cứu, việc đầu tiên người lớn cần quan sát thứ con uống nhầm là chất gì. Thông tin này rất quan trọng để xử lý ban đầu cũng như cung cấp cho bác sĩ khi bé nhập viện.

Nếu chất uống nhầm là hóa chất không bay hơi, hãy gây nôn bằng cách dùng miếng vải nhỏ bọc đầu ngón tay đặt nhẹ vào nửa bên trong lưỡi của bé. Sau khi nôn, nhanh chóng đưa bé tới cơ sở y tế gần nhất để xử lý.

Để tránh uống nhầm hóa chất, bác sĩ khuyến cáo phụ huynh để các loại thuốc, hóa chất xa tầm tay của trẻ. Những chất có độc tính cao như hóa chất diệt côn trùng, dung môi pha sơn... cần để những hộp riêng, có khóa. Không đựng đồ uống vào chai lọ vốn là bao bì đựng hóa chất. Ngược lại, không đựng hóa chất vào các vỏ chai vốn đựng nước uống.', 'moTa' => 'KON TUMBệnh nhi 4 tuổi uống nhầm chất tẩy rửa màu hồng, mùi thơm vị bạc hà, không có nhãn hiệu, sau đó tử vong.', 'anh' => 'image/anh-vien-thuoc-tay-dep-mau-sac.jpg', 'id_danh_muc' => 4,'user_id'=>1],
            ['tieuDe' => 'Bộ Y tế: Không lạm dụng cách ly bạch hầu như Covid-19', 'noiDung' => 'Thông tin được TS. Hoàng Minh Đức, Cục trưởng Cục Y tế dự phòng, Bộ Y tế, nói hôm 18/7, đề nghị các địa phương không lạm dụng cách ly, không đúng đối tượng, gây hoang mang lo lắng cũng như xáo trộn cuộc sống người dân.

Với người xác định là F1 của bệnh nhân nhân bạch hầu, Bộ Y tế khuyến nghị tự theo dõi sức khỏe, cách ly tại nhà trong vòng 14 ngày. Đồng thời phải liên hệ nhân viên y tế để được hướng dẫn phát hiện các triệu chứng nghi ngờ mắc bệnh và uống thuốc kháng sinh dự phòng.

Cục trưởng Cục Y tế dự phòng đánh giá tình hình bạch hầu hiện chưa phải là vấn đề phức tạp, số mắc thấp, các ổ dịch nhỏ vẫn trong tầm kiểm soát, không có nguy cơ bùng phát thành dịch lớn, trên diện rộng. Năm 2023, nước ta ghi nhận 57 trường hợp mắc và 7 người tử vong. 7 tháng đầu năm nay, có 6 trường hợp mắc bệnh bạch hầu, trong đó một người qua đời. Một số ca xảy ra rải rác trong những năm gần đây tại các địa phương có tỷ lệ tiêm chủng thấp. Người mắc đều chưa tiêm vaccine hoặc chưa chích ngừa đủ mũi theo khuyến cáo.

Để chủ động phòng chống, Cục Y tế dự phòng khuyên người dân cần đưa trẻ (từ 2 tháng đến 7 tuổi) đi tiêm chủng các vaccine có chứa thành bạch hầu (DPT-VGB-Hib, DPT...) đầy đủ, đúng lịch để đảm bảo miễn dịch phòng bệnh. Trong trường hợp hoãn tiêm, nên chích ngừa sớm nhất có thể.

Thường xuyên rửa tay bằng xà phòng; che miệng khi ho hoặc hắt hơi; giữ vệ sinh thân thể, mũi, họng hàng ngày; hạn chế tiếp xúc với người mắc bệnh hoặc nghi ngờ mắc bệnh. Đảm bảo nhà ở, nhà trẻ, lớp học thông thoáng, sạch sẽ và có đủ ánh sáng.

Khi có dấu hiệu mắc bệnh hoặc nghi ngờ mắc bệnh bạch hầu phải được đưa đến cơ sở y tế để được khám, điều trị kịp thời. Người dân tại nơi có ổ dịch cần chấp hành nghiêm túc việc uống thuốc điều trị dự phòng và tiêm vaccine phòng bệnh theo chỉ định và khuyến cáo của cơ quan y tế.', 'moTa' => 'Việc cách ly tại nhà chỉ áp dụng với người tiếp xúc gần (F1) với bệnh nhân bạch hầu, không mở rộng sang F2, F3 như từng thực hiện với Covid-19.', 'anh' => 'image/1-jpeg-7864-1721307731.jpg', 'id_danh_muc' => 4,'user_id'=>1]
        ]);
    }
}
