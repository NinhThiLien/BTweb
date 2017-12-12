-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2017 lúc 04:54 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom82`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `actions`
--

CREATE TABLE `actions` (
  `actid` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `actions`
--

INSERT INTO `actions` (`actid`, `name`, `content`) VALUES
(1, 'Chạy bộ\r\n\r\n', 'Nếu không có điều kiện về thời gian và kinh tế để đến các phòng tập mà vẫn muốn giảm cân thì chạy bộ là một thể thao giúp giảm cân tuyệt vời. Chỉ cần 30 phút đến 1 tiếng vào buổi sáng để thực hiện các bài khởi động và chạy vài vòng công viên hay quanh nhà mình sinh sống cũng giúp bạn tiêu hao đáng kể một lượng lớn calo. Chạy với một tốc độ vừa phải kết hợp với hít thở nhẹ nhàng sẽ giúp bạn giữ sức trong suốt quá trình giảm cân.'),
(2, 'Bơi\r\n\r\n', 'Bơi là môn thể thao vận động toàn thân, ngoài tác dụng giảm cân còn giúp bạn giải tỏa căng thẳng. Khi bơi, dưới tác động của dòng nước, một phần lớn calo sẽ được đốt cháy nhanh chóng nhất là đùi, cánh tay. Lưu ý, sau khi bơi, bạn hạn chế ăn uống. Nếu thèm ăn, bạn nên ăn những đồ ăn chứa ít calo và chất béo, chất đường bột để có thể giảm cân nhanh chóng. Các bạn cùng thực hiện bài tập giảm cân này nhé vì bơi nó không chỉ giúp các bạn giảm cân mà nó còn đem lại sức khỏe cho bản thân các bạn.\r\n\r\nCác chuyên gia cho rằng, đây là một bộ môn giúp bạn giảm cân khá là hiệu quả đấy, chỉ cần dành ra 2 giờ đồng hồ cho một ngày cuối tuần thôi là bạn đã giúp cho cơ thể mình tiêu hao một lượng lớn calo rồi, vì thế hãy duy trì những bài tập bơi lội để giảm cân tốt hơn nhé.\r\n\r\n'),
(3, 'Gập bụng\r\n\r\n', 'Gập bụng là một bài tập giảm cân giúp giảm mỡ bụng nhanh nhất. Rất đơn giản, bạn nằm lên sàn là hai tay đặt sau gáy. Dùng sức nâng phần thân trên lên và giữ nguyên chân, mông. Thực hiện liên tục mỗi ngày 30 phút, bạn sẽ cảm nhận rõ rệt hiệu quả mà bài tập này mang lại cho mình.\r\n\r\n'),
(4, 'Lắc vòng bài tập giảm cân hiệu quả nhanh.\r\n\r\n', 'Môn thể thao này sẽ giúp vòng vụng của bạn trở nên thon gọn và săn chắc một cách nhanh chóng. Sẽ tốt hơn và đốt cháy mỡ thừa nhanh hơn nếu bạn tập mỗi sáng và tối. Vì vậy, bạn không nên bỏ qua một thể thao này trong những giờ tập luyện của mình.\r\n\r\nLắc vòng là bài tập thể dục được rất nhiều chị em phụ nữ áp dụng, bởi bài tập này giúp chị em đốt cháy mỡ bụng một cách nhanh nhất. Chính lực ma sát của chiếc vòng đã tác động trực tiếp vào vòng eo, giúp bạn giảm mỡ bụng nhanh chóng và hữu hiệu.'),
(5, 'Hiit bài tập giảm cân được các chuyên gia đánh giá cao.\r\n\r\n', 'Bài tập hiit được các chuyên gia đưa ra nhầm giúp cho những ai muốn giảm cân có thể giảm cân một các hiệu quả khi chúng ta tập bài hiit này.\r\n\r\nBài tập hiit này là bài tập giảm cân với cường độ cao cho nên ít có ai có thể di trì được bài tập này một cách lâu dài để có hiệu quả cao.\r\n\r\nCho nên các bạn đừng bao giờ thấy khó hay mệt mỏi trong việc thực hiện các bài tập giảm cân mà bỏ cuộc vì thế sẽ không đem lại hiệu quả cao nhất khi các bạn giảm cân.\r\n\r\nXem thêm: 3 loại thuốc giảm cân tốt nhất hiện nay\r\n\r\nSau đây huấn luyện viên Hana sẽ hướng dẫn các bạn bài tập hiit giảm cân hiệu quả này nhé. Các bạn hãy chú ý theo dõi.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `batchs`
--

CREATE TABLE `batchs` (
  `id` int(10) UNSIGNED NOT NULL,
  `prgid` int(10) UNSIGNED NOT NULL,
  `actid` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `batchs`
--

INSERT INTO `batchs` (`id`, `prgid`, `actid`, `date`, `start`, `end`) VALUES
(1, 1, 2, '0000-00-00', '04:00:00', '11:00:00'),
(2, 1, 3, '0000-00-00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'WOMEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'MEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'KIDS', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_post_tags`
--

