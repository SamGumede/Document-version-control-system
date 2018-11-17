
--
-- Database: `phpsamples`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_users`
--

CREATE TABLE `tbl_registered_users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_registered_users`
--
ALTER TABLE `tbl_registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_registered_users`
--
ALTER TABLE `tbl_registered_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;