CREATE TABLE `blog_post_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Pink', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'T-Shirt', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_30_173611_create_programs_table', 1),
('2015_11_09_195836_add_category_id_image_to_programs', 1),
('2015_11_09_200213_blog_categories', 1),
('2015_11_09_201826_blog_tags', 1),
('2015_11_09_202625_blog_post_tags', 1),
('2017_11_29_160121_create_actions_table', 1),
('2017_11_29_162604_create_batchs_table', 1),
('2017_11_29_175434_create_participate_table', 1),
('2017_12_02_122434_add_constraint_to_tables', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_30_085919_depts', 1),
('2015_10_30_173611_create_posts_table', 1),
('2015_11_09_195733_rename_context_in_posts', 1),
('2015_11_09_195836_add_category_id_image_to_posts', 1),
('2015_11_09_200213_blog_categories', 1),
('2015_11_09_201826_blog_tags', 1),
('2015_11_09_202625_blog_post_tags', 1),
('2017_11_29_160121_create_actions_table', 1),
('2017_11_29_162245_create_programs_table', 1),
('2017_11_29_162604_create_batchs_table', 1),
('2017_11_29_175434_create_participate_table', 1),
('2017_11_29_193511_create_coachs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `participate`
--

CREATE TABLE `participate` (
  `regid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `prgid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(170) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '0',
  `coachid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `programs`
--

INSERT INTO `programs` (`id`, `url`, `title`, `description`, `content`, `image`, `level`, `coachid`, `created_at`, `updated_at`, `category_id`) VALUES
(1, '1', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, '2', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, '3', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, '4', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, '5', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(6, '6', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, '7', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, '8', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(9, '9', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(10, '10', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(11, '11', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(12, '12', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(13, '13', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(14, '14', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(15, '15', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(16, '16', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(17, '17', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(18, '18', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(19, '19', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(20, '20', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(21, '21', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(22, '22', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(23, '23', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(24, '24', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(25, '25', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(26, '26', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(27, '27', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(28, '28', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(29, '29', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(30, '30', '30 bài tập thể dục giảm cân, giảm mỡ bụng nhanh chóng trong 1 tháng', 'Tổng hợp các bài tập Cardio giúp giảm mỡ bụng và toàn thân nhanh chóng', 'Cardio không chỉ là bài tập giảm cân, giảm mỡ, giữ dáng, giúp cơ thể săn chắc mà còn là cách hữu hiệu nhất để giúp bạn sở hữu một trái tim khỏe mạnh. Ngoài ra, cardio còn giúp bạn phòng tránh được vô số các bệnh tật hiểm nghèo: tiểu đường, mỡ máu, tim mạch, cao huyết áp và béo phì...', 'blog-two.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(31, '31', 'Combo các bài tập cơ bản nhưng hiệu quả', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'Đây là 5 bài tập giảm cân được các chuyên gia giảm cân đưa ra và đánh giá rất cao về tính năng hiệu quả khi giảm cân.', 'blog-one.jpg', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer` tinyint(1) NOT NULL DEFAULT '0',
  `coach` tinyint(1) NOT NULL DEFAULT '0',
  `bday` date DEFAULT NULL,
  `adress` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` double(8,2) DEFAULT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `customer`, `coach`, `bday`, `adress`, `weight`, `job`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '56.8', 'zzvvmm96@gmail.com', 'zzvvmm96', '$2y$10$l9qvPNwd7LiWDciFtAb/f.jo25vQYahfo5ctA2GEL5rXKoosS2z8m', 0, 0, '0000-00-00', '', NULL, '', 'Q99UBLzQ6Gzv5jM3yqsyEOX2EK7XdUkDIpRwNi8eGmmz5gC934DisAh60cMu', '2017-11-29 15:30:13', '2017-11-30 06:24:19'),
(2, 'Nguyễn Tuấn Linh', 'zzvvmm962@gmail.com', 'zzvvmm962', '$2y$10$iUQt3XOKYIOkSJh2ozlXQujJG/i6AMrcNXL4Hzc2kZ4wP4bGN9mx6', 0, 0, '0000-00-00', '397 Trương Định', NULL, '', 'f0JeQOwRcny3HPfZLdKUTfaSiWGq3uCWpjbfuxYG87ovWHoDtMgVLfuFFvJ1', '2017-11-29 15:31:22', '2017-11-29 15:37:19'),
(3, 'Nguyễn Đình Đức', 'zzvvmm963@gmail.com', 'zzvvmm963', '$2y$10$Np5UuDivHeriqupFf7MbMORmJZisC90xbnV8gDrSakOhmwtQuyz.y', 0, 0, '0000-00-00', '', 223.88, 'asdsadsa', 'gWmu63x7jOl71reR2cxrW0fh3HVaJjTMNs2gbbph2XNO644h9bZNB9YX9Zb9', '2017-11-29 15:37:43', '2017-11-30 07:28:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`actid`);

--
-- Chỉ mục cho bảng `batchs`
--
ALTER TABLE `batchs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `batchs_prgid_foreign` (`prgid`),
  ADD KEY `batchs_actid_foreign` (`actid`);

--
-- Chỉ mục cho bảng `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_category_unique` (`category`);

--
-- Chỉ mục cho bảng `blog_post_tags`
--
ALTER TABLE `blog_post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_tags_tag_unique` (`tag`);

--
-- Chỉ mục cho bảng `participate`
--
ALTER TABLE `participate`
  ADD PRIMARY KEY (`regid`),
  ADD KEY `participate_userid_foreign` (`userid`),
  ADD KEY `participate_prgid_foreign` (`prgid`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programs_url_unique` (`url`),
  ADD KEY `programs_coachid_foreign` (`coachid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `actions`
--
ALTER TABLE `actions`
  MODIFY `actid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `batchs`
--
ALTER TABLE `batchs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `blog_post_tags`
--
ALTER TABLE `blog_post_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `participate`
--
ALTER TABLE `participate`
  MODIFY `regid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `batchs`
--
ALTER TABLE `batchs`
  ADD CONSTRAINT `batchs_actid_foreign` FOREIGN KEY (`actid`) REFERENCES `actions` (`actid`) ON DELETE CASCADE,
  ADD CONSTRAINT `batchs_prgid_foreign` FOREIGN KEY (`prgid`) REFERENCES `programs` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `participate`
--
ALTER TABLE `participate`
  ADD CONSTRAINT `participate_prgid_foreign` FOREIGN KEY (`prgid`) REFERENCES `programs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `participate_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_coachid_foreign` FOREIGN KEY (`coachid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
